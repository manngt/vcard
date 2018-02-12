<?php

namespace App\Http\Controllers;

use App\UserPhone;
use Illuminate\Http\Request;

class UserPhoneController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'phoneNumber' => 'required'
            ]);

        $request['id'] = time();

        UserPhone::create($request->all());

        return redirect()->route('user.show',$request['user_id'])
            ->with('Correcto','Dirección agregada');
    }
}
