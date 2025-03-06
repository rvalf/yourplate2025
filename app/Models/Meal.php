<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Meal extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika sesuai konvensi Laravel)
    protected $table = 'meals';

    // Primary key menggunakan UUID
    protected $primaryKey = 'meal_id';
    public $incrementing = false; // Karena UUID bukan auto-increment
    protected $keyType = 'string'; // UUID adalah string

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'meal_id',
        'meal_name',
        'meal_material',
        'meal_step',
        'meal_image'
    ];

    // Event untuk generate UUID saat membuat data baru
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($meal) {
            if (empty($meal->meal_id)) {
                $meal->meal_id = Str::uuid();
            }
        });
    }
}
