<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends User
{
//    use HasFactory, Notifiable;
    protected $fillable = ['username', 'password', 'remember_token'];
}
