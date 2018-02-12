@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Nuevo Contacto
            </div>
            <div class="card-block col-10">
                <h4 class="card-title">Ingrese los datos solicitados</h4>
                <form action="{{ route('user.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Primer nombre</label>
                        <div class="col-10">
                            <input class="form-control" name="firstName" type="text" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Primer apellido</label>
                        <div class="col-10">
                            <input class="form-control" name="lastName" type="text" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Adicional</label>
                        <div class="col-10">
                            <input class="form-control" name="additional" type="text" id="example-text-input">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Prefijo</label>
                        <div class="col-10">
                            <input class="form-control" name="prefix" type="text" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Sufijo</label>
                        <div class="col-10">
                            <input class="form-control" name="suffix" type="text" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Empresa</label>
                        <div class="col-10">
                            <input class="form-control" name="company" type="text" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Profesión</label>
                        <div class="col-10">
                            <input class="form-control" name="jobTitle" type="text" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Puesto</label>
                        <div class="col-10">
                            <input class="form-control" name="role" type="text" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input class="form-control" name="email" type="email" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Sitio web</label>
                        <div class="col-10">
                            <input class="form-control" name="url" type="url" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Foto</label>
                        <div class="col-10">
                            <input class="form-control" name="photo" type="text" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Contraseña</label>
                        <div class="col-10">
                            <input class="form-control" name="password" type="password" id="example-text-input">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>

                </form>

            </div>
        </div>
    </div>



@endsection