<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;
use Auth;
use Symfony\Component\HttpKernel\Profiler\Profile as ProfilerProfile;
use Symfony\Component\HttpKernel\Profiler\Profiler;

class ProfileController extends Controller

{
    public function index(){
        $profile = profile::all();
        return view('profiles.index',compact ('profile'));
    }
    // public function edit($id)
    // {
    //     $profile = Profile::find($id);
    //     return view('profiles.edit', compact('profile'));
    // }

    // public function update($id, Request $request)
    // {
    //     $request->validate([
    //         'biodata' => 'required',
    //         'profile_image' => 'required',
    //     ]);

    //     $profile = Profile::find($id);
    //     $profile->biodata = $request->bioadata;
    //     $profile->profile_iamge = $request->profile_image;
    //     $profile->update();
    //     return view('profiles.index');
    // }

    public function edit($id){
        $profile = profile::find($id);
        return view('profiles.edit',compact ('profile'));
    }
    public function update($id, Request $request){

        $request->validate([
            'biodata' => 'required',
            'profile_image' => 'required'
        ]);

        $profile = profile::where('id' , $id)->update([
        'biodata'  => $request['biodata'],
        'profile_image' => $request['profile_image']

        ]);
        return  redirect('profiles.index');
    }
}

