@extends('layouts.dashboardTemplate')

@section('content')
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper" style="background-color: #B2E1FF; padding-top: 3%;">
        <div class="container-fluid">
                <div class="row">
                    <form class="contact-form" method="POST" style="margin: 0 auto; text-align: center; width: 600px;">
                        @csrf
                        <h2 style="color: black; font-weight: bold;">Eliminar Sucursal</h1>
                        <label style="margin-top: 5px;" for="rif" class="col-md-12 control-label">RIF de la Sucursal</label>         
                        <input style="text-align: center;" class="form-control{{ $errors->has('rif') ? ' is-invalid' : '' }}" type="number" name="rif" placeholder="{{ $subsidiary->rif }}" disabled>
                        @if ($errors->has('rif'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('rif') }}</strong>
                            </span>
                        @endif
                        <label style="margin-top: 5px;" for="nombre" class="col-md-12 control-label">Nombre de la Sucursal</label>  
                        <input style="text-align: center;" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" type="text" name="nombre" placeholder="{{ $subsidiary->nombre }}" disabled>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </span>
                        @endif
                        <label style="margin-top: 5px;" for="telefono" class="col-md-12 control-label">Teléfono de la Sucursal</label>  
                        <input style="text-align: center;" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" type="number" name="telefono" placeholder="{{ $subsidiary->telefono }}" disabled>
                        @if ($errors->has('telefono'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('telefono') }}</strong>
                            </span>
                        @endif
                        <label style="margin-top: 5px;" for="email" class="col-md-12 control-label">Correo electrónico de la Sucursal</label>  
                        <input style="text-align: center;" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="{{ $subsidiary->email }}" disabled>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <label style="margin-top: 5px;" for="direccion" class="col-md-12 control-label">Dirección de la Sucursal</label>  
                        <textarea style="text-align: center;" id="direccion" type="text" class="form-control" name="direccion" placeholder="{{ $subsidiary->direccion }}" rows="4" cols="50" disabled></textarea>
                        <label style="margin-top: 5px;" for="password" class="col-md-12 control-label">Contraseña de la Sucursal</label>  
                        <input style="text-align: center;" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="**********" disabled>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <button style="margin: 20px 0px 20px 0px;" class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </div>
            <!--/.row -->
        </div>
        <footer style="background-color: #1A8FD8; color: white;" class="footer text-center"> Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
    Todos los derechos reservados Rapi_Cola. Diseñado por Zisko y Wrappixel </footer>
    </div>
@endsection
