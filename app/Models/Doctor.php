<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctors';
    protected $fillable = ['id','photo', 'name','special', 'specialization_id', 'bio', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];
    protected $timestamp = true;

    public function specialization()
    {
        return $this -> belongsTo('App\Models\Specialization', 'specialization_id', 'id');
    }

    public function services()
    {
        return $this -> belongsToMany('App\Models\Service', 'doctor_service', 'doctor_id', 'service_id');
    }
}
