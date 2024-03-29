<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fetish extends Model
{
        use HasFactory;

    public function userFetishes()    {
        return $this->hasMany(UserFetish::class);
    }

    protected $fillable = [
        'name',
];

}
