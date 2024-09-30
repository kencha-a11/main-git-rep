<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function getprofiles(){
        $profiles = Profile::all();
        return view('profiles', ['profiles'=> $profiles]);
    }

    public function getprofile(Request $profile){
        $profile = Profile::findOrFail($profile->id);
        return view('profile', ['profile'=> $profile]);
    }

    // public function profilegate(Request $id){
    //     if (!$id) {
    //         return $this->getprofiles();
    //     } else {
    //         return $this->getprofile($id);
    //     }
    // }
}
