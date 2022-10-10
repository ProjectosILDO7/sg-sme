<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserConfigController extends Controller
{
    //
    protected function formConfigUser($id){

        $user = User::find($id);
        dd($user);
    }
}
