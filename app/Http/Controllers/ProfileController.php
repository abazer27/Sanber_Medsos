<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\profile;
class ProfileController extends Controller
{
    public function index($id){
        $profile = profile::find($id);
        return view('profile.index');
    }
    public function edit($id){
        $profile = profile::find($id);
        return view('profiles.edit');
    }
    public function update($id, Request $request){

        $request->validate([
            'biodata' => 'required',
            'foto' => 'required'
        ]);

        $profile = profile::where('id' , $id)->update([
        'biodata'  => $request['biodata'],
        'foto' => $request['foto']

        ]);
        return  redirect('profiles.index');
    }
}

