@extends('layouts.master')
@section('title','Soporte - Locales')
@section('css')

    <link type="text/css" rel="stylesheet" href="../css/theme-1/libs/bootstrap-multiselect/bootstrap-multiselect.css?1419109895" />
@stop
@section('content')
    <!-- BEGIN CONTENT-->
    <div id="content">

        <section>
            <div class="section-header">
                <ol class="breadcrumb">
                    <li class="active">Soporte/Locales</li>
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

                            <div class="col-sm-12 col-md-12 ">
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
                                    @if(isset($contracts))
                                        @if(count($contracts)>0)
                                            @foreach ($contracts as $contract)
                                                <div class="col-xs-12 col-lg-6 hbox-xs">
                                                    <div class="hbox-column width-2">

                                                            <img class="img-circle img-responsive pull-left" src="{{asset($contract->account->logo)}}" alt="" />

                                                    </div><!--end .hbox-column -->
                                                    <div class="hbox-column v-top">
                                                        <div class="clearfix">
                                                            <div class="col-lg-12 margin-bottom-lg">
                                                                <a class="text-lg text-medium worker-details" href="/soporte/backups/requerimiento/{{$contract->id}}" data-toggle="offcanvas">{{ $contract->workplace->account->name}} - {{$contract->workplace->name }}</a>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix opacity-75">
                                                            <div class="col-md-3">
                                                                <span class="glyphicon glyphicon-user text-sm"></span> &nbsp;{{$contract->account->contact}}
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="glyphicon glyphicon-phone text-sm"></span> &nbsp;{{$contract->account->mobile_phone}}
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="glyphicon glyphicon-phone text-sm"></span> &nbsp;{{$contract->account->office_phone}}
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span class="fa fa-users fa-fw text-sm"></span> &nbsp; Operarios Faltantes: {{$contract->workers-$contract->assignmentsCount}}

                                                            </div>
                                                        </div>
                                                        <div class="clearfix">
                                                            <div class="col-lg-12">
                                                                <span class="opacity-75">
                                                                    <span class="glyphicon glyphicon-map-marker text-sm"></span>
                                                                    &nbsp;{{$contract->workplace->address}} - {{$contract->workplace->reference}}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="stick-top-right small-padding">
                                                            @if(($contract->workers-$contract->assignmentsCount)==0)
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