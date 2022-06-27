<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KinkbnbObject extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    public function kinkbnbMedia(){
        return $this->hasMany(KinkbnbMedia::class);
    }

    public function kinkbnbTransactions(){
        return $this->hasMany(KinkbnbTransaction::class);
    }

    protected $fillable = [
        'name',
        'description',
        'base_price',
        'subscription_price',
    ];
}
