<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
    * @param string $term
    * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
    */
    public static function search($term)
    {
        if ($term) {
            $searchTerm = "%{$term}%";
            return User::where('name', 'LIKE', $searchTerm)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        }
        return User::orderBy('created_at', 'desc')->paginate(5);
    }
}
