<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table ='profiles';
    protected $fillable = ['province', 'gender', 'user_id', 'age', 'mobile'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
