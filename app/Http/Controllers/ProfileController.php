<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;
use Auth;
class ProfileController extends Controller

{
    public function index(){
        $profile = profile::all();
        return view('profiles.index',compact ('profile'));
    }
    public function edit($id){
        $profile = profile::find($id);
        return view('profiles.edit',compact ('profile'));
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

