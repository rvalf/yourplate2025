<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Message extends Model
{
    use HasFactory;
    protected $primaryKey = 'msg_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->msg_id = Str::uuid();
        });
    }

    protected $fillable = [
        'msg_id',
        'msg_text',
        'msg_prd_id',
        'msg_chat_id',
        'msg_usr_id_sender',
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'msg_usr_id_sender');
    }

    public function chat()
    {
        return $this->belongsTo(Chat::class, 'msg_chat_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'msg_prd_id');
    }
}
