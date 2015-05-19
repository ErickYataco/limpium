@extends('layouts.master')
@section('title','Registro de Personas')
@section('css')
    <link href="{{ asset('css/theme-1/libs/wizard/wizard.css?1425466601') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/select2/select2.css?1424887856') }}" rel="stylesheet">
@stop
@section('content')
    <!-- BEGIN CONTENT-->
    <div id="content">
        <section>
            <div class="section-header">
                <ol class="breadcrumb">
                    <li class="active">RRHH/COLABORADOR</li>
                </ol>
            </div>
            <div class="section-body contain-lg">

                <!-- BEGIN INTRO -->
                <div class="row">

                    <div class="col-lg-8">
                        <article class="margin-bottom-xxl">
                            <p class="lead">
                                Registro de personas y asignacion a contratos.
                            </p>
                        </article>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END INTRO -->

                <!-- BEGIN VALIDATION FORM WIZARD -->
                <div class="row">
                    <div class="col-lg-12">
                        <form method="POST" class="form floating-label form-validation" role="form" id="formCreate" novalidate="novalidate">
                        <div class="card">
                            <div class="card-head style-primary">
                                <header>Colaborador</header>
                                <div class="tools">
                                        <button type="submit" id="crear" class="btn btn-floating-action btn-default-light"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div id="rootwizard2" class="form-wizard form-wizard-horizontal">
                                    {{--<form class="form floating-label form-validation" id="formCreate_x" role="form" novalidate="novalidate">--}}
                                        <div class="form-wizard-nav">
                                            <div class="progress"><div class="progress-bar progress-bar-primary"></div></div>
                                            <ul class="nav nav-justified">
                                                <li class="active"><a href="#step1" data-toggle="tab"><span class="step">1</span> <span class="title">DATOS</span></a></li>
                                                <li><a href="#step2" data-toggle="tab"><span class="step">2</span> <span class="title">DOMICILIO</span></a></li>
                                                <li><a href="#step3" data-toggle="tab"><span class="step">3</span> <span class="title">FAMILIARES</span></a></li>
                                                <li><a href="#step4" data-toggle="tab"><span class="step">4</span> <span class="title">CONTRATO</span></a></li>
                                            </ul>
                                        </div><!--end .form-wizard-nav -->
                                        <div class="tab-content clearfix">
                                            <div class="tab-pane active" id="step1">
                                                <br/>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::text('firstname', null, array('class' => 'form-control', 'data-rule-minlength' => '2', 'required')) !!}
                                                            <label for="firstname" class="control-label">Primer Nombre</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::text('secondname', null, array('class' => 'form-control', 'data-rule-minlength' => '2', 'required')) !!}
                                                            <label for="secondname" class="control-label">Segundo Nombre</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::text('firstlastname', null, array('class' => 'form-control', 'data-rule-minlength' => '2', 'required')) !!}
                                                            <label for="firstlastname" class="control-label">Apellido Paterno</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::text('secondlastname', null, array('class' => 'form-control', 'data-rule-minlength' => '2', 'required')) !!}
                                                            <label for="secondlastname" class="control-label">Apellido Materno</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            {!! Form::text('dni', null, array('class' => 'form-control', 'data-inputmask' => '"mask": "99999999"', 'required')) !!}
                                                            <label for="dni" class="control-label">dni</label>
                                                            <p class="help-block">Ejemplo: 41738129</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            {!!Form::select('maritalstatus', $maritalStatus, null, array('class' => 'form-control select2-list','required'=>'required'))!!}
                                                            <label for="maritalstatus" class="control-label">Estado Civil</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="nacimiento" data-inputmask="'mask': 'd/m/y'" required>
                                                            <label for="nacimiento" class="control-label">Fecha de Nacimiento</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" name="emergencyperson" class="form-control" data-rule-minlength="2" required>
                                                            <label for="emergencyperson" class="control-label">En Emergencias llamar</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" name="emergencyphone" class="form-control" data-rule-minlength="2" required>
                                                            <label for="emergencyphone" class="control-label">Telefono a llamar</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            {!!Form::select('vinculo', $emergency, null, array('class' => 'form-control select2-list','required'=>'required'))!!}
                                                            <label for="vinculo" class="control-label">Vinculo</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input name="mobile" type="text" class="form-control" data-inputmask="'mask': '(99) (9) 999-999-999'" required>
                                                            <label for="mobile" class="control-label">Telefono Movil</label>
                                                            <p class="help-block">Ejemplo: (51) (1) 987-654-321</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input name="phone" type="text" class="form-control" data-inputmask="'mask': '(99) 999-9999'" required>
                                                            <label for="phone" class="control-label">Telefono Fijo</label>
                                                            <p class="help-block">Ejemplo: (064) 765-4321</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="email" name="email" id="email" class="form-control" data-rule-email="true" required>
                                                            <label for="email" class="control-label">Email</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div>
                                                                <label class="radio-inline radio-styled">
                                                                    <input type="radio" name="gendre" checked><span>Hombre</span>
                                                                </label>
                                                                <label class="radio-inline radio-styled">
                                                                    <input type="radio" name="gendre" ><span>Mujer</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="checkbox checkbox-styled">
                                                                <label>
                                                                    <input type="checkbox" name="backup" value="">
                                                                    <span>Disponible para reemplazos</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end #step1 -->
                                            <div class="tab-pane" id="step2">
                                                <br/>
                                                <div class="form-group">
                                                    <input type="text" name="address" class="form-control" data-rule-email="true" required>
                                                    <label for="address" class="control-label">Direccion</label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            {!!Form::select('department', $departments, null, array('id'=>'department','class' => 'form-control ','required'=>'required'))!!}
                                                            <label for="deparment" class="control-label">Departameto</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            {{--{!!Form::select('province', $provinces, null, array('id'=>'province','class' => 'form-control select2-list','required'=>'required'))!!}--}}
                                                            <div class="form-control " name="province" id="province" >
                                                            </div>
                                                            <label for="province" class="control-label">Provincia</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            {{--{!!Form::select('district', $districts, null, array(id'=>'departments','class' => 'form-control select2-list','required'=>'required'))!!}--}}
                                                            <div class="form-control " name="district" id="district" >
                                                            </div>
                                                            <label for="district" class="control-label">Distrito</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" name="zone"  class="form-control" required>
                                                            <label for="zone" class="control-label">Zona</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <input type="text" name="reference"  class="form-control" required>
                                                        <label for="reference" class="control-label">Referencia</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" name="sizetshirt" class="form-control" required="" data-rule-minlength="5">
                                                            <label for="sizetshirt" class="control-label">Talla Polo</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" name="sizepant"  class="form-control" required="">
                                                            <label for="sizepant" class="control-label">Talla Pantalon</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" name="sizeshirt"  class="form-control" required>
                                                            <label for="sizeshirt" class="control-label">Talla Camisa/Blusa</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" name="sizeshoes"  class="form-control" required>
                                                            <label for="sizeshoes" class="control-label">Talla Zapato</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end #step2 -->
                                            <div class="tab-pane" id="step3">
                                                <br/><br/>
                                                <div class="form-group">
                                                    <input type="text" name="url2" id="url2" class="form-control" data-rule-url="true" required="">
                                                    <label for="url2" class="control-label">URL</label>
                                                    <p class="help-block">Starts with http:// </p>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="rangelength2" id="rangelength2" class="form-control" data-rule-rangelength="[5, 10]" required="">
                                                    <label for="rangelength2" class="control-label">Range restriction</label>
                                                    <p class="help-block">Between 5 and 10 </p>
                                                </div>
                                            </div><!--end #step3 -->
                                            <div class="tab-pane" id="step4">
                                                <br/>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input name="salary" type="text" class="form-control" data-inputmask="'mask': '(99) (9) 999-999-999'" required>
                                                            <label for="salary" class="control-label">Sueldo Básico (S/.)</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input name="bankaccount" type="text" class="form-control" data-inputmask="'mask': '999-99999999-9-99'" required>
                                                            <label for="bankaccount" class="control-label">Cuenta Bancaria</label>
                                                            <p class="help-block">Ejemplo: 183-12922266-0-95</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            {!!Form::select('bank', $banks, null, array('class' => 'form-control select2-list','required'=>'required'))!!}
                                                            <label for="bank" class="control-label">Banco</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end #step4 -->
                                        </div><!--end .tab-content -->
                                        <ul class="pager wizard">
                                            <li class="previous first"><a class="btn-raised" href="javascript:void(0);">Primero</a></li>
                                            <li class="previous"><a class="btn-raised" href="javascript:void(0);">Previo</a></li>
                                            <li class="next last"><a class="btn-raised" href="javascript:void(0);">Ultimo</a></li>
                                            <li class="next"><a class="btn-raised" href="javascript:void(0);">Siguiente</a></li>
                                        </ul>
                                    {{--</form>--}}
                                </div><!--end #rootwizard -->
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Form wizard with validation</em>
                        </form>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END VALIDATION FORM WIZARD -->

            </div><!--end .section-body -->
        </section>
    </div><!--end #content-->
    <!-- END CONTENT -->
@stop
@section('script')
   <script src="{{ asset('js/libs/jquery-validation/dist/jquery.validate.min.js') }}" ></script>
    <script src="{{ asset('js/libs/jquery-validation/dist/additional-methods.min.js') }}" ></script>
   <script src="{{ asset('js/libs/jquery-validation/dist/localization/messages_es_AR.min.js') }}" ></script>
    <script src="{{ asset('js/libs/wizard/jquery.bootstrap.wizard.min.js') }}" ></script>
    <script src="{{ asset('js/libs/select2/select2.min.js') }}" ></script>
   <script src="{{ asset('js/libs/select2/select2_locale_es.js') }}" ></script>
    <script src="{{ asset('js/libs/inputmask/jquery.inputmask.bundle.min.js') }}" ></script>
    -<script src="{{ asset('js/core/demo/DemoFormWizard.js') }}" ></script>
    <script src="{{ asset('js/core/demo/DemoFormComponents.js') }}" ></script>


   <script type="text/javascript">
       jQuery(function(){

           $("#department").select2().on("change", function(e) {
               $.getJSON('/find-province?data='+ e.val, function(opts){
                   $("#province").select2({
                       data: opts
                   }).on("change", function(e) {
                       $.getJSON('/find-district?data='+ e.val, function(opts){
                           $("#district").select2({
                               data: opts
                           });
                       });

                   });
               });
           });

          // var form = $('#formCreate');
           //var valid = form.valid();

           $( "#crear" ).click(function() {
               var form=$('#formCreate');
               var valid = form.valid();
               if(!valid) {
                   form.data('validator').focusInvalid();
                   return false;
               }
           });
       });
   </script>
@stop
