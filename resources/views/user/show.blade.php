@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="card">
        <div class="card-header">
            <h6>Detalle del contacto</h6>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#address">
                Agregar Dirección
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#phone">
                Agregar Telefono
            </button>
            <a href="{{route('vcard.show',$user->id)}}">Generar vcard</a>
        </div>
        <div class="card-block col-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h3 class="card-title">{{$user->firstName.' '.$user->lastName}}</h3>
            <h4>Primer nombre</h4>
            {{$user->firstName}}
            <h4>Primer apellido</h4>
            {{$user->lastName}}
            <h4>Email</h4>
            {{$user->email}}
            <h4>Empresa</h4>
            {{$user->company}}
            <h4>Profesion</h4>
            {{$user->jobTitle}}
            <h4>url</h4>
            {{$user->url}}
            <h4>Direcciones</h4>
            @foreach($user->userAddress as $userAddress)
                {{$userAddress->street.' '.$userAddress->city.' '.$userAddress->country}}
            @endforeach
            <h4>Telefonos</h4>
            @foreach($user->userPhone as $userPhone)
                {{$userPhone->phoneNumber}}
            @endforeach

        </div>
    </div>
        <div class="modal fade" id="phone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('userphone.store') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="text" hidden="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Telefono</label>
                                <div class="col-10">
                                    <input class="form-control" name="phoneNumber" type="text" id="example-text-input">
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="address" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('useraddress.store') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="text" hidden="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Calle</label>
                                <div class="col-10">
                                    <input class="form-control" name="street" type="text" id="example-text-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Ciudad</label>
                                <div class="col-10">
                                    <input class="form-control" name="city" type="text" id="example-text-input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Pais</label>
                                <div class="col-10">
                                    <input class="form-control" name="country" type="text" id="example-text-input">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection