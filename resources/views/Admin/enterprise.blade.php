@extends('layouts.master')
@section('title','Registro de Empresas')
@section('css')

    <link href="{{ asset('css/theme-1/libs/bootstrap-datepicker/datepicker3.css?1424887858') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/select2/select2.css?1424887856') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/jquery-ui/jquery-ui-theme.css?1423393666') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/toastr/toastr.css?1425466569') }}" rel="stylesheet">
    {{--<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />--}}

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
                    <li class="active">Admin/Empresa</li>
                </ol>
            </div>
            <div class="section-body contain-lg">
                <!-- BEGIN INTRO -->
                <div class="row">
                    <div class="col-lg-8">
                        <article class="margin-bottom-xxl">
                            <p class="lead">
                                Registro de Empresas.
                            </p>
                        </article>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END INTRO -->

                <!-- BEGIN VALIDATION FORM WIZARD -->
                <div class="row">
                    <div class="col-lg-12">
                        {{--<form method="POST" class="form floating-label form-validation" role="form" id="formCreate" novalidate="novalidate" action="{{url('comercial/contrato')}}">--}}
                        {!! Form::open(array('url' => '/admin/empresa', 'id'=>'formCreate','method' => 'post','role' => 'form', 'novalidate'=>'novalidate', 'class'=>'form floating-label form-validation'))!!}
                        <div class="card">
                            <div class="card-head style-primary">
                                <header>Empresa</header>
                                <div class="tools">
                                    <button type="submit" id="crear" class="btn btn-floating-action btn-default-light"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="card-body ">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::text('enterprise', null, array('id' => 'enterprise','class' => 'form-control input-sm', 'data-rule-minlength' => '5', 'required')) !!}
                                            <input type="hidden" name="enterprise_id" id="enterprise_id" value="">
                                            <label for="enterprise" class="control-label">Empresa</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::text('contact', null, array('id' => 'contact','class' => 'form-control', 'data-rule-minlength' => '2', 'required')) !!}
                                            <label for="contact" class="control-label">Contacto</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::text('mobile_phone', null, array('id' => 'mobile_phone','class' => 'form-control', 'data-inputmask' => "'mask': '(99) (9) 999-999-999'", 'required')) !!}
                                            <label for="mobile_phone" class="control-label">Telefono fijo contacto</label>
                                            <p class="help-block">Ejemplo: (51) (1) 987-654-321</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::text('office_phone', null, array('id' => 'office_phone','class' => 'form-control', 'data-inputmask' => "'mask': '(99) 999-9999'", 'required')) !!}
                                            <label for="office_phone" class="control-label">Telefono Movil contacto</label>
                                            <p class="help-block">Ejemplo: (064) 765-4321</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {!! Form::email('email_contact', null, array('id' => 'email_contact', 'class' => 'form-control', 'data-rule-email' => 'true', 'required')) !!}
                                            <label for="email_contact" class="control-label">Email contacto</label>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Cuentas</em>
                        </form>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END VALIDATION FORM WIZARD -->

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
    <script src="{{ asset('js/libs/select2/select2.min.js') }}" ></script>
    <script src="{{ asset('js/libs/select2/select2_locale_es.js') }}" ></script>
    <script src="{{ asset('js/libs/inputmask/jquery.inputmask.bundle.min.js') }}" ></script>
    <script src="{{ asset('js/core/demo/DemoFormComponents.js') }}" ></script>
    <script src="{{ asset('js/libs/jquery-ui/jquery-ui.min.js') }}" ></script>
    <script src="{{ asset('js/libs/toastr/toastr.js') }}" ></script>
    <script type="text/javascript">
        jQuery(function(){

            $('input[type=text]').on('keydown', function(e) {
                if (e.which == 13) {
                    return false;
                }
            });

            $( "#crear" ).click(function() {
                //alert('entre  ');
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
