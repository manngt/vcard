<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return view('user.index',compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {

        $this->validate(request(),[

            'firstName' => 'required',

            'lastName' => 'required',

            'company' => 'required',

            'jobTitle' => 'required',

            'email' => 'required',

            'password' => 'required'

        ]);

        $request['id'] = time();

        $request['password'] = bcrypt($request['password']);

        User::create($request->all());

        return redirect()->route('user.index')
            ->with('Correcto','Usuario creado');
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('user.show',compact('user'));

    }
}
