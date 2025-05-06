<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Meal extends Model
{
    use HasFactory;

    protected $primaryKey = 'meal_id'; 
    public $incrementing = false; 
    protected $keyType = 'string'; 

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->meal_id = Str::uuid(); 
        });
    }

    protected $fillable = [
        'meal_id',
        'meal_name',
        'meal_material',
        'meal_step',
        'meal_image',
    ]; 
}
