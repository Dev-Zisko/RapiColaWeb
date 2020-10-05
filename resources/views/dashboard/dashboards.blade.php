@extends('layouts.dashboardTemplate')

@section('content')
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper" style="background-color: #B2E1FF; padding-top: 3%;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <a href="{{ route('dashboardrs') }}" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"><i class="fa fa-home"></i> Crear sucursal</a>
                    <h3 class="box-title">Sucursales de la Empresa</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>RIF</th>
                                    <th>NOMBRE</th>
                                    <th>TELEFONO</th>
                                    <th>EMAIL</th>
                                    <th>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subsidiaries as $subsidiary)
                                <tr>
                                    <td>{{$subsidiary->rif}}</td>
                                    <td class="txt-oflo">{{$subsidiary->nombre}}</td>
                                    <td>{{$subsidiary->telefono}}</td>
                                    <td class="txt-oflo">{{$subsidiary->email}}</td>
                                    <td><a class="boton-admin-table" href="{{url('dashboardus',Crypt::encrypt($subsidiary->id))}}"><i class="fa fa-edit"></i></a>
                                    <a class="boton-admin-table" href="{{url('dashboardds',Crypt::encrypt($subsidiary->id))}}"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <div>{{$subsidiaries->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <footer style="background-color: #1A8FD8; color: white;" class="footer text-center"> Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
    Todos los derechos reservados Rapi_Cola. Diseñado por Zisko y Wrappixel </footer>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
@endsection
