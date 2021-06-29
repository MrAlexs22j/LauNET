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
                        <h5>Ingresa la información del empleado.</h5>
                    </div>
                    <div class="wizard-navigation">
                        <ul>
                            <li>
                                <a href="#about" data-toggle="tab">Información General</a>
                            </li>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                                <div class="row">

                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="picture">
                                                <img src="../../assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
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
                                                    <small>(required)</small>
                                                </label>
                                                <input name="nombre" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">record_voice_over</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Cargo
                                                    <small>(required)</small>
                                                </label>
                                                <input name="cargo" type="text" class="form-control">
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
                                                    <small>(required)</small>
                                                </label>
                                                <input name="email" type="email" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Contactos del Empleado </h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Empresa*</label>
                                            <input type="text" class="form-control" required value="LAUMAYER COLOMBIANA COMERCIALIZADORA S.A." disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Ubicación*</label>
                                            <input type="text" class="form-control" required value=" Cra. 50 C No. 10 SUR 61" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Centro de Costos</label>
                                            <input type="text" name="centro_costos" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Subproceso</label>
                                            <input type="text" name="subproceso" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Contactos del Empleado </h4>
                                    </div>
                                    <div class="col-sm-7 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Extension</label>
                                            <input type="number" name="extension" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Celular</label>
                                            <input type="number" name="celular" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Estado</label>
                                            <input type="text" name="estado" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Next' />
                                <input type='submit' class='btn btn-finish btn-fill btn-rose btn-wd'/>
                            </div>
                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
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
                                Nuevo directorio
                            </h3>
                            <h5>Ingresa la información del empleado.</h5>
                        </div>
                        <div class="wizard-navigation">
                            <ul>
                                <li>
                                    <a href="#about" data-toggle="tab">Personal</a>
                                </li>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="about">
                                    <div class="row">
                                        <h4 class="info-text"> Información personal del empleado</h4>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="picture-container">
                                                <div class="picture">
                                                    <img src="../../assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
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
                                                        <small>(required)</small>
                                                    </label>
                                                    <input name="nombre" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">record_voice_over</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Cargo
                                                        <small>(required)</small>
                                                    </label>
                                                    <input name="cargo" type="text" class="form-control">
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
                                                        <small>(required)</small>
                                                    </label>
                                                    <input name="email" type="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text"> Contactos del Empleado </h4>
                                        </div>
                                        <div class="col-sm-7 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Empresa*</label>
                                                <input type="text" class="form-control" required value="LAUMAYER COLOMBIANA COMERCIALIZADORA S.A." disabled>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Ubicación*</label>
                                                <input type="text" class="form-control" required value=" Cra. 50 C No. 10 SUR 61" disabled>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Centro de Costos</label>
                                                <input type="text" name="centro_costos" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Subproceso</label>
                                                <input type="text" name="subproceso" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text"> Contactos del Empleado </h4>
                                        </div>
                                        <div class="col-sm-7 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Extension</label>
                                                <input type="number" name="extension" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Celular</label>
                                                <input type="number" name="celular" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-sm-offset-1">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Estado</label>
                                                <input type="text" name="estado" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-rose btn-wd' name='next' value='Next' />
                                    <input type='submit' class='btn btn-finish btn-fill btn-rose btn-wd'/>
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
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
