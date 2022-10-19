<?php

namespace App\Http\Controllers;

use App\Http\Requests\userConfigRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserConfigController extends Controller
{
    //
    protected function formConfigUser($id){
        $user = User::find($id);
        return view('layouts.admin.configUser', compact('user'));
    }

    public function editUser(userConfigRequest $request, $id){
      $data = $request->only('name', 'email');
      if($request->password){
        $data['password']=bcrypt($request->password);
      }

      $user=User::find($id);
      $user->update($data);
      $success = "Salvo com sucesso...!";
      return view('layouts.admin.configUser', compact('user', 'success'));
    }
}
