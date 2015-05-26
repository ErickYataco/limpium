@extends('layouts.master')
@section('title','Backups')
@section('css')

    <link href="{{ asset('css/theme-1/libs/wizard/wizard.css?1425466601') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/bootstrap-datepicker/datepicker3.css?1424887858') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/select2/select2.css?1424887856') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/fullcalendar/fullcalendar.css?1425466619') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/jquery-ui/jquery-ui-theme.css?1423393666') }}" rel="stylesheet">
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
                    <li class="active">Soporte/Backups</li>
                </ol>
            </div>
            <div class="section-body ">
                <div class="card">

                    <!-- BEGIN SEARCH HEADER -->
                    <div class="card-head style-primary">
                        <header>Backups</header>
                        <div class="tools">
                            <button href="#offcanvas-filter-contracts" data-toggle="offcanvas" id="searchLocal" class="btn btn-raised btn-floating-action btn-default-light"><i class="fa fa-search"></i></button>
                        </div>
                    </div><!--end .card-head -->
                    <!-- END SEARCH HEADER -->

                    <!-- BEGIN SEARCH RESULTS -->
                    <div class="card-body">
                        <div class="row">
                            <!-- BEGIN CONTRACT DETAILS -->
                            <div class="hbox-column col-md-2 style-default-light">
                                <div class="row">
                                    <div class="col-xs-12">
                                        @if(isset($contract))
                                        <h3>Detalle Contrato</h3>
                                        <dl class="dl-horizontal dl-icon">
                                            <dt><span class="fa fa-fw fa-university fa-lg opacity-50"></span></dt>
                                            <dd>
                                                <span class="opacity-50">Empresa</span><br/>
                                                <span class="text-medium">{{$contract->enterprise->name}}</span>
                                            </dd>
                                            <dt><span class="fa fa-fw fa-home fa-lg opacity-50"></span></dt>
                                            <dd>
                                                <span class="opacity-50">Local</span><br/>
                                                <span class="text-medium">{{$contract->enterprise->name}}</span>
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
                                                <span class="text-medium">{{$contract->enterprise->contact}}</span>
                                            </dd>
                                            <dt><span class="fa fa-fw fa-mobile fa-lg opacity-50"></span></dt>
                                            <dd>
                                                <span class="opacity-50">Telefonos</span><br/>
                                                <span class="text-medium">{{$contract->enterprise->office_phone}}</span> &nbsp;<span class="opacity-50">trabajo</span><br/>
                                                <span class="text-medium">{{$contract->enterprise->mobile_phone}}</span> &nbsp;<span class="opacity-50">mobil</span>
                                            </dd>
                                            <dt><span class="fa fa-fw fa-envelope-square fa-lg opacity-50"></span></dt>
                                            <dd>
                                                <span class="opacity-50">Email</span><br/>
                                                <a class="text-medium" href="../../../html/mail/compose.html">{{$contract->enterprise->email_contact}}</a>
                                            </dd>
                                        </dl><!--end .dl-horizontal -->
                                        @endif
                                    </div><!--end .col -->
                                </div><!--end .row -->
                            </div><!--end .hbox-column -->
                            <!-- END CONTRACT DETAILS -->
                            <div class="col-sm-8 col-md-9 ">
                                <!-- BEGIN SEARCH RESULTS LIST -->
                                <div class="margin-bottom-xxl">
                                    <span class="text-light text-lg">Personal Asignado  {{--<strong>20</strong> Faltantes <strong>10</strong>--}}</span>
                                    <div class="btn-group btn-group-sm pull-right">
                                        <button type="button" class="btn btn-default-light dropdown-toggle" data-toggle="dropdown">
                                            <span class="glyphicon glyphicon-arrow-down"></span> Ordenar
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right animation-dock" role="menu">
                                            <li><a href="#">Ausentes</a></li>
                                            <li><a href="#">Posicion</a></li>
                                            <li><a href="#">Distrito</a></li>
                                        </ul>
                                    </div>
                                </div><!--end .margin-bottom-xxl -->
                                <div class="list-results">
                                    @if(isset($assignments))
                                        @if(count($assignments)>0)
                                            @foreach ($assignments as $assignment)
                                                <div class="col-xs-12 col-lg-6 hbox-xs">
                                                    <div class="hbox-column width-2">
                                                        <?php $i=0 ?>
                                                        @foreach ($assignment->worker->attachments as $attachment)
                                                            @if($attachment->type==2)
                                                                    <?php $i++ ?>
                                                                    <img class="img-circle img-responsive pull-left" src="{{$attachment->url}}" alt="" />
                                                            @endif
                                                        @endforeach
                                                        @if($i==0)
                                                                    <img class="img-circle img-responsive pull-left" src="{{asset('img/avatar9.jpg')}}" alt="" />
                                                        @endif
                                                    </div><!--end .hbox-column -->
                                                    <div class="hbox-column v-top">
                                                        <div class="clearfix">
                                                            <div class="col-lg-12 margin-bottom-lg">
                                                                <a class="text-lg text-medium worker-details" href="#offcanvas-details-worker" data-toggle="offcanvas">{{$assignment->worker->full_name}}</a>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix opacity-75">
                                                            <div class="col-md-5">
                                                                <span class="glyphicon glyphicon-phone text-sm"></span> {{$assignment->worker->mobile}}
                                                            </div>
                                                            <div class="col-md-7">
                                                                @if(count($assignment->attendance)>0)
                                                                    <span class="md md-schedule text-sm"></span> {{$assignment->attendance->first()->start_work_hour}}
                                                                @else
                                                                    @if($assignment->type_assignment==1)
                                                                        <span class="md md-schedule text-sm"></span> AUSENTE
                                                                    @endif
                                                                    @if($assignment->type_assignment==2)
                                                                        <span class="md md-schedule text-sm"></span> BACKUP - AUSENTE
                                                                    @endif
                                                                    @if($assignment->type_assignment==3)
                                                                        <span class="md md-schedule text-sm"></span> REEMPLAZADO
                                                                    @endif
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="clearfix">
                                                            <div class="col-lg-12">
                                                                <span class="opacity-75">
                                                                    <span class="glyphicon glyphicon-map-marker text-sm"></span>
                                                                    &nbsp;{{$assignment->worker->full_address}}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stick-top-right small-padding">
                                                            @if(count($assignment->attendance)>0)
                                                                <i class="fa fa-check-circle fa-2x text-success"></i>
                                                            @else
                                                                @if($assignment->type_assignment==1)
                                                                    <i class="fa fa-info-circle fa-2x text-danger"></i>
                                                                @endif
                                                                @if($assignment->type_assignment==2)
                                                                        <span class="fa fa-user-plus fa-2x  text-info"></span>
                                                                @endif
                                                                @if($assignment->type_assignment==3)
                                                                    <span class="fa fa-minus-circle fa-2x text-warning"></span>
                                                                @endif
                                                            @endif

                                                        </div>
                                                    </div><!--end .hbox-column -->
                                                </div><!--end .hbox-xs -->
                                            @endforeach
                                        @endif
                                    @endif

                                </div><!--end .list-results -->
                                <!-- BEGIN SEARCH RESULTS LIST -->

                                <!-- BEGIN SEARCH RESULTS PAGING -->
                                <div class="text-center">
                                    @if(isset($assignments) && count($assignments)>0)
                                        {!! $assignments->render() !!}
                                    @endif
                                </div><!--end .text-center -->
                                <!-- BEGIN SEARCH RESULTS PAGING -->
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
        </div>
        <!-- END OFFCANVAS FILTER CONTRACTS RIGHT -->

        <!-- BEGIN OFFCANVAS DETAILS WORKER RIGHT -->
        <div id="offcanvas-details-worker" class="offcanvas-pane width-12" style="width:580px">
            <div class="offcanvas-head style-primary-dark ">
                <header class="height-1">Ausente</header>
                <div class="offcanvas-tools">
                    <a class="btn btn-lg btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                        <i class="md md-close"></i>
                    </a>
                    <a width="48px" class="btn  btn-lg btn-icon-toggle  btn-default-light pull-right" href="#offcanvas-filter-backups" data-toggle="offcanvas">
                        <i class="md-person-add md"></i>
                    </a>
                </div>
            </div>
            <div class="card-body no-padding height-10">
                <div id="image-worker-details" class="img-backdrop" style="background-image: url('{{asset('img/avatar640.jpg')}}')"></div>
                <div class="overlay" style="bottom: 0px">
                    <strong id="name-worker-details" class="text-xxxl text-default-bright">Juan Perez</strong>
                </div>
            </div>
            <div class="offcanvas-body">
                <h4>Informacion</h4>
                <ul class="list-divided">
                    <li><strong>Posicion</strong><br/><span class="glyphicon glyphicon-user text-sm"></span> &nbsp;<span id="job-worker-details"></span></li>
                    <li><strong>Telefono</strong><br/><span class="glyphicon glyphicon-phone-alt text-sm"></span>&nbsp;<span id="phone-worker-details"></span></li>
                    <li><strong>Direccion</strong><br/><span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span>&nbsp;<span id="address-worker-details"></span></li>
                </ul>
            </div>
        </div>
        <!-- END OFFCANVAS DETAILS WORKER RIGHT -->

        <!-- BEGIN OFFCANVAS FILTER BACKUPS RIGHT -->
        <div id="offcanvas-filter-backups" class="offcanvas-pane width-12" style="width:580px">
            <div class="offcanvas-head style-primary-dark">
                <header >Backups</header>
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

                <div class="row">
                    <div class="col-sm-3">
                        <button type="button" id="btnSearchBackups" class="btn btn-raised btn-primary ink-reaction btn-block">
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
                <a class="btn btn-icon-toggle btn-accent " href="#offcanvas-details-worker" data-toggle="offcanvas">
                    <i class="md md-arrow-back"></i>
                </a>
                <a id="detailBackup" class="btn btn-floating-action btn-accent " href="#offcanvas-backup-worker" data-toggle="offcanvas">
                    <i class="md md-arrow-forward"></i>
                </a>
            </div>
        </div>
        <!-- END OFFCANVAS FILTER BACKUPS RIGHT -->

        <!-- BEGIN OFFCANVAS BACKUP WORKER RIGHT -->
        <div id="offcanvas-backup-worker" class="offcanvas-pane width-12" style="width:580px">
            <div class="offcanvas-head style-primary-dark ">
                <header class="height-1">Reemplazo</header>
                <div class="offcanvas-tools">
                    <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                        <i class="md md-close"></i>
                    </a>
                </div>
            </div>
            <div class="card-body no-padding height-10">
                <div id="image-backup-details" class="img-backdrop" style="background-image: url('{{asset('img/avatar640.jpg')}}')"></div>
                <div class="overlay" style="bottom: 0px">
                    <strong id="name-backup-details" class="text-xxxl text-default-bright">Sin Asignar</strong>
                </div>
            </div>
            {!! Form::open(array('url' => '/soporte/backups', 'id'=>'formCreate','method' => 'post','role' => 'form', 'novalidate'=>'novalidate', 'class'=>'form floating-label form-validation'))!!}
                <div class="offcanvas-body">
                    <div class="row">
                        <div class="hbox-column col-sm-12 style-default-light">
                            <h4>Remplazara a:</h4>
                            <ul class="list ">
                                <li class="tile">
                                    <a class="tile-content ink-reaction"  data-backdrop="false">
                                        <div class="tile-icon">
                                            <img id="replace-image" class="img-circle img-responsive pull-left width-4" src="" alt="" />
                                        </div>
                                        <div class="tile-text">
                                            <span id="replace-name" class="text-medium" >aa</span><br/>
                                            <span class="opacity-50 col-sm-6 ">
                                                <span class="text-small glyphicon glyphicon-phone text-sm"></span>&nbsp;<span id="replace-phone"></span>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <input type="hidden" name="replacer_worker_id" id="replacer_worker_id" value="">
                    <input type="hidden" name="replaced_worker_id" id="replaced_worker_id" value="">
                    <input type="hidden" name="assignment_id" id="assignment_id" value="">
                    <h4>Informacion</h4>
                    <ul class="list-divided">
                        <li><strong>Posicion</strong><br/><span class="glyphicon glyphicon-user text-sm"></span> &nbsp;<span id="job-backup-details">Sin Asignar</span></li>
                        <li><strong>Telefono</strong><br/><span class="glyphicon glyphicon-phone-alt text-sm"></span>&nbsp;<span id="phone-backup-details">Sin Asignar</span></li>
                        <li><strong>Direccion</strong><br/><span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span>&nbsp;<span id="address-backup-details">Sin Asignar</span></li>
                    </ul>
                </div>
                <div class="force-padding stick-bottom-right ">
                    <a class="btn btn-icon-toggle btn-accent " href="#offcanvas-filter-backups" data-toggle="offcanvas">
                        <i class="md md-arrow-back"></i>
                    </a>
                    {{--<a class="btn btn-floating-action btn-accent " href="#offcanvas-demo-size3" data-toggle="offcanvas">
                        <i class="md md-save"></i>
                    </a>--}}
                    <button type="submit"  id="searchLocal" class="btn btn-raised btn-floating-action btn-accent">
                        <i class="md md-save"></i>
                    </button>
                </div>
            </form>
        </div>
        <!-- END OFFCANVAS BACKUP WORKER RIGHT -->

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
   <script src="{{ asset('js/core/demo/DemoUIMessages.js') }}" ></script>
    <script type="text/javascript">
        jQuery(function(){
            @if(!isset($assignments))
            $('#searchLocal').trigger('click');
            @endif
            var workers=[];
            @if(isset($assignments))
                @if(count($assignments)>0)
                    @foreach ($assignments as $assignment)
                        var url='';
                        var urlface='';
                        @foreach ($assignment->worker->attachments as $attachment)
                            @if($attachment->type==1)
                                url="{{$attachment->url}}";
                            @endif
                            @if($attachment->type==2)
                                urlface="{{$attachment->url}}";
                            @endif
                        @endforeach
                        workers.push({name:"{{$assignment->worker->full_name}}",profile:(url==''?'{{asset('img/avatar640.jpg?')}}':url),
                                        face:(urlface==''?'{{asset('img/avatar1.jpg?')}}':urlface),
                                        assignment:"{{$assignment->id}}",
                                        job:"{{$assignment->worker->job_title}}",phone:"{{$assignment->worker->mobile}}",
                                        address:"{{$assignment->worker->full_address}}",id:"{{$assignment->worker->id}}"});
                    @endforeach
                @endif
            @endif

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
                $("#replaced_worker_id").val(worker.id);
                $("#assignment_id").val(worker.assignment);
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
                    url : '/find-requirements?page=' + page,
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


            $( "#btnSearchBackups").click(function(){
                var form=$('#form-filter-backups');
                var valid = form.valid();
                if(!valid) {
                    form.data('validator').focusInvalid();
                    return false;
                }
                getBackups(0);
            });


            function getBackups(page) {
                $.ajax({
                    url : '/find-backups?page=' + page,
                    data : { department_id : $('#department').val(), province_id : $('#province').val(),district_id : $('#district').val()},
                    dataType: 'json'
                }).done(function (data) {
                    $('#list-backups').html(data);
                    //location.hash = page;
                }).fail(function () {
                    alert('No se pudo cargar los backups.');
                });
            }

            $(document).on('click', '.backups-list .pagination a', function (e) {
                getBackups($(this).attr('href').split('page=')[1]);
                e.preventDefault();
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
                        /*$("#workplaces").select2({
                            data: opts
                        }).on("change", function(e) {
                            $("#workplace_id").val(e.val);
                        });*/
                    });
                }
            });
        });
    </script>
@stop