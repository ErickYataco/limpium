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
                    <li class="active">Comercial/Contrato</li>
                </ol>
            </div>
            <div class="section-body contain-lg">
                <!-- BEGIN INTRO -->
                <div class="row">
                    <div class="col-lg-8">
                        <article class="margin-bottom-xxl">
                            <p class="lead">
                                Busqueda de Contratos.
                            </p>
                        </article>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END INTRO -->

                {!! Form::open(array('url' => '/comercial/contrato', 'id'=>'formCreate','method' =>
                'get','role' => 'form', 'novalidate'=>'novalidate', 'class'=>'form floating-label form-validation'))!!}
                <div class="card">
                    <!-- BEGIN SCHEDULE REQUIREMENTS HEADER -->
                    <div class="card-head style-primary">
                        <header>Contratos</header>
                        <div class="tools">
                            <button type="submit" id="searchLocal"
                                    class="btn btn-raised btn-floating-action btn-default-light"><i
                                        class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!--end .card-head -->
                    <!-- BEGIN SCHEDULE REQUIREMENTS WORKERS -->
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-sm-3 col-md-3 ">
                            </div>
                            <div class="col-sm-3 col-md-3 ">
                            </div>
                            <div class="col-sm-3 col-md-3 ">
                                <div class="form-group">
                                    {!! Form::text('value', null, array('id' => 'enterprise','class' => 'form-control input-sm', 'data-rule-minlength' => '2', 'required')) !!}
                                    <label>Criterio de Busqueda</label>
                                </div>
                            </div>
                            <!--end .col -->
                            <div class="col-sm-3 col-md-3 ">
                                <div class="form-group">
                                    {!!Form::select('column', $column, null, array('id'=>'column','class' => 'form-control '))!!}
                                    <label>Columna</label>
                                </div>
                            </div>
                            <!--end .col -->
                        </div>
                        <!--end .row -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 ">
                                <div class="form-group">
                                    <table id="requirements" class="table table-bordered table-hover ">
                                        <thead>
                                        <tr>
                                            <th class="text-center" with="20px">#</th>
                                            <th class="text-center">EMPRESA</th>
                                            <th class="text-center">RUC</th>
                                            <th class="text-center">MOVIL CONTACTO</th>
                                            <th class="text-center">FIJO CONTACTO</th>
                                            <th class="text-center">EMAIL CONTACTO</th>
                                            <th class="text-center"></th>
                                        </tr>
                                        </thead>
                                        @if(isset($enterprises))
                                        <tbody>
                                            <?php $i=1; ?>
                                            @foreach( $enterprises as $enterprise)
                                                <tr class="workers-assignment text-center">
                                                    <td>{{$i++}}</td>
                                                    <td>{{$enterprise->name}}</td>
                                                    <td>{{$enterprise->ruc}}</td>
                                                    <td>{{$enterprise->mobile_phone}}</td>
                                                    <td>{{$enterprise->office_phone}}</td>
                                                    <td>{{$enterprise->email_contact}}</td>
                                                    <td>
                                                        <a href="{{url('comercial/contrato/'.$enterprise->id).'/editar'}}" class="btn btn-icon-toggle">
                                                            <i class="fa fa-pencil-square-o"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        @endif
                                    </table>
                                    @if(isset($enterprises))
                                        <div class="row">
                                            <!-- BEGIN SEARCH RESULTS PAGING -->
                                            <div class="backups-list text-center">
                                                {!!$enterprises->render()!!}
                                            </div><!--end .text-center -->
                                            <!-- BEGIN SEARCH RESULTS PAGING -->
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!--end .col -->
                        </div>
                        <!--end .row -->
                    </div>
                    <!--end .card-body -->
                    <!-- END SCHEDULE REQUIREMENTS WORKERS -->
                </div>
                <!--end .card -->
                </form>

            </div>
            <!--end .section-body -->
        </section>
    </div><!--end #content-->
    <!-- END CONTENT -->
@stop
@section('script')
    <script src="{{ asset('js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('js/libs/jquery-validation/dist/localization/messages_es.js') }}"></script>
    <script src="{{ asset('js/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('js/libs/select2/select2_locale_es.js') }}"></script>
    <script src="{{ asset('js/libs/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/libs/toastr/toastr.js') }}"></script>
    <script type="text/javascript">


    </script>
@stop
