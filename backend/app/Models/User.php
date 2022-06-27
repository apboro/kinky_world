<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasApiTokens, HasFactory, Notifiable;

    public function userRelations()    {
        return $this->hasMany(UserRelation::class);
    }

    public function chatWithUser()    {
        return $this->hasMany(
            UserRelation::class,
        'chat_with_user_id',
        'id');
    }

    public function favoriteUser()    {
        return $this->hasMany(
            UserRelation::class,
            'favorite_user_id',
            'id');
    }

    public function seenByUser()    {
        return $this->hasMany(
            UserRelation::class,
            'seen_by_user_id',
            'id');
    }

    public function userMedia()    {
        return $this->hasMany(
            UserMedia::class,
        'photo_id',
        'id');
    }

    public function userFetishes()    {
        return $this->hasMany(UserFetish::class);
    }

    public function parties()    {
        return $this->hasMany(Party::class);
    }

    public function blogs()    {
        return $this->hasMany(Blog::class);
    }

    public function blogComments()    {
        return $this->hasMany(BlogComment::class);
    }

    public function partyTransactions()    {
        return $this->hasMany(PartyTransaction::class, 'request_from_user_id', 'id');
    }

    public function kinkbnbObjects()    {
        return $this->hasMany(KinkbnbObject::class);
    }

    public function kinkbnbTransactions()    {
        return $this->hasMany(KinkbnbTransaction::class, 'request_from_user_id', 'id');
    }



    protected $fillable = [
        'login',
        'password',
        'email',
        'name',
        'date_of_birth',
        'gender',
        'city',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
