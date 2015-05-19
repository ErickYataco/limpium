@extends('layouts.master')
@section('title','Asignacion Colaboradores')
@section('css')

    <link href="{{ asset('css/theme-1/libs/wizard/wizard.css?1425466601') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/bootstrap-datepicker/datepicker3.css?1424887858') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/select2/select2.css?1424887856') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/fullcalendar/fullcalendar.css?1425466619') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/jquery-ui/jquery-ui-theme.css?1423393666') }}" rel="stylesheet">
@stop
@section('content')
    <!-- BEGIN CONTENT-->
    <div id="content">


        <!-- BEGIN FORM MODAL MARKUP -->
        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="formModalLabel">Seleccione el Local</h4>
                    </div>
                    {!! Form::open(array('url' => 'rrhh/colaborador/foto', 'method' => 'post'))!!}
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label for="email1" class="control-label">Empresa</label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        {!! Form::text('enterprise', null, array('id' => 'enterprise','class' => 'form-control input-sm', 'data-rule-minlength' => '2', 'required')) !!}
                                        <input type="hidden" name="enterprise_id" id="workplace_id" value="">
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label for="password1" class="control-label">Local</label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-control " name="workplaces" id="workplaces" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Buscar</button>
                        </div>
                    {!! Form::close()!!}
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- END FORM MODAL MARKUP -->

        <section>
            <div class="section-header">
                <ol class="breadcrumb">
                    <li class="active">Asignacion de Personal</li>
                </ol>
            </div>
            <div class="section-body ">
                <div class="card">

                    <!-- BEGIN SEARCH HEADER -->
                    <div class="card-head style-primary">
                        <header>Asignacion</header>
                        <div class="tools">
                            <button data-toggle="modal" data-target="formModal" id="crear" class="btn btn-raised btn-floating-action btn-default-light"><i class="fa fa-search"></i></button>
                        </div>
                    </div><!--end .card-head -->
                    <!-- END SEARCH HEADER -->

                    <!-- BEGIN SEARCH RESULTS -->
                    <div class="card-body">
                        <div class="row">

                            <!-- BEGIN CONTACTS COMMON DETAILS -->
                            <div class="hbox-column col-md-2 style-default-light">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h3>Detalle Contrato</h3>
                                        <dl class="dl-horizontal dl-icon">
                                            <dt><span class="fa fa-fw fa-university fa-lg opacity-50"></span></dt>
                                            <dd>
                                                <span class="opacity-50">Empresa</span><br/>
                                                <span class="text-medium">Maestro</span>
                                            </dd>
                                            <dt><span class="fa fa-fw fa-home fa-lg opacity-50"></span></dt>
                                            <dd>
                                                <span class="opacity-50">Local</span><br/>
                                                <span class="text-medium">San Miguel</span>
                                            </dd>
                                            <dt><span class="fa fa-fw fa-calendar fa-lg opacity-50"></span></dt>
                                            <dd>
                                                <span class="opacity-50">Horario</span><br/>
                                                <span class="text-medium">7:00 am - 12:00 pm </span>
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
                                        <h3>Info Contacto</h3>
                                        <dl class="dl-horizontal dl-icon">
                                            <dt><span class="fa fa-fw fa-user fa-lg opacity-50"></span></dt>
                                            <dd>
                                                <span class="opacity-50">Contacto</span><br/>
                                                <span class="text-medium">Percy Arevalos </span>
                                            </dd>
                                            <dt><span class="fa fa-fw fa-mobile fa-lg opacity-50"></span></dt>
                                            <dd>
                                                <span class="opacity-50">Telefonos</span><br/>
                                                <span class="text-medium">233-332-342</span> &nbsp;<span class="opacity-50">trabajo</span><br/>
                                                <span class="text-medium">766-766-4532</span> &nbsp;<span class="opacity-50">mobil</span>
                                            </dd>
                                            <dt><span class="fa fa-fw fa-envelope-square fa-lg opacity-50"></span></dt>
                                            <dd>
                                                <span class="opacity-50">Email</span><br/>
                                                <a class="text-medium" href="../../../html/mail/compose.html">p.arevalos@maestro.com.pe</a>
                                            </dd>
                                            <!--<dd class="full-width"><div id="map-canvas" class="border-white border-xl height-5"></div></dd>-->
                                        </dl><!--end .dl-horizontal -->
                                    </div><!--end .col -->
                                </div><!--end .row -->
                            </div><!--end .hbox-column -->
                            <!-- END CONTACTS COMMON DETAILS -->


                            <div class="col-sm-8 col-md-9 ">
                                <!-- BEGIN SEARCH RESULTS LIST -->
                                <div class="margin-bottom-xxl">
                                    <span class="text-light text-lg">Personal Asignado <strong>20</strong> Faltantes <strong>10</strong></span>
                                    <div class="btn-group btn-group-sm pull-right">
                                        <button type="button" class="btn btn-default-light dropdown-toggle" data-toggle="dropdown">
                                            <span class="glyphicon glyphicon-arrow-down"></span> Sort
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right animation-dock" role="menu">
                                            <li><a href="#">First name</a></li>
                                            <li><a href="#">Last name</a></li>
                                            <li><a href="#">Email address</a></li>
                                        </ul>
                                    </div>
                                </div><!--end .margin-bottom-xxl -->
                                <div class="list-results">
                                    <div class="col-xs-12 col-lg-6 hbox-xs">
                                        <div class="hbox-column width-2">
                                            <img class="img-circle img-responsive pull-left" src="../img/avatar9.jpg?1404026744" alt="" />
                                        </div><!--end .hbox-column -->
                                        <div class="hbox-column v-top">
                                            <div class="clearfix">
                                                <div class="col-lg-12 margin-bottom-lg">
                                                    <a class="text-lg text-medium" href="../../../html/pages/contacts/details.html">Ann Laurens</a>
                                                </div>
                                            </div>
                                            <div class="clearfix opacity-75">
                                                <div class="col-md-5">
                                                    <span class="glyphicon glyphicon-phone text-sm"></span> &nbsp;567-890-1234
                                                </div>
                                                <div class="col-md-7">
                                                    <span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;ann@laurens.com
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="col-lg-12">
                                                    <span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> &nbsp;795 Folsom Ave, San Francisco, CA 94107</span>
                                                </div>
                                            </div>
                                            <div class="stick-top-right small-padding">
                                                <i class="fa fa-dot-circle-o fa-fw text-success" data-toggle="tooltip" data-placement="left" data-original-title="Faltante"></i>
                                            </div>
                                        </div><!--end .hbox-column -->
                                    </div><!--end .hbox-xs -->
                                    <div class="col-xs-12 col-lg-6 hbox-xs">
                                        <div class="hbox-column width-2">
                                            <img class="img-circle img-responsive pull-left" src="../img/avatar3.jpg?1404026799" alt="" />
                                        </div><!--end .hbox-column -->
                                        <div class="hbox-column v-top">
                                            <div class="clearfix">
                                                <div class="col-lg-12 margin-bottom-lg">
                                                    <a class="text-lg text-medium" href="#offcanvas-demo-size1" data-toggle="offcanvas" >Juan Perez</a>
                                                </div>
                                            </div>
                                            <div class="clearfix opacity-75">
                                                <div class="col-md-5">
                                                    <span class="glyphicon glyphicon-phone text-sm"></span> &nbsp;098-765-4321
                                                </div>
                                                <div class="col-md-7">
                                                    <span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;norman@erik.com
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="col-lg-12">
                                                    <span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> &nbsp;795 Folsom Ave, San Francisco, CA 94107</span>
                                                </div>
                                            </div>
                                        </div><!--end .hbox-column -->
                                    </div><!--end .hbox-xs -->
                                    <div class="col-xs-12 col-lg-6 hbox-xs" id="test">
                                        <div class="hbox-column width-2">
                                            <img class="img-circle img-responsive pull-left" src="../img/avatar2.jpg?1404026449" alt="" />
                                        </div><!--end .hbox-column -->
                                        <div class="hbox-column v-top">
                                            <div class="clearfix">
                                                <div class="col-lg-12 margin-bottom-lg">
                                                    <a class="text-lg text-medium" href="../../../html/pages/contacts/details.html">Jessica Cruise</a>
                                                </div>
                                            </div>
                                            <div class="clearfix opacity-75">
                                                <div class="col-md-5">
                                                    <span class="glyphicon glyphicon-phone text-sm"></span> &nbsp;123-456-7890
                                                </div>
                                                <div class="col-md-7">
                                                    <span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;norman@erik.com
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="col-lg-12">
                                                    <span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> &nbsp;795 Folsom Ave, San Francisco, CA 94107</span>
                                                </div>
                                            </div>
                                        </div><!--end .hbox-column -->
                                    </div><!--end .hbox-xs -->
                                    <div class="col-xs-12 col-lg-6 hbox-xs">
                                        <div class="hbox-column width-2">
                                            <img class="img-circle img-responsive pull-left" src="../img/avatar5.jpg?1404026513" alt="" />
                                        </div><!--end .hbox-column -->
                                        <div class="hbox-column v-top">
                                            <div class="clearfix">
                                                <div class="col-lg-12 margin-bottom-lg">
                                                    <a class="text-lg text-medium" href="../../../html/pages/contacts/details.html">Mabel Logan</a>
                                                </div>
                                            </div>
                                            <div class="clearfix opacity-75">
                                                <div class="col-md-5">
                                                    <span class="glyphicon glyphicon-phone-alt text-sm"></span> &nbsp;999-878-5323
                                                </div>
                                                <div class="col-md-7">
                                                    <span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;mabel@logan-intern.com
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="col-lg-12">
                                                    <span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> &nbsp;795 Folsom Ave, San Francisco, CA 94107</span>
                                                </div>
                                            </div>
                                        </div><!--end .hbox-column -->
                                    </div><!--end .hbox-xs -->
                                    <div class="col-xs-12 col-lg-6 hbox-xs">
                                        <div class="hbox-column width-2">
                                            <img class="img-circle img-responsive pull-left" src="../img/avatar6.jpg?1404026572" alt="" />
                                        </div><!--end .hbox-column -->
                                        <div class="hbox-column v-top">
                                            <div class="clearfix">
                                                <div class="col-lg-12 margin-bottom-lg">
                                                    <a class="text-lg text-medium" href="../../../html/pages/contacts/details.html">Nathan Peterson</a>
                                                </div>
                                            </div>
                                            <div class="clearfix opacity-75">
                                                <div class="col-md-5">
                                                    <span class="glyphicon glyphicon-phone-alt text-sm"></span> &nbsp;765-341-1231
                                                </div>
                                                <div class="col-md-7">
                                                    <span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;nathan@peterson.com
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="col-lg-12">
                                                    <span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> &nbsp;795 Folsom Ave, San Francisco, CA 94107</span>
                                                </div>
                                            </div>
                                            <div class="stick-top-right small-padding">
                                                <i class="fa fa-dot-circle-o fa-fw text-success" data-toggle="tooltip" data-placement="left" data-original-title="User online"></i>
                                            </div>
                                        </div><!--end .hbox-column -->
                                    </div><!--end .hbox-xs -->
                                    <div class="col-xs-12 col-lg-6 hbox-xs">
                                        <div class="hbox-column width-2">
                                            <img class="img-circle img-responsive pull-left" src="../img/avatar11.jpg?1404026774" alt="" />
                                        </div><!--end .hbox-column -->
                                        <div class="hbox-column v-top">
                                            <div class="clearfix">
                                                <div class="col-lg-12 margin-bottom-lg">
                                                    <a class="text-lg text-medium" href="../../../html/pages/contacts/details.html">Beverly Pierce</a>
                                                </div>
                                            </div>
                                            <div class="clearfix opacity-75">
                                                <div class="col-md-5">
                                                    <span class="glyphicon glyphicon-phone text-sm"></span> &nbsp;234-567-8901
                                                </div>
                                                <div class="col-md-7">
                                                    <span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;beverly@intern-pierce-inc.com
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="col-lg-12">
                                                    <span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> &nbsp;795 Folsom Ave, San Francisco, CA 94107</span>
                                                </div>
                                            </div>
                                        </div><!--end .hbox-column -->
                                    </div><!--end .hbox-xs -->
                                    <div class="col-xs-12 col-lg-6 hbox-xs">
                                        <div class="hbox-column width-2">
                                            <img class="img-circle img-responsive pull-left" src="../img/avatar10.jpg?1404026762" alt="" />
                                        </div><!--end .hbox-column -->
                                        <div class="hbox-column v-top">
                                            <div class="clearfix">
                                                <div class="col-lg-12 margin-bottom-lg">
                                                    <a class="text-lg text-medium" href="../../../html/pages/contacts/details.html">Samuel Parsons</a>
                                                </div>
                                            </div>
                                            <div class="clearfix opacity-75">
                                                <div class="col-md-5">
                                                    <span class="glyphicon glyphicon-phone text-sm"></span> &nbsp;876-543-2109
                                                </div>
                                                <div class="col-md-7">
                                                    <span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;Samuel@parsons-company.com
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="col-lg-12">
                                                    <span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> &nbsp;795 Folsom Ave, San Francisco, CA 94107</span>
                                                </div>
                                            </div>
                                        </div><!--end .hbox-column -->
                                    </div><!--end .hbox-xs -->
                                    <div class="col-xs-12 col-lg-6 hbox-xs">
                                        <div class="hbox-column width-2">
                                            <img class="img-circle img-responsive pull-left" src="../img/avatar8.jpg?1404026729" alt="" />
                                        </div><!--end .hbox-column -->
                                        <div class="hbox-column v-top">
                                            <div class="clearfix">
                                                <div class="col-lg-12 margin-bottom-lg">
                                                    <a class="text-lg text-medium" href="../../../html/pages/contacts/details.html">Jim Peters</a>
                                                </div>
                                            </div>
                                            <div class="clearfix opacity-75">
                                                <div class="col-md-5">
                                                    <span class="glyphicon glyphicon-phone-alt text-sm"></span> &nbsp;345-345-3454
                                                </div>
                                                <div class="col-md-7">
                                                    <span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;jim@peters.com
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="col-lg-12">
                                                    <span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> &nbsp;795 Folsom Ave, San Francisco, CA 94107</span>
                                                </div>
                                            </div>
                                            <div class="stick-top-right small-padding">
                                                <i class="fa fa-dot-circle-o fa-fw text-success" data-toggle="tooltip" data-placement="left" data-original-title="User online"></i>
                                            </div>
                                        </div><!--end .hbox-column -->
                                    </div><!--end .hbox-xs -->
                                </div><!--end .list-results -->
                                <!-- BEGIN SEARCH RESULTS LIST -->

                                <!-- BEGIN SEARCH RESULTS PAGING -->
                                <div class="text-center">
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#">«</a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">»</a></li>
                                    </ul>
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
        <!-- BEGIN OFFCANVAS DEMO RIGHT -->
        <div id="offcanvas-demo-size1" class="offcanvas-pane width-12" style="width:580px">
            <div class="offcanvas-head style-primary-dark ">
                <header class="height-1"></header>
                <div class="offcanvas-tools">
                    <a class="btn btn-icon-toggle btn-default-dark pull-right" data-dismiss="offcanvas">
                        <i class="md md-close"></i>
                    </a>
                    <a class="btn btn-icon-toggle btn-default-dark pull-right" href="#offcanvas-demo-size2" data-toggle="offcanvas">
                        <i class="md md-person-add md-5x"></i>
                    </a>
                </div>
            </div>
            <div class="card-body no-padding height-10">
                <div class="img-backdrop" style="background-image: url('https://dl.dropboxusercontent.com/s/8bvt79nsqwxmsmo/41738127_profile.jpg')"></div>
                <div class="overlay" style="bottom: 0px">
                    <strong class="text-xxxl text-default-bright">Juan Perez</strong>
                </div>
            </div>
            <div class="offcanvas-body">

                <p>&nbsp;</p>
                <h4>Some details</h4>
                <ul class="list-divided">
                    <li><strong>Telefono</strong><br/><span class="glyphicon glyphicon-phone-alt text-sm"></span> &nbsp;345-345-3454</li>
                    <li><strong>Direccion</strong><br/><span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> &nbsp;795 Folsom Ave, San Francisco, CA 94107</span></li>
                    <li><strong>Email</strong><br/><span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;jim@peters.com</li>
                </ul>
            </div>
        </div>
        <!-- END OFFCANVAS DEMO RIGHT -->

        <!-- BEGIN OFFCANVAS DEMO RIGHT -->
        <div id="offcanvas-demo-size2" class="offcanvas-pane width-12" style="width:580px">
            <div class="offcanvas-head style-primary-dark">
                <header >Reemplazo</header>
                <div class="offcanvas-tools">
                    <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                        <i class="md md-close"></i>
                    </a>
                </div>
            </div>
            <div class="offcanvas-body card-body">
                <br/>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{--{!!Form::select('department', $departments, null, array('id'=>'department','class' => 'form-control ','required'=>'required'))!!}--}}
                            <label for="deparment" class="control-label">Departameto</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{--{!!Form::select('province', $provinces, null, array('id'=>'province','class' => 'form-control select2-list','required'=>'required'))!!}--}}
                            <div class="form-control " name="province" id="province" >
                            </div>
                            <label for="province" class="control-label">Provincia</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{--{!!Form::select('district', $districts, null, array(id'=>'departments','class' => 'form-control select2-list','required'=>'required'))!!}--}}
                            <div class="form-control " name="district" id="district" >
                            </div>
                            <label for="district" class="control-label">Distrito</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="dni"  class="form-control" required>
                            <label for="dni" class="control-label">DNI</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <button type="button" id="btnAddTable" class="btn btn-info btn-block ">
                            <span class="pull-left">
                                <i class="fa fa-search"></i>
                            </span>Buscar
                        </button>
                    </div>
                </div>
                <div class="row">
                    <br/>
                    <div class="col-sm-12">
                        <ul class="list ">

                            <li class="tile">
                                <a class="tile-content ink-reaction" href="#offcanvas-demo-size3" data-toggle="offcanvas" data-backdrop="false">
                                    <div class="tile-icon">
                                        <img src="../img/avatar4.jpg?1404026791" alt="" />
                                    </div>
                                    <div class="tile-text">
                                        Miguel Vasquez
                                        <small>123-123-3210</small>
                                    </div>
                                </a>
                            </li>
                            <li class="tile">
                                <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                                    <div class="tile-icon">
                                        <img src="../img/avatar9.jpg?1404026744" alt="" />
                                    </div>
                                    <div class="tile-text">
                                        Ann Laurens
                                        <small>123-123-3210</small>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <!-- BEGIN SEARCH RESULTS PAGING -->
                    <div class="text-center">
                        <ul class="pagination">
                            <li class="disabled"><a href="#">«</a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div><!--end .text-center -->
                    <!-- BEGIN SEARCH RESULTS PAGING -->
                </div>
            </div>
            <div class="force-padding stick-bottom-right ">
                <a class="btn btn-icon-toggle btn-accent " href="#offcanvas-demo-size1" data-toggle="offcanvas">
                    <i class="md md-arrow-back"></i>
                </a>
                <a class="btn btn-floating-action btn-accent " href="#offcanvas-demo-size3" data-toggle="offcanvas">
                    <i class="md md-arrow-forward"></i>
                </a>
            </div>
        </div>
        <!-- END OFFCANVAS DEMO RIGHT -->

        <!-- BEGIN OFFCANVAS DEMO RIGHT -->
        <div id="offcanvas-demo-size3" class="offcanvas-pane width-12" style="width:580px">
            <div class="offcanvas-head style-primary-dark ">
                <header class="height-1"></header>
                <div class="offcanvas-tools">
                    <a class="btn btn-icon-toggle btn-default-dark pull-right" data-dismiss="offcanvas">
                        <i class="md md-close"></i>
                    </a>
                    <a class="btn btn-icon-toggle btn-default-dark pull-right" href="#offcanvas-demo-size2" data-toggle="offcanvas">
                        <i class="md md-person-add md-5x"></i>
                    </a>
                </div>
            </div>
            <div class="card-body no-padding height-10">
                <div class="img-backdrop" style="background-image: url('https://dl.dropboxusercontent.com/s/ottepzokg2mppqz/42020024_profile.jpg?dl')"></div>
                <div class="overlay" style="bottom: 0px">
                    <strong class="text-xxxl text-default-bright">Miguel Vazquez</strong>
                </div>
            </div>
            <div class="offcanvas-body">

                <p>&nbsp;</p>
                <h4>Some details</h4>
                <ul class="list-divided">
                    <li><strong>Telefono</strong><br/><span class="glyphicon glyphicon-phone-alt text-sm"></span> &nbsp;345-345-3454</li>
                    <li><strong>Direccion</strong><br/><span class="opacity-75"><span class="glyphicon glyphicon-map-marker text-sm"></span> &nbsp;795 Folsom Ave, San Francisco, CA 94107</span></li>
                    <li><strong>Email</strong><br/><span class="glyphicon glyphicon-envelope text-sm"></span> &nbsp;jim@peters.com</li>
                </ul>
            </div>
            <div class="force-padding stick-bottom-right ">
                <a class="btn btn-icon-toggle btn-accent " href="#offcanvas-demo-size2" data-toggle="offcanvas">
                    <i class="md md-arrow-back"></i>
                </a>
                <a class="btn btn-floating-action btn-accent " href="#offcanvas-demo-size3" data-toggle="offcanvas">
                    <i class="md md-save"></i>
                </a>
            </div>
        </div>
        <!-- END OFFCANVAS DEMO RIGHT -->

    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS RIGHT -->
@stop
@section('script')
   {{-- <script src="{{ asset('js/core/source/AppOffcanvas.js') }}" ></script>
    <script src="../js/libs/jquery/jquery-1.11.2.min.js"></script>
    <script src="../js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script src="../js/libs/bootstrap/bootstrap.min.js"></script>
    <script src="../js/libs/spin.js/spin.min.js"></script>
    <script src="../js/libs/autosize/jquery.autosize.min.js"></script>
    <script src="../js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>--}}
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
            if ($('#formModal').length)$('#formModal').modal('show');

            $( "#enterprise" ).autocomplete({
                source: '/find-empresa',
                minLength:3,
                dataType: 'json',
                focus: function( event, ui ) {
                    return false;
                },
                select: function( event, ui ) {
                    $.getJSON('/find-local?data='+ui.item.id , function(opts){
                        $("#workplaces").select2({
                            data: opts
                        }).on("change", function(e) {
                            $("#workplace_id").val(e.val);
                        });
                    });
                }
            });
        });
    </script>
@stop