<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'prd_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->prd_id = Str::uuid();
        });
    }

    protected $fillable = [
        'prd_id',
        'prd_name',
        'prd_type',
        'prd_desc',
        'prd_image',
        'prd_price',
        'prd_usr_id_seller',
        'prd_closed_po',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'prd_usr_id_seller');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'rvw_prd_id');
    }

    public function avgRating()
    {
        if ($this->reviews->isEmpty()) {
            return '-';
        }

        $average = $this->reviews->avg('rvw_rate');
        return number_format($average, 1);
    }
}
