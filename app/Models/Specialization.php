<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;
    protected $table = 'specialization';
    protected $fillable = ['id','name'];
    protected $timestamp = true;

    public function doctors()
    {
        return $this->hasMany('App\Models\Doctor', 'specialization_id', 'id');
    }
}
