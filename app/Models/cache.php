<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\Authenticatable as Authenticable;

class cache extends Authenticatable
{
    // use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "users";
    protected $primaryKey = "id";
    public $timestamp = false;
   protected $fillable = [
    'name',
    'email',
    'password',
    'role',
   ];
   protected $hidden = [
    'password',
];
protected $casts = [
    // 'email_verified_at' => 'datetime',
    'password' => 'hashed',
];



   protected function role(): Attribute
   {
       return new Attribute(
           get: fn ($value) =>  ["user", "admin"][$value],
       );
   }

}