<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Service;
use App\Models\Specialization;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function addDoctors()
    {
        $sps = Specialization::select('name')->get();


        return view('dashboard.add-doctors', compact('sps'));
    }

    public function addServices()
    {
        $doctors = Doctor::select('id', 'name')->get();
        $services = Service::select('id', 'name')->get();
        return view('dashboard.add-specializations',compact('doctors', 'services'));
    }

    public function saveServicesToDoctor(Request $request)
    {
        $doctor = Doctor::find($request->doctor_id);
        if (!$doctor)
            return abort('404');
        $doctor->services() -> sync($request -> servicesIds);
        return 'success';
    }
}
