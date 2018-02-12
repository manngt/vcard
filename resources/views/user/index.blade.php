@extends('layouts.app')
@section('content')

    <div class="container">

        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Usuarios</h4>
                <h6 class="card-subtitle mb-2 text-muted">Listado</h6>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Empresa</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->firstName}}</td>
                        <td>{{$user->lastName}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->company}}</td>
                        <td>
                            <a href="{{route('user.show',$user->id)}}" class="card-link">Mostrar</a>
                            <a href="#" class="card-link">Another link</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{route('user.create')}}" class="card-link">Nuevo</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

    </div>




@endsection