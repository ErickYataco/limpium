@extends('layouts.master')
@section('title','Registro de Personas')
@section('css')
    <link href="{{ asset('css/theme-1/libs/wizard/wizard.css?1425466601') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/bootstrap-datepicker/datepicker3.css?1424887858') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/select2/select2.css?1424887856') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/fullcalendar/fullcalendar.css?1425466619') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/jquery-ui/jquery-ui-theme.css?1423393666') }}" rel="stylesheet">
    {{--<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />--}}

    <style>

        .row-text:focus{
            outline:none;
        }

        .row-text{
            background-color: transparent;
            border: 0px solid;
            width:80px;
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
                    <li class="active">Comercial/Contrato</li>
                </ol>
            </div>
            <div class="section-body contain-lg">
                <!-- BEGIN INTRO -->
                <div class="row">
                    <div class="col-lg-8">
                        <article class="margin-bottom-xxl">
                            <p class="lead">
                                Registro de contratos y requerimientos.
                            </p>
                        </article>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END INTRO -->

                <!-- BEGIN VALIDATION FORM WIZARD -->
                <div class="row">
                    <div class="col-lg-12">
                        {{--<form method="POST" class="form floating-label form-validation" role="form" id="formCreate" novalidate="novalidate" action="{{url('comercial/contrato')}}">--}}
                        {!! Form::open(array('url' => '/comercial/contrato', 'id'=>'formCreate','method' => 'post','role' => 'form', 'novalidate'=>'novalidate', 'class'=>'form floating-label form-validation'))!!}
                        <div class="card">
                            <div class="card-head style-primary">
                                <header>Contrato</header>
                                <div class="tools">
                                    <button type="submit" id="crear" class="btn btn-floating-action btn-default-light"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div id="rootwizard2" class="form-wizard form-wizard-horizontal">
                                        <div class="form-wizard-nav">
                                            <div class="progress"><div class="progress-bar progress-bar-primary"></div></div>
                                            <ul class="nav nav-justified">
                                                <li class="active"><a href="#step1" data-toggle="tab"><span class="step">1</span> <span class="title">EMPRESA</span></a></li>
                                                <li><a href="#step2" data-toggle="tab"><span class="step">2</span> <span class="title">REQUERIMIENTOS</span></a></li>
                                            </ul>
                                        </div><!--end .form-wizard-nav -->
                                        <div class="tab-content clearfix">
                                            <div class="tab-pane active" id="step1">
                                                <br/><br/>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::text('enterprise', null, array('id' => 'enterprise','class' => 'form-control input-sm', 'data-rule-minlength' => '2', 'required')) !!}
                                                            <input type="hidden" name="enterprise_id" id="workplace_id" value="">
                                                            <label for="enterprise" class="control-label">Empresa</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="form-control " name="workplaces" id="workplaces" >
                                                            </div>
                                                            <input type="hidden" name="workplace_id" id="workplace_id" value="">
                                                            <label for="workplaces" class="control-label">Local</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::text('contact', null, array('id' => 'contact','class' => 'form-control', 'data-rule-minlength' => '2', 'required')) !!}
                                                            <label for="contact" class="control-label">Contacto</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::text('mobile_phone', null, array('id' => 'mobile_phone','class' => 'form-control', 'data-inputmask' => "'mask': '(99) (9) 999-999-999'", 'required')) !!}
                                                            <label for="mobile_phone" class="control-label">Telefono fijo contacto</label>
                                                            <p class="help-block">Ejemplo: (51) (1) 987-654-321</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::text('office_phone', null, array('id' => 'office_phone','class' => 'form-control', 'data-inputmask' => "'mask': '(99) 999-9999'", 'required')) !!}
                                                            <label for="office_phone" class="control-label">Telefono Movil contacto</label>
                                                            <p class="help-block">Ejemplo: (064) 765-4321</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            {!! Form::email('email_contact', null, array('id' => 'email_contact', 'class' => 'form-control', 'data-rule-email' => 'true', 'required')) !!}
                                                            <label for="email_contact" class="control-label">Email contacto</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end #step1 -->
                                            <div class="tab-pane" id="step2">
                                                <br/><br/>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='startContract' name="startContract" data-inputmask="'mask': 'd/m/y'" required>
                                                            <label for="startContract" class="control-label">Inicio de Requerimiento </label>
                                                        </div>
                                                        {{--<div class="form-group control-width-normal">
                                                            <div class="input-group " id="dateinicio">
                                                                <div class="input-group-content">
                                                                    --}}{{--{!! Form::text('startContract', null, array('id'=>'startContract','class' => 'form-control','required')) !!}--}}{{--
                                                                    <input type="text" class="form-control" id='startContract' name="startContract" data-inputmask="'mask': 'd/m/y'" required>
                                                                    <label for="startContract" class="control-label">Fecha de Inicio</label>
                                                                </div>
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>--}}
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='endContract' name="endContract" data-inputmask="'mask': 'd/m/y'" required>
                                                            <label for="endContract" class="control-label">Fin de Requerimiento</label>
                                                        </div>
                                                        {{--<div class="form-group control-width-normal">
                                                            <div class="input-group date" id="datefin">
                                                                <div class="input-group-content">
                                                                    {!! Form::text('endContract', null, array('id'=>'endContract','class' => 'form-control','required')) !!}
                                                                    <label for="endContract" class="control-label">Fecha de Fin</label>
                                                                </div>
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>--}}
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            {!! Form::text('numberPersons', null, array('maxlength'=>'2','id'=>'numberPersons','class' => 'form-control','required')) !!}
                                                            <label for="numberPersons" class="control-label">Numero de Personas</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            {!!Form::select('services', $services, null, array('id'=>'services','class' => 'form-control select2-list'))!!}
                                                            <input type="hidden" name="service_id" id="service_id" value="">
                                                            <label>Tipo de Servicio</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            {!! Form::text('startWork', null, array('id'=>'startWork','class' => 'form-control time12-mask','required')) !!}
                                                            <label for="startWork" class="control-label">Hora de Ingreso</label>
                                                            <p class="help-block">Time: am/pm</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            {!! Form::text('endWork', null, array('id'=>'endWork','class' => 'form-control time12-mask','required')) !!}
                                                            <label for="endWork" class="control-label">Hora de Salida</label>
                                                            <p class="help-block">Time: am/pm</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            {!! Form::text('startLunch', null, array('id'=>'startLunch','class' => 'form-control time12-mask','required')) !!}
                                                            <label for="startLunch" class="control-label">Inicio de Refrigerio</label>
                                                            <p class="help-block">Time: am/pm</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            {!! Form::text('endLunch', null, array('id'=>'endLunch','class' => 'form-control time12-mask','required')) !!}
                                                            <label style="border: none; border-color: transparent" for="endLunch" class="control-label">Fin de Refrigerio</label>
                                                            <p class="help-block">Time: am/pm</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <br/>
                                                    <div class="col-sm-2">
                                                        <button type="button" id="btnAddTable" class="btn btn-info btn-block ">
                                                        <span class="pull-left">
                                                            <i class="md md-add-box"></i>
                                                        </span>Requirimientos
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <br/>
                                                    <table id="requirements" class="table table-bordered table-hover ">
                                                        <thead class="style-accent-dark">
                                                        <tr >
                                                            <th>#</th>
                                                            <th>Vigencia</th>
                                                            <th>Horario</th>
                                                            <th>Refrigerio</th>
                                                            <th>Servicio</th>
                                                            <th class="text-center" width="20px" ></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!--end #step2 -->
                                            <div class="tab-pane" id="step3">
                                                <br/>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <div class="fc fc-ltr fc-unthemed" id="calendar">
                                                                <div style="" class="fc-view-container">
                                                                    <div style="" class="fc-view fc-agendaWeek-view fc-agenda-view">
                                                                        <!--begin days of week-->
                                                                        <table>
                                                                            <thead>
                                                                            <tr>
                                                                                <td class="fc-widget-header">
                                                                                    <div style="border-right-width: 1px; margin-right: 16px;" class="fc-row fc-widget-header">
                                                                                        <table>
                                                                                            <thead>
                                                                                            <tr>
                                                                                                <th style="width: 38px;" class="fc-axis fc-widget-header">
                                                                                                    <div class="tools1">
                                                                                                        <a class="btn btn-floating-action btn-sm btn-primary-dark" data-toggle="modal" data-target="#formModal" >
                                                                                                            <i class="fa fa-plus"></i>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                </th>
                                                                                                <th class="fc-day-header fc-widget-header fc-sun">Lunes</th>
                                                                                                <th class="fc-day-header fc-widget-header fc-mon">Martes</th>
                                                                                                <th class="fc-day-header fc-widget-header fc-tue">Miercoles</th>
                                                                                                <th class="fc-day-header fc-widget-header fc-wed">Jueves</th>
                                                                                                <th class="fc-day-header fc-widget-header fc-thu">Viernes</th>
                                                                                                <th class="fc-day-header fc-widget-header fc-fri">Sabado</th>
                                                                                                <th class="fc-day-header fc-widget-header fc-sat">Domingo</th>
                                                                                            </tr>
                                                                                            </thead>
                                                                                        </table>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="fc-widget-content">
                                                                                    <div class="fc-day-grid">
                                                                                    </div>
                                                                                    <hr class="fc-widget-header">
                                                                                    <div style="height: 593px;" class="fc-time-grid-container fc-scroller">
                                                                                        <div class="fc-time-grid">
                                                                                            <div class="fc-bg">
                                                                                                <table>
                                                                                                    <tbody>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-widget-content"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2015-04-19"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2015-04-20"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-tue fc-today" data-date="2015-04-21"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2015-04-22"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2015-04-23"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2015-04-24"></td>
                                                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2015-04-25"></td>
                                                                                                    </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                            <div class="fc-slats">
                                                                                                <table>
                                                                                                    <tbody>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>6am</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>7am</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>8am</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>9am</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>10am</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>11am</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>12pm</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>1pm</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>2pm</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>3pm</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>4pm</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>5pm</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>6pm</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>7pm</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>8pm</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>9pm</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>10pm</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>11pm</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>12am</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>1am</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>2am</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>3am</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>4am</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>5am</span></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    <tr class="fc-minor">
                                                                                                        <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                        <td class="fc-widget-content"></td>
                                                                                                    </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                            <hr style="display: none;" class="fc-widget-header">
                                                                                            <div class="fc-content-skeleton">
                                                                                                <table>
                                                                                                    <tbody>
                                                                                                    <tr>
                                                                                                        <td class="fc-axis" style="width:38px"></td>
                                                                                                        <td>
                                                                                                            <div class="fc-event-container"></div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div class="fc-event-container"></div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div class="fc-event-container">
                                                                                                                <a style="top: 0px; bottom: -753px; z-index: 1; left: 0%; right: 0%;" class="fc-time-grid-event fc-event fc-start fc-end  fc-draggable fc-resizable">
                                                                                                                    <div class="fc-content">
                                                                                                                        <div class="fc-time" data-start="6:00" data-full="6:00 AM - 4:30 PM"><span>6:00 - 4:30</span></div>
                                                                                                                        <div class="fc-title">Call clients for follow-up</div>
                                                                                                                    </div>
                                                                                                                    <div class="fc-bg"></div>
                                                                                                                    <div class="fc-resizer"></div>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div class="fc-event-container">
                                                                                                                <a style="top: 864.5px; bottom: -1026px; z-index: 1; left: 0%; right: 0%;" class="fc-time-grid-event fc-event fc-start fc-end fc-draggable fc-resizable">
                                                                                                                    <div class="fc-content">
                                                                                                                        <div class="fc-time" data-start="7:00" data-full="7:00 PM - 10:30 PM"><span>7:00 - 10:30</span></div>
                                                                                                                        <div class="fc-title">Birthday Party</div>
                                                                                                                    </div>
                                                                                                                    <div class="fc-bg"></div>
                                                                                                                    <div class="fc-resizer"></div>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div class="fc-event-container"></div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div class="fc-event-container"></div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div class="fc-event-container">
                                                                                                                <div class="fc-event-container">
                                                                                                                    <a style="top: 864.5px; bottom: -1026px; z-index: 1; left: 0%; right: 0%;" class="fc-time-grid-event fc-event fc-start fc-end fc-draggable fc-resizable">
                                                                                                                        <div class="fc-content">
                                                                                                                            <div class="fc-time" data-start="9:00" data-full="7:00 PM - 10:30 PM"><span>7:00 - 10:30</span></div>
                                                                                                                            <div class="fc-title">Birthday Party</div>
                                                                                                                        </div>
                                                                                                                        <div class="fc-bg"></div>
                                                                                                                        <div class="fc-resizer"></div>
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <!--end days of week-->
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div><!--end #step3 -->

                                        </div><!--end .tab-content -->
                                        <ul class="pager wizard">
                                            <li class="previous first"><a class="btn-raised" href="javascript:void(0);">Primero</a></li>
                                            <li class="previous"><a class="btn-raised" href="javascript:void(0);">Previo</a></li>
                                            <li class="next last"><a class="btn-raised" href="javascript:void(0);">Ultimo</a></li>
                                            <li class="next"><a class="btn-raised" href="javascript:void(0);">Siguiente</a></li>
                                        </ul>
                                </div><!--end #rootwizard -->
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Contratos</em>
                        </form>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END VALIDATION FORM WIZARD -->

                <!-- BEGIN FORM MODAL MARKUP -->
                <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="formModalLabel">Crear Horarios</h4>
                            </div>
                            <form class="form-horizontal" role="form">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label class="control-label">Dia de Inicio</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control select2-list" data-placeholder="Select an item" id="diainicio" >
                                                <option value="">&nbsp;</option>
                                                <option value="1">Lunes</option>
                                                <option value="2">Martes</option>
                                                <option value="3">Miercoles</option>
                                                <option value="4">Jueves</option>
                                                <option value="5">Viernes</option>
                                                <option value="6">Sabado</option>
                                                <option value="7">Domingo</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="control-label">Dia de Fin</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control select2-list" id="diafin" >
                                                <option value="">&nbsp;</option>
                                                <option value="1">Lunes</option>
                                                <option value="2">Martes</option>
                                                <option value="3">Miercoles</option>
                                                <option value="4">Jueves</option>
                                                <option value="5">Viernes</option>
                                                <option value="6">Sabado</option>
                                                <option value="7">Domingo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="horafin" class="control-label">Hora de Ingreso</label>
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::text('horainicio', null, array('class' => 'form-control time12-mask','required')) !!}
                                            <p class="help-block">Time: am/pm</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="horafin" class="control-label">Hora de Salida</label>
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::text('horafin', null, array('class' => 'form-control time12-mask','required')) !!}
                                            <p class="help-block">Time: am/pm</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="horainicio" class="control-label">Numero de Personas</label>
                                        </div>
                                        <div class="col-sm-9">
                                            {!! Form::text('horainicio', null, array('class' => 'form-control','required')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">

                                    </div>

                                    <div class="form-group">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="crearhorario">registrar</button>
                                </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <!-- END FORM MODAL MARKUP -->

                @if(isset($worker))
                    <!-- BEGIN FORM MODAL MARKUP -->
                    <div class="modal fade" id="formModalSuccess" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="formModalLabel">Registro Creado</h4>
                                </div>
                                <form class="form-horizontal" role="form">
                                    <div class="modal-body">
                                        <h3>Transaccion Exitosa!</h3>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="crearhorario">OK</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- END FORM MODAL MARKUP -->
                @endif
            </div><!--end .section-body -->
        </section>
    </div><!--end #content-->
    <!-- END CONTENT -->
@stop
@section('script')
    <script src="{{ asset('js/libs/jquery-validation/dist/jquery.validate.min.js') }}" ></script>
    <script src="{{ asset('js/libs/jquery-validation/dist/additional-methods.min.js') }}" ></script>
    <script src="{{ asset('js/libs/jquery-validation/dist/localization/messages_es.js') }}" ></script>
    <script src="{{ asset('js/libs/wizard/jquery.bootstrap.wizard.min.js') }}" ></script>
    <script src="{{ asset('js/libs/select2/select2.min.js') }}" ></script>
    <script src="{{ asset('js/libs/select2/select2_locale_es.js') }}" ></script>
    <script src="{{ asset('js/libs/inputmask/jquery.inputmask.bundle.min.js') }}" ></script>
    <script src="{{ asset('js/core/demo/DemoFormWizard.js') }}" ></script>
    <script src="{{ asset('js/core/demo/DemoFormComponents.js') }}" ></script>
    <script src="{{ asset('js/libs/jquery-ui/jquery-ui.min.js') }}" ></script>
    <script src="{{ asset('js/contrato.js') }}" ></script>
@stop
