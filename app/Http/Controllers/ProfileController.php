<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexProfile()
    {
        $user = Auth::user();
        $id = Auth::id();

        return view('profile')->with('user', $user);

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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function editProfile(Profile $profile)
    {
        $user = Auth::user();
        $id = Auth::id();
        if ($user->profile == null) {
            $profile = Profile::create([
                'province' => 'Add Your Province',
                'gender' => 'Femail',
                'user_id'=> $id,
                'age' => '0',
                'mobile' => '010'

            ]);
        }
        return view('edit-profile')->with('user', $user);
    }


    public function updateProfile(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'province' => 'required',
            'gender' => 'required',
            'user_id'=> 'required',
            'age' => 'required',
            'mobile' => 'required'
        ]);
        $user =Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile->province = $request->province;
        $user->profile->gender = $request->gender;
        $user->profile->age = $request->age;
        $user->profile->mobile = $request->mobile;
        $user->profile->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
