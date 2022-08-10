<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KinkbnbTransaction extends Model
{
        use HasFactory;

    public function kinkbnbObject(){
        return $this->belongsTo(KinkbnbObject::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'request_from_user_id', 'id');
    }

    protected $fillable = [
        'status',
        'qr_code',
    ];
}
