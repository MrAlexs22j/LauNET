@extends('layouts.Administrador_LauNET.plantilla')

@section('directorio')

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
                                <tr>
                                    <td>1</td>
                                    <td>Adriana Betancourt Vélez</td>
                                    <td>Gerente de Mercadeo</td>
                                    <td>1024</td>
                                    <td>3117618639</td>
                                    <td>gerentemercadeo@laumayer.com</td>
                                    <td>101215</td>
                                    <td>Mercadeo</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">edit</i></a>
                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                        <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Alejandra Zapata Agudelo</td>
                                    <td>Auxiliar de Información Servicio al Cliente</td>
                                    <td>1067</td>
                                    <td>3008876753</td>
                                    <td>servicioalcliente6@laumayer.com</td>
                                    <td>101216</td>
                                    <td>Serv. Cliente</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">edit</i></a>
                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                        <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Alexander Londoño Restrepo</td>
                                    <td>Ejecutivo de Ventas Energía</td>
                                    <td>1074</td>
                                    <td>3128372267</td>
                                    <td>comercialantioquia4@laumayer.com</td>
                                    <td>101234</td>
                                    <td>Ventas</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">edit</i></a>
                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                        <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Ana Juliana Quiros Mora</td>
                                    <td>Auxiliar de Información Administrativa</td>
                                    <td>1089</td>
                                    <td>N/A</td>
                                    <td>auxiliaradministracion@laumayer.com</td>
                                    <td>101113</td>
                                    <td>Admon</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">edit</i></a>
                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                        <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>¿Andrés Felipe López Gómez</td>
                                    <td>Analista de Soporte Técnico</td>
                                    <td>1027</td>
                                    <td>3103768647</td>
                                    <td>analistasoportetecnico@laumayer.com</td>
                                    <td>101216</td>
                                    <td>Serv. Cliente</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">edit</i></a>
                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                        <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Camilo Mejía Cuartas</td>
                                    <td>Director Comericial E-commerce y Retail</td>
                                    <td>1057</td>
                                    <td>324325221</td>
                                    <td>director-ecommerceyretail@laumayer.com</td>
                                    <td>101203</td>
                                    <td>Ventas</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">edit</i></a>
                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                        <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Carolina Gutiérrez Echeverri</td>
                                    <td>Jefe de Abastecimiento</td>
                                    <td>1051</td>
                                    <td>N/A</td>
                                    <td>jefeabastecimiento@laumayer.com</td>
                                    <td>101116</td>
                                    <td>Abastecimiento</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">edit</i></a>
                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                        <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Daniel Moncada Valencia</td>
                                    <td>Jefe de Marca Redes y Seguridad Electronica</td>
                                    <td>1060</td>
                                    <td>3216896887</td>
                                    <td>redesyseguridadelectronica@laumayer.com</td>
                                    <td>101231</td>
                                    <td>Desarrollo de Marca</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">edit</i></a>
                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                        <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Diana Cristina Villada López</td>
                                    <td>Director Financiero y de Contraloría</td>
                                    <td>1019</td>
                                    <td>3103744243</td>
                                    <td>directorfinanciero@laumayer.com</td>
                                    <td>101115</td>
                                    <td>Tesorería</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">edit</i></a>
                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                        <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                    </td>
                                </tr>
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
