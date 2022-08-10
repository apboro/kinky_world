<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRelation extends Model
{
        use HasFactory;

    public function user()    {
        return $this->belongsTo(User::class);
    }

    public function chatWithUser()    {
        return $this->belongsTo(
            User::class,
            'chat_with_user_id',
            'id',
            );
    }

    public function favoriteUser()    {
        return $this->belongsTo(
            User::class,
            'favorite_user_id',
            'id',
        );
    }

    public function seenByUser()    {
        return $this->belongsTo(
            User::class,
            'seen_by_user_id',
            'id',
        );
    }

    protected $fillable = [
        'chat_with_user_id',
        'favorite_user_id',
        'seen_by_user_id',
    ];
}
