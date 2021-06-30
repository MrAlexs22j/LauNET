@extends('layouts.Administrador_LauNET.plantilla')

@section('show')

<div class="content">
    <div class="container-fluid">
        <div class="col-sm-8 col-sm-offset-2">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="rose" id="wizardProfile">
                    <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                    <div class="wizard-header">
                        <h3 class="wizard-title">
                            Detalle Directorio
                        </h3>
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
                                                <h6 class="form-control">{{$directorio->nombre}}</h6>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">record_voice_over</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label"><strong>CARGO</strong></label>
                                                <h6 class="form-control">{{$directorio->cargo}}</h6>
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
                                                <h6 class="form-control">{{$directorio->email}}</h6>
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
                                            <h6 class="form-control">{{$directorio->empresa}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><strong>NIT</strong></label>
                                            <h6 class="form-control">{{$directorio->nit}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><strong>SEDE</strong></label>
                                            <h6 class="form-control">{{$directorio->sede}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><strong>DIRECCION</strong></label>
                                            <h6 class="form-control">{{$directorio->direccion}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><strong>PBX</strong></label>
                                            <h6 class="form-control">{{$directorio->pbx}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><strong>FAX</strong></label>
                                            <h6 class="form-control">{{$directorio->fax}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><strong>ZONA</strong></label>
                                            <h6 class="form-control">{{$directorio->zona}}</h6>
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
                                            <h6 class="form-control">{{$directorio->centro_costos}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><strong>SUBPROCESO</strong></label>
                                            <h6 class="form-control">{{$directorio->subproceso}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><strong>CELULAR</strong></label>
                                            <h6 class="form-control">{{$directorio->celular}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><strong>EXTENSION</strong></label>
                                            <h6 class="form-control">{{$directorio->extension}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label"><strong>ESTADO</strong></label>
                                            <h6 class="form-control">{{$directorio->estado}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <a href="{{route('directorio.edit', $directorio)}}" class="button">
                                    <input type='submit' class='btn btn-finish btn-fill btn-rose btn-wd' value="Editar"/>
                                </a>
                                <a href="{{route('directorio.index')}}" class="button">
                                    <input type='submit' class='btn btn-finish btn-fill btn-rose btn-wd' value="Aceptar"/>
                                </a>
                                
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- wizard container -->
            </div>
        </div>
    </div>

    @endsection
    