@extends('layouts.master')
@section('title','Registro de Personas')
@section('css')
    <link href="{{ asset('css/theme-1/libs/wizard/wizard.css?1425466601') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/select2/select2.css?1424887856') }}" rel="stylesheet">
    <style>

        .row-text:focus{
            outline:none;
        }
        .row-text{
            background-color: transparent;
            border: 0px solid;
            /*width:80px;*/
        }
        .row-text-id{
            background-color: transparent;
            border: 0px solid;
        }

    </style>
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
                                                {{--<li><a href="#step4" data-toggle="tab"><span class="step">4</span> <span class="title">CONTRATO</span></a></li>--}}
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
                                                            {!! Form::text('secondname', null, array('class' => 'form-control', 'data-rule-minlength' => '2')) !!}
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
                                                            {!! Form::text('secondlastname', null, array('class' => 'form-control', 'data-rule-minlength' => '2')) !!}
                                                            <label for="secondlastname" class="control-label">Apellido Materno</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            {!! Form::text('dni', null, array('class' => 'form-control', 'data-inputmask' => '"mask": "99999999"', 'required')) !!}
                                                            <label for="dni" class="control-label">DNI</label>
                                                            <p class="help-block">Ejemplo: 41738129</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            {!!Form::select('maritalstatus', $maritalStatus, null, array('class' => 'form-control','required'=>'required'))!!}
                                                            <label for="maritalstatus" class="control-label">Estado Civil</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="birthdate" data-rule-date="true" data-inputmask="'mask': 'd/m/y'" required>
                                                            <label for="birthdate" class="control-label">Fecha de Nacimiento</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" name="emergencyperson" class="form-control" data-rule-minlength="10" >
                                                            <label for="emergencyperson" class="control-label">En Emergencias llamar</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" name="emergencyphone" class="form-control"  data-rule-minlength="7" >
                                                            <label for="emergencyphone" class="control-label">Telefono a llamar</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            {!!Form::select('emergency_relationship', $emergency, null, array('class' => 'form-control',))!!}
                                                            <label for="emergency_relationship" class="control-label">Vinculo</label>
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
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <div>
                                                                <label class="radio-inline radio-styled">
                                                                    <input type="radio" name="gender" value="1" checked><span>Hombre</span>
                                                                </label>
                                                                <label class="radio-inline radio-styled">
                                                                    <input type="radio" name="gender" value="2" ><span>Mujer</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <div class="checkbox checkbox-styled">
                                                                <label>
                                                                    <input type="checkbox" name="backup" value="">
                                                                    <span>Disponible para reemplazos</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            {!!Form::select('job_title', $job_title, null, array('class' => 'form-control','required'=>'required'))!!}
                                                            <label for="job_title" class="control-label">Posicion</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end #step1 -->
                                            <div class="tab-pane" id="step2">
                                                <br/>
                                                <div class="form-group">
                                                    <input type="text" name="address" class="form-control" data-rule-minlength="10" required>
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
                                                            {{--<div class="form-control " name="province" id="province" >
                                                            </div>--}}
                                                            <select id="province" class="form-control" name="province" required></select>
                                                            <label for="province" class="control-label">Provincia</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            {{--{!!Form::select('district', $districts, null, array(id'=>'departments','class' => 'form-control select2-list','required'=>'required'))!!}--}}
                                                            {{--<div class="form-control " name="district" id="district" >
                                                            </div>--}}
                                                            <select id="district" class="form-control" name="district" required></select>
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
                                                        <input type="text" name="reference"  class="form-control" data-rule-minlength="10" >
                                                        <label for="reference" class="control-label">Referencia</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" name="sizetshirt" class="form-control" required="" >
                                                            <label for="sizetshirt" class="control-label">Talla Polo</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" name="sizepant"  class="form-control" data-rule-digits="true" required="">
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
                                                            <input type="text" name="sizeshoes"  class="form-control" data-rule-digits="true" required>
                                                            <label for="sizeshoes" class="control-label">Talla Zapato</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end #step2 -->
                                            <div class="tab-pane" id="step3">
                                                <br/><br/>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='first_name_relative' name="firs_name_relative" >
                                                            <label for="firs_name_relative" class="control-label">Primer Nombre Familiar</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='second_name_relative' name="second_name_relative" >
                                                            <label for="second_name_relative" class="control-label">Segundo Nombre Familiar</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='first_last_name_relative' name="first_last_name_relative" >
                                                            <label for="first_last_name_relative" class="control-label">Apellido Paterno Familiar</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='second_last_name_relative' name="second_last_name_relative" >
                                                            <label for="second_last_name_relative" class="control-label">Apellido Materno Familiar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='birthdate_relative' name="birthdate_relative" data-rule-date="true" data-inputmask="'mask': 'd/m/y'" >
                                                            <label for="birthdate_relative" class="control-label">Fecha de Nacimiento</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='occupation_relative' name="occupation_relative" >
                                                            <label for="occupation_relative" class="control-label">Ocupacion</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='workplace_relative' name="workplace_relative" >
                                                            <label for="workplace_relative" class="control-label">Centro Laboral</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='phone_relative' name="phone_relative" >
                                                            <label for="phone_relative" class="control-label">Telefono Familiar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            {!!Form::select('relationship_relative', $emergency, null, array('id'=>'relationship_relative','class' => 'form-control'))!!}
                                                            <label for="relationship_relative" class="control-label">Tipo de Vinculo</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <button type="button" id="btnAddTable" class="btn btn-raised btn-primary ink-reaction btn-block">
                                                        <span class="pull-left">
                                                            <i class="md md-add-box"></i>
                                                        </span> Familiares
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <br/><br/>
                                                    <table id="relative" class="table table-bordered table-hover ">
                                                        <thead class="style-accent-dark">
                                                        <tr >
                                                            <th>Familiar</th>
                                                            <th>Nacimiento</th>
                                                            <th>Parentesco</th>
                                                            <th>Ocupacion</th>
                                                            <th>Centro Laboral</th>
                                                            <th>Telefono</th>
                                                            <th class="text-center" width="20px" ></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!--end #step3 -->
                                            {{--<div class="tab-pane" id="step4">
                                                <br/>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input name="salary" type="text" class="form-control" data-rule-digits="true" required>
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
                                                            {!!Form::select('bank', $banks, null, array('class' => 'form-control','required'=>'required'))!!}
                                                            <label for="bank" class="control-label">Banco</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end #step4 -->--}}
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
                        <em class="text-caption">Cada dato es valioso para los siguientes procesos</em>
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

           $('input[type=text]').on('keydown', function(e) {
               if (e.which == 13) {
                   return false;
               }
           });

           /*$("#department").select2().on("change", function(e) {
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
           });*/

           $( "#btnAddTable").click(function(){

               var form=$('#formCreate');
               var valid = form.valid();
               if(!valid) {
                   form.data('validator').focusInvalid();
                   return false;
               }

               var relative='<input readonly class="row-text-id" size="13" type="text" name="numberPersonsPost[]" value="'+$('#first_name_relative').val()+'"></input> '+
                       '<input readonly class="row-text-id" size="13" type="text" name="numberPersonsPost[]" value="'+$('#second_name_relative').val()+'"></input> '+
                       '<input readonly class="row-text-id"  size="13" type="text" name="numberPersonsPost[]" value="'+$('#first_last_name_relative').val()+'"></input> '+
                       '<input readonly class="row-text-id"  size="13" type="text" name="numberPersonsPost[]" value="'+$('#second_last_name_relative').val()+'"></input> ';

               var birthday='<input readonly class="row-text" size="10" type="text" name="birthdate_relative[]" value="'+$('#birthdate_relative').val()+'"></input>';

               var relationship='<input readonly class="row-text" type="text" name="relationship_relative[]" value="'+$('#relationship_relative option:selected').text()+'"></input>';

               var occupation='<input readonly class="row-text" size="13" type="text" name="occupation_relative[]" value="'+$('#occupation_relative').val()+'"></input>';

               var workplace='<input readonly class="row-text" size="13" type="text" name="workplace_relative[]" value="'+$('#workplace_relative').val()+'"></input>';

               var phone='<input readonly class="row-text" size="10" type="text" name="phone_relative[]" value="'+$('#phone_relative').val()+'"></input>';

               var html='<tr><td>'+relative+'</td>'+
                       '<td>'+birthday+'</td>'+
                       '<td>'+relationship+'</td>'+
                       '<td>'+occupation+'</td>'+
                       '<td>'+workplace+'</td>'+
                       '<td>'+phone+'</td>'+
                       '<td><button type="button" class="btn btn-icon-toggle delete-row" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button></td><tr>';
               $('#relative tbody:last').append(html);


           });
           $(".delete-row").live('click', function() {
               $(this).parent().parent().fadeTo(400, 0, function () {
                   $(this).remove();
               });
               return false;
           });


           $("#department").on("change", function(e) {
               $.getJSON('/find-province?data='+ this.value, function(opts){
                   var province=$("#province");
                   province.find('option').remove();
                   $("#district").find('option').remove();
                   $.each(opts, function() {
                       province.append($("<option />").val(this.id).text(this.text));
                   });
                   //province.addClass('dirty');
               });
           });

           $("#province").on("change", function(e) {
               $.getJSON('/find-district?data='+ this.value, function(opts){
                   var district=$("#district");
                   district.find('option').remove();
                   $.each(opts, function() {
                       district.append($("<option />").val(this.id).text(this.text));
                   });
                   //district.addClass('dirty');
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
