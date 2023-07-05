<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class GithubUser extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'login',
        'name',
        'email',
        'location',
        

    ];
}
