@extends('layouts.master')
@section('title','Registro de Personas')
@section('css')
    <link type="text/css" rel="stylesheet" href="../css/theme-1/libs/rickshaw/rickshaw.css?1422792967"
          xmlns="http://www.w3.org/1999/html"/>
    <link type="text/css" rel="stylesheet" href="../css/theme-1/libs/morris/morris.core.css?1420463396" />
@stop
@section('content')

    <!-- BEGIN CONTENT-->
    <div id="content">
        <!-- BEGIN PROFILE HEADER -->
        <section class="full-bleed">
            <div class="section-body style-default-dark force-padding text-shadow">
                <div class="img-backdrop" style="background-image: url('../img/img16.jpg')"></div>
                <div class="overlay overlay-shade-top stick-top-left height-3"></div>
                <div class="row">
                    <div class="col-md-3 col-xs-5">
                        <img class="img-circle border-white border-xl img-responsive auto-width" src="../img/enterprise/main_enterprise.png" alt="" />
                        <h3>{{$enterprise->name}}<br/><small>{{$enterprise->slogan}}</small></h3>
                    </div><!--end .col -->
                    <div class="col-md-9 col-xs-7">
                        <div class="width-3 text-center pull-right">
                            <strong class="text-xxl">{{$numberWorkplaces}}</strong><br/>
                            <span class="text-light opacity-75">Locales</span>
                        </div>
                        <div class="width-3 text-center pull-right">
                            <strong class="text-xxl">{{$numberWorkers}}</strong><br/>
                            <span class="text-light opacity-75">Operarios</span>
                        </div>
                    </div><!--end .col -->
                </div><!--end .row -->
                {{--<div class="overlay overlay-shade-bottom stick-bottom-left force-padding text-right">--}}
                    {{--<a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Contact me"><i class="fa fa-envelope"></i></a>--}}
                    {{--<a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Follow me"><i class="fa fa-twitter"></i></a>--}}
                    {{--<a class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Personal info"><i class="fa fa-facebook"></i></a>--}}
                {{--</div>--}}
            </div><!--end .section-body -->
        </section>
        <!-- END PROFILE HEADER  -->

        <section>
            <div class="section-body" style="margin-top: 0px">
                <div class="row">

                    <!-- BEGIN ALERT - REVENUE -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-info no-margin">
                                    <strong class="pull-right text-success text-lg">10,8% <i class="md md-trending-down"></i></strong>
                                    <strong class="text-xl">180 H</strong><br/>
                                    <span class="opacity-50">Horas Perdidas</span>
                                    <div class="stick-bottom-left-right">
                                        <div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
                                    </div>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END ALERT - REVENUE -->

                    <!-- BEGIN ALERT - VISITS -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-danger no-margin">
                                    <strong class="pull-right text-danger text-lg">{{round((7/8)*100)}}% <i class="md md-trending-down"></i></strong>
                                    <strong class="text-xl">7</strong><br/>
                                    <span class="opacity-50">Locales sin Apertura</span>
                                    <div class="stick-bottom-right">
                                        <div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
                                    </div>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END ALERT - VISITS -->

                    <!-- BEGIN ALERT - BOUNCE RATES -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-danger no-margin">
                                    <strong class="pull-right text-danger text-lg">{{round((14/33)*100)}}% <i class="md md-trending-down"></i></strong>
                                    <strong class="text-xl">14</strong><br/>
                                    <span class="opacity-50">Faltas Totales</span>
                                    <div class="stick-bottom-left-right">
                                        <div class="progress progress-hairline no-margin">
                                            <div class="progress-bar progress-bar-danger" style="width:{{(14/33)*100}}%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END ALERT - BOUNCE RATES -->

                    <!-- BEGIN ALERT - TIME ON SITE -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-success no-margin">
                                    <h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
                                    <strong class="text-xl">20 min.</strong><br/>
                                    <span class="opacity-50">Pro. Tiempo de Apertura</span>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END ALERT - TIME ON SITE -->

                </div><!--end .row -->
                <div class="row">



                </div><!--end .row -->
                <div class="row">

                    <!-- BEGIN SITE ACTIVITY -->
                    <div class="col-md-7">
                        <div class="card ">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="card-head">
                                        <header>Asistencia Semanal</header>
                                    </div><!--end .card-head -->
                                    <div class="card-body height-10">
                                        <div id="flot-visitors-legend" class="flot-legend-horizontal stick-top-right no-y-padding"></div>
                                        <div id="flot-visitors" class="flot height-7" data-title="Activity entry" data-color="#7dd8d2,#0aa89e"></div>
                                    </div><!--end .card-body -->
                                </div><!--end .col -->
                                <div class="col-md-5">
                                    <div class="card-head">
                                        <header><a class="" href="/soporte/locales/" >Locales sin Apertura</a></header>
                                    </div>
                                    <div class="card-body height-10">
                                        @foreach ($contracts as $contract)
                                            {{--{{dd($contract)}}--}}
                                            <a class="" href="/soporte/backups/requerimiento/{{$contract->id}}" >{{ $contract->workplace->account->name}} - {{$contract->workplace->name }}</a>
                                            <span class="pull-right text-danger text-sm">{{$contract->workers-$contract->assignmentsCount}}<i class="md md-trending-down"></i></span>
                                            <div class="progress progress-hairline">
                                                <div class="progress-bar progress-bar-success" style="width:{{($contract->assignmentsCount/$contract->workers)*100}}%"></div>
                                            </div>
                                        @endforeach
                                    </div><!--end .card-body -->
                                </div><!--end .col -->
                            </div><!--end .row -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END SITE ACTIVITY -->

                    <!-- BEGIN REGISTRATION HISTORY -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-head">
                                <header>Reemplazos</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>
                                    <a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
                                    <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                                </div>
                            </div><!--end .card-head -->
                            <div class="card-body no-padding height-10">
                                <div class="row">
                                    <div class="col-sm-6 hidden-xs">
                                        <div class="force-padding text-sm text-default-light">
                                            <p>
                                                <i class="md md-mode-comment text-primary-light"></i>
                                                Historico de los reeemplazos efectuados en los ultimos 5 meses.
                                            </p>
                                        </div>
                                    </div><!--end .col -->
                                    <div class="col-sm-6">
                                        <div class="force-padding pull-right text-default-light">
                                            <h2 class="no-margin text-primary-dark"><span class="text-xxl">66.05%</span></h2>
                                            <i class="fa fa-caret-up text-success fa-fw"></i> % de reemplazos del mes.
                                        </div>
                                    </div><!--end .col -->
                                </div><!--end .row -->
                                <div class="stick-bottom-left-right force-padding">
                                    <div id="flot-registrations" class="flot height-5" data-title="Registration history" data-color="#0aa89e"></div>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END REGISTRATION HISTORY -->

                    <!-- BEGIN SERVER STATUS -->
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-head">
                                <header class="text-primary">Backups</header>
                            </div><!--end .card-head -->
                            <div class="card-body height-5">
                                <div class="pull-right text-center">
                                    <em class="text-primary">En camino</em>
                                    <br/>
                                    <div id="serverStatusKnob" class="knob knob-shadow knob-primary knob-body-track size-4">
                                        <input type="text" class="dial" data-min="0" data-max="100" data-thickness=".09" value="50" data-readOnly=true>
                                    </div>
                                </div>
                            </div><!--end .card-body -->
                            <div class="card-body height-5 no-padding">
                                <div class="stick-bottom-left-right">
                                    <div id="rickshawGraph" class="height-4" data-color1="#0aa89e" data-color2="rgba(79, 89, 89, 0.2)"></div>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                    </div><!--end .col -->
                    <!-- END SERVER STATUS -->

                </div><!--end .row -->


            </div><!--end .section-body -->
        </section>
    </div><!--end #content-->
    <!-- END CONTENT -->

@stop
@section('script')
    <script src="../js/libs/moment/moment.min.js"></script>
    <script src="../js/libs/flot/jquery.flot.min.js"></script>
    <script src="../js/libs/flot/jquery.flot.time.min.js"></script>
    <script src="../js/libs/flot/jquery.flot.resize.min.js"></script>
    <script src="../js/libs/flot/jquery.flot.orderBars.js"></script>
    <script src="../js/libs/flot/jquery.flot.pie.js"></script>
    <script src="../js/libs/flot/curvedLines.js"></script>
    <script src="../js/libs/jquery-knob/jquery.knob.min.js"></script>
    <script src="../js/libs/sparkline/jquery.sparkline.min.js"></script>
    <script src="../js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
    <script src="../js/libs/d3/d3.min.js"></script>
    <script src="../js/libs/d3/d3.v3.js"></script>
    <script src="../js/libs/rickshaw/rickshaw.min.js"></script>

    <script src="../js/core/demo/DemoDashboard.js"></script>
@stop