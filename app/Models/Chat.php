<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Chat extends Model
{
    use HasFactory;
    protected $primaryKey = 'chat_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->chat_id = Str::uuid();
        });
    }

    protected $fillable = [
        'chat_id',
        'chat_usr_id_seller',
        'chat_usr_id_buyer',
    ];

    public function seller()
    {
        return $this->belongsTo(User::class, 'chat_usr_id_seller');
    }

    public function buyer()
    {
        return $this->belongsTo(User::class, 'chat_usr_id_buyer');
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'msg_chat_id');
    }

    public function lastMessage()
    {
        return $this->hasOne(Message::class, 'msg_chat_id')->orderBy('created_at', 'desc');
    }
}
