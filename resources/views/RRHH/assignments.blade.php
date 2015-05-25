@extends('layouts.master')
@section('title','Programacion de ')
@section('css')
    <link href="{{ asset('css/theme-1/libs/wizard/wizard.css?1425466601') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/bootstrap-datepicker/datepicker3.css?1424887858') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/select2/select2.css?1424887856') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/jquery-ui/jquery-ui-theme.css?1423393666') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/toastr/toastr.css?1425466569') }}" rel="stylesheet">

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
                                                                    <span class="md md-schedule text-sm"></span> AUSENTE
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
                                                                <i class="fa fa-info-circle fa-2x text-danger"></i>
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
