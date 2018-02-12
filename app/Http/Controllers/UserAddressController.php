<?php

namespace App\Http\Controllers;

use App\UserAddress;
use Illuminate\Http\Request;

class UserAddressController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'street' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);

        $request['id'] = time();

        UserAddress::create($request->all());

        return redirect()->route('user.show',$request['user_id'])
            ->with('Correcto','Dirección agregada');
    }
}
