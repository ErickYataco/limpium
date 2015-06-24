@extends('layouts.master')
@section('title','Programacion de ')
@section('css')
    <link href="{{ asset('css/theme-1/libs/wizard/wizard.css?1425466601') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/bootstrap-datepicker/datepicker3.css?1424887858') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/select2/select2.css?1424887856') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/jquery-ui/jquery-ui-theme.css?1423393666') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/toastr/toastr.css?1425466569') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/fullcalendar/fullcalendar.css?1425466619') }}" rel="stylesheet">
    <style>
        .ui-autocomplete {
            z-index: 5000;
        }
    </style>


@stop
@section('content')
    <!-- BEGIN CONTENT-->
    <div id="content">
        <section>
            <div class="section-header">
                <ol class="breadcrumb">
                    <li class="active">RRHH/Asignaciones</li>
                </ol>
            </div>
            <div class="section-body ">
                <div class="card">

                    <!-- BEGIN SEARCH HEADER -->
                    <div class="card-head style-primary">
                        <header>Asignacion</header>
                        <div class="tools">
                            <button id="searchLocal" class="btn btn-raised btn-floating-action btn-default-light"><i class="fa fa-plus"></i></button>
                        </div>
                    </div><!--end .card-head -->
                    <!-- END SEARCH HEADER -->

                    <!-- BEGIN SEARCH RESULTS -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="col-sm-3">
                                    <button href="#offcanvas-filter-contracts" data-toggle="offcanvas"
                                            type="button" class="btn btn-raised btn-primary ink-reaction btn-block">
                                                    <span class="pull-left">
                                                        <i class="fa fa-search"></i>
                                                    </span>Contratos
                                    </button>
                                </div>
                                <div class="col-sm-4">
                                    <button href="#offcanvas-filter-workers" data-toggle="offcanvas"
                                            type="button" class="btn btn-raised btn-primary ink-reaction btn-block">
                                                    <span class="pull-left">
                                                        <i class="fa fa-search"></i>
                                                    </span>Colaboradores
                                    </button>
                                </div>
                            </div>
                            <br/><br/>
                        </div>
                        <div class="row">
                            <!-- BEGIN CONTRACT DETAILS -->
                            <div class="hbox-column col-md-3 style-default-light">
                                <div class="row">
                                    <div class="col-xs-12">
                                        @if(isset($contract))
                                            <h3>Detalle Contrato</h3>
                                            <dl class="dl-horizontal dl-icon">
                                                <dt><span class="fa fa-fw fa-university fa-lg opacity-50"></span></dt>
                                                <dd>
                                                    <span class="opacity-50">Empresa</span><br/>
                                                    <span class="text-medium">{{$contract->account->name}}</span>
                                                </dd>
                                                <dt><span class="fa fa-fw fa-home fa-lg opacity-50"></span></dt>
                                                <dd>
                                                    <span class="opacity-50">Local</span><br/>
                                                    <span class="text-medium">{{$contract->account->name}}</span>
                                                </dd>
                                                <dt><span class="fa fa-fw fa-calendar fa-lg opacity-50"></span></dt>
                                                <dd>
                                                    <span class="opacity-50">Horario</span><br/>
                                                    <span class="text-medium">{{$contract->start_work}} - {{$contract->end_work}}</span>
                                                </dd>
                                                <dt><span class="fa fa-fw fa-location-arrow fa-lg opacity-50"></span></dt>
                                                <dd>
                                                    <span class="opacity-50">Direccion</span><br/>
													<span class="text-medium">
														San Miguel<br/>
														Av Universitaria, 1012 <br/>
														Lima
													</span>
                                                </dd>
                                            </dl><!--end .dl-horizontal -->
                                        @endif
                                        @if(isset($contract))
                                            <h3>Info Contacto</h3>
                                            <dl class="dl-horizontal dl-icon">
                                                <dt><span class="fa fa-fw fa-user fa-lg opacity-50"></span></dt>
                                                <dd>
                                                    <span class="opacity-50">Contacto</span><br/>
                                                    <span class="text-medium">{{$contract->account->contact}}</span>
                                                </dd>
                                                <dt><span class="fa fa-fw fa-mobile fa-lg opacity-50"></span></dt>
                                                <dd>
                                                    <span class="opacity-50">Telefonos</span><br/>
                                                    <span class="text-medium">{{$contract->account->office_phone}}</span> &nbsp;<span class="opacity-50">trabajo</span><br/>
                                                    <span class="text-medium">{{$contract->account->mobile_phone}}</span> &nbsp;<span class="opacity-50">mobil</span>
                                                </dd>
                                                <dt><span class="fa fa-fw fa-envelope-square fa-lg opacity-50"></span></dt>
                                                <dd>
                                                    <span class="opacity-50">Email</span><br/>
                                                    <a class="text-medium" href="../../../html/mail/compose.html">{{$contract->account->email_contact}}</a>
                                                </dd>
                                            </dl><!--end .dl-horizontal -->
                                        @endif
                                    </div><!--end .col -->
                                </div><!--end .row -->
                            </div><!--end .hbox-column -->
                            <!-- END CONTRACT DETAILS -->
                            <div class="col-sm-8 col-md-9 ">
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
                                                                    <div style="" class="fc-time-grid-container fc-scroller">
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
                                                                                    @if(isset($contract))
                                                                                        @for($i=1;$i<=$contract->workers;$i++)
                                                                                            <tr>
                                                                                                <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"><span>{{$i}}</span></td>
                                                                                                <td class="fc-widget-content"></td>
                                                                                            </tr>
                                                                                            <tr class="fc-minor">
                                                                                                <td style="width: 38px;" class="fc-axis fc-time fc-widget-content"></td>
                                                                                                <td class="fc-widget-content"></td>
                                                                                            </tr>
                                                                                        @endfor
                                                                                    @endif

                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <hr style="display: none;" class="fc-widget-header">
                                                                            {{--<div class="fc-content-skeleton">
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
                                                                            </div>--}}
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
                            </div><!--end .col -->
                        </div><!--end .row -->
                    </div><!--end .card-body -->
                    <!-- END SEARCH RESULTS -->
                </div><!--end .card -->
            </div><!--end .section-body -->
        </section>
    </div><!--end #content-->
    <!-- END CONTENT -->

    <!-- BEGIN OFFCANVAS RIGHT -->
    <div class="offcanvas">
        <!-- BEGIN OFFCANVAS FILTER CONTRACTS RIGHT -->
        <div id="offcanvas-filter-contracts" class="offcanvas-pane width-12 " style="width:580px;">
            <div class="offcanvas-head style-primary-dark ">
                <header class="height-1">Contratos</header>
                <div class="offcanvas-tools">
                    <a class="btn btn-lg btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                        <i class="md md-close"></i>
                    </a>
                </div>
            </div>

            <div class="offcanvas-body">
                <form id="form-filter-contracts">
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label for="enterprise" class="control-label">Empresa</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                {!! Form::text('enterprise', null, array('id' => 'enterprise','class' => 'form-control input-sm', 'data-rule-minlength' => '2', 'required')) !!}
                                <input type="hidden" name="enterprise_id" id="enterprise_id" value="">
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label for="workplace" class="control-label">Local</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <select id="workplaces" class="form-control" name="workplaces" required></select>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label for="workplace" class="control-label">Servicio</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                {!!Form::select('services', $services, null, array('id'=>'services','class' => 'form-control ','required'=>'required'))!!}
                            </div>
                        </div>
                    </div>
                    <br/><br/><br/>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <button type="button" id="btnSearchContracts" class="btn btn-raised btn-primary ink-reaction btn-block">
                            <span class="pull-left">
                                <i class="fa fa-search"></i>
                            </span>Buscar
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="list-contracts"></div>
                </form>
            </div>
            <div class="force-padding stick-bottom-right ">
                <a class="btn btn-floating-action btn-accent " href="#offcanvas-filter-workers" data-toggle="offcanvas">
                    <i class="md md-arrow-forward"></i>
                </a>
            </div>
        </div>
        <!-- END OFFCANVAS FILTER CONTRACTS RIGHT -->

        <!-- BEGIN OFFCANVAS FILTER BACKUPS RIGHT -->
        <div id="offcanvas-filter-workers" class="offcanvas-pane width-12" style="width:580px">
            <div class="offcanvas-head style-primary-dark">
                <header >Colaboradores</header>
                <div class="offcanvas-tools">
                    <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                        <i class="md md-close"></i>
                    </a>
                </div>
            </div>
            <div class="offcanvas-body">
                <form id="form-filter-backups">
                    <br/>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label for="deparment" class="control-label">Departameto</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                {!!Form::select('department', $departments, null, array('id'=>'department','class' => 'form-control ','required'=>'required'))!!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label for="province" class="control-label">Provincia</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <select id="province" class="form-control" name="province" required></select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label for="district" class="control-label">Distrito</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <select id="district" class="form-control" name="district" required></select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label for="district" class="control-label">Dias Laborables</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                @if(isset($days))
                                    {!!Form::select('days', $days, null, array('id'=>'days','class' => 'form-control ','required'=>'required'))!!}
                                @else
                                    <select id="days" class="form-control" name="days" required></select>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            <button type="button" id="btnSearchWorkers" class="btn btn-raised btn-primary ink-reaction btn-block">
                            <span class="pull-left">
                                <i class="fa fa-search"></i>
                            </span>Buscar
                            </button>
                        </div>
                    </div>
                    <div id="list-backups"></div>
                </form>
            </div>
            <div class="force-padding stick-bottom-right ">
                <a class="btn btn-floating-action btn-accent " href="#offcanvas-filter-contracts" data-toggle="offcanvas">
                    <i class="md md-arrow-back"></i>
                </a>
            </div>
        </div>
        <!-- END OFFCANVAS FILTER BACKUPS RIGHT -->

    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS RIGHT -->

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
    <script src="{{ asset('js/libs/toastr/toastr.js') }}" ></script>
    <script src="{{ asset('js/contrato.js') }}" ></script>
    <script type="text/javascript">
        jQuery(function(){

            $(".worker-details").click(function(){
                var index = $(".worker-details").index(this);
                var worker=workers[index];
                $("#image-worker-details").css("background-image", "url("+worker.profile+")");
                $("#replace-image").attr("src", worker.face);
                $("#name-worker-details").text(worker.name);
                $("#replace-name").text(worker.name);
                $("#job-worker-details").text(worker.job);
                $("#phone-worker-details").text(worker.phone);
                $("#replace-phone").text(worker.phone);
                $("#address-worker-details").text(worker.address);
            });

            $( "#btnSearchContracts").click(function(){
                var form=$('#form-filter-contracts');
                var valid = form.valid();
                if(!valid) {
                    form.data('validator').focusInvalid();
                    return false;
                }

                getContracts(0);
            });

            function getContracts(page) {
                $.ajax({
                    url : '/find-requirements-assignment?page=' + page,
                    data : { workplace_id : $('#workplaces').val(), service_id : $('#services').val()},
                    dataType: 'json'
                }).done(function (data) {
                    $('#list-contracts').html(data);
                    //location.hash = page;
                }).fail(function () {
                    alert('No se pudo cargar los contratos.');
                });
            }

            $(document).on('click', '.requirements-list .pagination a', function (e) {
                getContracts($(this).attr('href').split('page=')[1]);
                e.preventDefault();
            });


            $( "#btnSearchWorkers").click(function(){
                var form=$('#form-filter-backups');
                var valid = form.valid();
                if(!valid) {
                    form.data('validator').focusInvalid();
                    return false;
                }
                getWorkers(0);
            });


            function getWorkers(page) {
                $.ajax({
                    url : '/find-workers?page=' + page,
                    data : { department_id : $('#department').val(), province_id : $('#province').val(),district_id : $('#district').val(),days_id : $('#days').val()},
                    dataType: 'json'
                }).done(function (data) {
                    $('#list-backups').html(data);
                    //location.hash = page;
                }).fail(function () {
                    alert('No se pudo cargar los trabajadores.');
                });
            }

            $(document).on('click', '.backups-list .pagination a', function (e) {
                getBackups($(this).attr('href').split('page=')[1]);
                e.preventDefault();
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


            $( "#enterprise" ).autocomplete({
                source: '/find-empresa',
                minLength:3,
                dataType: 'json',
                focus: function( event, ui ) {
                    return false;
                },
                select: function( event, ui ) {
                    $.getJSON('/find-local?data='+ui.item.id , function(opts){
                        var workplaces=$("#workplaces");
                        workplaces.find('option').remove();
                        $.each(opts, function() {
                            workplaces.append($("<option />").val(this.id).text(this.text));
                        });
                    });
                }
            });
        });
    </script>
@stop
