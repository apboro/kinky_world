<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KinkbnbMedia extends Model
{
        use HasFactory;

    public function kinkbnbObject(){
        return $this->belongsTo(KinkbnbObject::class);
    }

    protected $fillable = [
        'image_file',
];
}
