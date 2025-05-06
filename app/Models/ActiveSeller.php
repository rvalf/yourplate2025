<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ActiveSeller extends Model
{
    use HasFactory;

    protected $primaryKey = 'act_id'; 
    public $incrementing = false; 
    protected $keyType = 'string'; 

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->act_id = Str::uuid(); 
        });
    }

    protected $fillable = [
        'act_id',
        'act_image',
        'act_approval',
        'act_usr_id_seller',
    ];

    public function userSeller()
    {
        return $this->belongsTo(User::class, 'act_usr_id_seller', 'usr_id');
    }
}
