@extends('layouts.Administrador_LauNET.plantilla')

@section('index')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">phone_paused</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Directorio Telefonico</h4>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>CARGO</th>
                                        <th>EXTENSIÓN</th>
                                        <th>CELULAR</th>
                                        <th>CORREO ELECTRONICO</th>
                                        <th>CENTRO DE COSTOS</th>
                                        <th>SUBPROCESO</th>
                                        <th class="disabled-sorting text-right">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <th>ID</th>
                                    <th>NOMBRE</th>
                                    <th>CARGO</th>
                                    <th>EXTENSIÓN</th>
                                    <th>CELULAR</th>
                                    <th>CORREO ELECTRONICO</th>
                                    <th>CENTRO DE COSTOS</th>
                                    <th>SUBPROCESO</th>
                                    <th class="text-right">ACCIONES</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($directorio as $items)
                                <tr>
                                    <td>{{ $items->id }}</td>
                                    <td>{{ $items->nombre }}</td>
                                    <td>{{ $items->cargo }}</td>
                                    <td>{{ $items->extension }}</td>
                                    <td>{{ $items->celular }}</td>
                                    <td>{{ $items->email }}</td>
                                    <td>{{ $items->centro_costos }}</td>
                                    <td>{{ $items->subproceso }}</td>
                                    <td class="text-right">
                                        <a href="{{route('directorio.create')}}" class="btn btn-simple btn-warning btn-icon"><i class="material-icons">group_add</i></a>
                                        <a href="{{route('directorio.show', $items->id)}}" class="btn btn-simple btn-info btn-icon"><i class="material-icons">dvr</i></a>
                                        <a href="/" class="btn btn-simple btn-danger btn-icon remove" onclick="demo.showSwal('warning-message-and-confirmation')"><i class="material-icons">delete_outline</i></a>
                                    
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
    </div>
    <!-- end row -->
</div>
</div>

@endsection
