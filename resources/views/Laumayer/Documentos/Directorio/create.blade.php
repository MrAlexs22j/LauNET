@extends('layouts.Administrador_LauNET.plantilla')

@section('create')

<div class="content">
    <div class="container-fluid">
        <div class="col-sm-8 col-sm-offset-2">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="rose" id="wizardProfile">
                    <form action="{{route('directorio.store')}}" method="POST">
                        <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                        @csrf
                        <div class="wizard-header">
                            <h3 class="wizard-title">
                                Nuevo directorio
                            </h3>
                            <h5>Ingresa la información del empleado</h5>
                        </div>
                        <div class="wizard-navigation">
                            <ul>
                                <li>
                                    <a href="#about" data-toggle="tab">Personal</a>
                                </li>
                                <li>
                                    <a href="#account" data-toggle="tab">Empresarial</a>
                                </li>
                                <li>
                                    <a href="#address" data-toggle="tab">Contacto</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                                <div class="row">
                                    <h4 class="info-text"> Información personal del empleado</h4>
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
                                                <label class="control-label">Nombre
                                                    <small>(Obligatorio)</small>
                                                </label>
                                                <input name="nombre" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">record_voice_over</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Cargo
                                                    <small>(Oblgatorio)</small>
                                                </label>
                                                <input name="cargo" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-lg-offset-1">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email
                                                    <small>(Obligatorio)</small>
                                                </label>
                                                <input name="email" type="email" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <h4 class="info-text"> Empresa </h4>
                                <div class="row">
                                    <div class="col-sm-7 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Empresa</label>
                                            <input type="text" name="empresa" class="form-control" required value="LAUMAYER COLOMBIANA COMERCIALIZADORA S.A.">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">NIT
                                            <small>(Obligatorio)</small>
                                            </label>
                                            <input type="text" name="nit" class="form-control" required value="890.921.335 - 3">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Sede
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <input type="text" name="sede" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Direccion
                                                <small>(Obligatorio)</small>   
                                            </label>
                                            <input type="text" name="direccion" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">PBX
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <input type="text" name="pbx" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">FAX
                                                <small>(Obligatorio)</small>   
                                            </label>
                                            <input type="text" name="fax" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Zona
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <input type="number" name="zona" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Contacto </h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Centro de Costos
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <input type="number" name="centro_costos" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Subproceso
                                            <small>(Obligatorio)</small>
                                            </label>
                                            <input type="text" name="subproceso" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Celular
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <input type="number" name="celular" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Extension
                                                <small>(Obligatorio)</small>   
                                            </label>
                                            <input type="number" name="extension" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Estado
                                                <small>(Obligatorio)</small>
                                            </label>
                                            <input type="text" name="estado" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <a href="{{route('directorio.index')}}" class="button">
                                    <input  type='get' class='btn btn-fill btn-rose btn-wd' style="width: 37%" value="Cencelar"/>
                                </a>
                                <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Siguiente' />
                                <input type='submit' class='btn btn-finish btn-fill btn-rose btn-wd' value="Guardar"/>
                            </div>
                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Atras' />
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
