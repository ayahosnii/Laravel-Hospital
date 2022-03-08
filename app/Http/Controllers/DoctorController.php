<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Specialization;
use Illuminate\Http\Request;
use App\Traits\DoctorTrait;


class DoctorController extends Controller
{
    use DoctorTrait;
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function store(DoctorRequest $request)
    {

        $photo_name = $this -> doctorPhoto($request -> photo, 'img\team');
        $doctors = Doctor::create([
           'photo' => $photo_name,
            'name' => $request->name,
            'special' => $request->sp,
            'specialization_id'=> $request -> specialization_id,
            'bio'=> $request -> bio
        ]);

        return redirect()->route('dashboard.index')->with(["success"=>'the doctor is added successfully']);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function showDoctors()
    {

        $doctors = Doctor::select('id','photo', 'name','special', 'specialization_id', 'bio')->get();
        return view('doctors', compact('doctors'));
    }

    public function specializations()
    {
        $specializations = Specialization::select('id', 'name')->get();
        return view('special', compact('specializations'));
    }

    public function doctors($doctors_id)
    {
        $specialization = Specialization::find($doctors_id);
        $showdocs = $specialization->doctors;
        return view('eldoc', compact('showdocs'));

    }

    public function services($doctorId)
    {

        $doctor = Doctor::find($doctorId);
        $services = $doctor -> services;

        $doctors = Doctor::select('id', 'name')->get();
        $allservices = Service::select('id', 'name')->get();
        return view('services', compact('doctor','services', 'doctors', 'allservices'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function profile()
    {
        return view('profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
