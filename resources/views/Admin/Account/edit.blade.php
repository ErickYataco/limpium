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
                        {!! Form::model($account,array('url' => '/admin/empresa/'.$account->id.'/editar', 'id'=>'formCreate','method' => 'post','role' => 'form', 'novalidate'=>'novalidate', 'class'=>'form floating-label form-validation'))!!}
                        @include('Admin.Account.form')
                        {!! Form::close() !!}
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
