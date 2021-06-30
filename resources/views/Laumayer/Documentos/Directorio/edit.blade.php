@extends('layouts.Administrador_LauNET.plantilla')

@section('edit')

<div class="content">
    <div class="container-fluid">
        <div class="col-sm-8 col-sm-offset-2">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="rose" id="wizardProfile">
                    <form action="{{route('directorio.update', $directorio)}}" method="POST">
                        <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                        @csrf
                        @method('PUT')
                        <div class="wizard-header">
                            <h3 class="wizard-title">
                                Detalle Directorio
                            </h3>
                            <h5>Editar datos del directorio</h5>
                        </div>
                        <div class="wizard-navigation">
                            <ul>
                                <li>
                                    <a href="#about" data-toggle="tab">INFORMACIÓN</a>
                                </li>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="about">
                                    <div class="row">
                                        <h4 class="info-text"> <b>Personal</b> </h4>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="picture-container">
                                                <div class="picture">
                                                    <img src="../../assets/img/favicon.png" class="picture-src" id="wizardPicturePreview" title="" />
                                                    <input type="file" id="wizard-picture">
                                                </div>
                                                <h6>Foto</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">face</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><strong>NOMBRE</strong></label>
                                                    <input type="text" name="nombre" value="{{$directorio->nombre}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">record_voice_over</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><strong>CARGO</strong></label>
                                                    <input type="text" name="cargo" value="{{$directorio->cargo}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-lg-offset-1">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">email</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label"><strong>EMAIL</strong></label>
                                                    <input type="email" name="email" value="{{$directorio->email}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text"> <b>Empresa</b> </h4>
                                        </div>
                                        <div class="col-sm-7 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>EMPRESA</strong></label>
                                                <input type="text" name="empresa" value="{{$directorio->empresa}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>NIT</strong></label>
                                                <input type="text" name="nit" value="{{$directorio->nit}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>SEDE</strong></label>
                                                <input type="text" name="sede" value="{{$directorio->sede}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>DIRECCIÓN</strong></label>
                                                <input type="text" name="direccion" value="{{$directorio->direccion}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>PBX</strong></label>
                                                <input type="text" name="pbx" value="{{$directorio->pbx}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>FAX</strong></label>
                                                <input type="text" name="fax" value="{{$directorio->fax}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>ZONA</strong></label>
                                                <input type="number" name="zona" value="{{$directorio->zona}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text"><b>Contacto</b></h4>
                                        </div>
                                        <div class="col-sm-7 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>CENTRO DE COSTOS</strong></label>
                                                <input type="number" name="centro_costos" value="{{$directorio->centro_costos}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>SUBPROCESO</strong></label>
                                                <input type="text" name="subproceso" value="{{$directorio->subproceso}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>CELULAR</strong></label>
                                                <input type="number" name="celular" value="{{$directorio->celular}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>EXTENSION</strong></label>
                                                <input type="text" name="extension" value="{{$directorio->extension}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>Estado</strong></label>
                                                <input type="text" name="estado" value="{{$directorio->estado}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <a href="{{route('directorio.index')}}" class="button">
                                        <input type='get' class='btn btn-finish btn-fill btn-rose btn-wd' style="width: 38%" value="Cencelar"/>
                                    </a>
                                    <a href="" class="button">
                                        <input type='submit' class='btn btn-finish btn-fill btn-rose btn-wd' value="Guardar"/>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- wizard container -->
            </div>
        </div>
    </div>

    @endsection
    