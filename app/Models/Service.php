<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable =['id', 'name', 'created_at', 'updated at'];
    protected $hidden = ['created_at', 'updated_at', 'pivot'];
    protected $timestamp = true;

   public function doctors()
   {
       return $this->belongsToMany('App\Models\Doctor', 'doctor_service','doctor_service','doctor_id', 'id', 'id');
   }
}
