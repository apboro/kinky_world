<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartyTransaction extends Model
{
        use HasFactory;

    public function party(){
        return $this->belongsTo(Party::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'request_from_user_id', 'id');
    }

    protected $fillable = [
        'status',
    ];
}
