<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserProfile;

class UserController extends Controller
{

    public function show(UserProfile $userProfile){
      return view('profile.profile', compact('userProfile'));
    }
}
