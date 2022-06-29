<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFetish extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    public function user()    {
        return $this->belongsTo(User::class);
    }

    public function fetish()    {
        return $this->belongsTo(Fetish::class);
    }

    protected $fillable =  [
    ];
}
