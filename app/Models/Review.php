<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Review extends Model
{
    use HasFactory;
    protected $primaryKey = 'rvw_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->rvw_id = Str::uuid();
        });
    }

    protected $fillable = [
        'rvw_id',
        'rvw_rate',
        'rvw_desc',
        'rvw_usr_id',
        'rvw_prd_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'rvw_prd_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'rvw_usr_id');
    }
}
