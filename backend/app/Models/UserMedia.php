<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMedia extends Model
{
        use HasFactory;

    public function user()    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'image_file',
        'video_file',
    ];
}
