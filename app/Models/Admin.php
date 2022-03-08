<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $table = 'admins';
    protected $guarded = array();
    protected $fillable = ['name', 'email', 'photo', 'password', 'created_at', 'updated_at'];
}
