@extends('layouts.master')
@section('title','Fotografia Colaborador')
@section('css')
    <link href="{{ asset('css/theme-1/libs/wizard/wizard.css?1425466601') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/jcrop/jquery.Jcrop.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/person.css') }}" rel="stylesheet">
@stop
@section('content')
    <!-- BEGIN CONTENT-->
    <div id="content">
        <section>
            <div class="section-header">
                <ol class="breadcrumb">
                    <li class="active">RRHH</li>
                </ol>
            </div>
            <div class="section-body contain-lg">

                <!-- BEGIN VERTICAL FORM -->
                <div class="row">
                    <div class=" col-md-12">
                        <form class="form">
                            <div class="card">
                                <div class="card-head style-primary">
                                    <header>Perfil:</header>
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-sm-8" id="previewSpinner">
                                            {!! Form::open(array('url' => 'form', 'id'=>'lostpetform','method' => 'post'))!!}
                                            <div class="form-group">
                                                <!-- The container for the uploaded files -->
                                                <div id="files">
                                                    <img src="/img/avatar640.jpg" style="display: block;margin-left: auto;margin-right: auto" width="640" height="480">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p><span class="btn btn-large btn-info btn-block fileinput-button disabled">
                                                        <i class="md md-cloud-upload"></i>
                                                        <span> Cargar foto</span>
                                                        <!-- The file input field used as target for the file upload widget -->
                                                        <input  accept="image/*"  name="file">
                                                    </span></p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <button type="submit" class="btn btn-info btn-block ">
                                                        <span class="pull-left">
                                                            <i class="md md-visibility"></i>
                                                        </span>Previsualizar
                                                    </button>
                                                </div>
                                            </div>
                                            {!! Form::close()!!}
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group" >
                                                <img id="previewContainer" src="/img/avatar1.jpg" >
                                                <em class="text-caption">Rostro del trabajador</em>
                                            </div>
                                        </div>

                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                            <em class="text-caption">Imagen necesaria para identificar al trabajador</em>
                        </form>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END VERTICAL FORM -->

                <!-- BEGIN FORM MODAL MARKUP -->
                <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true" >
                    {{--{!! Form::open(array('url' => 'rrhh/colaborador/foto', 'method' => 'get'))!!}--}}
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">Ingrese el DNI</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">DNI:</label>
                                        <input type="text" class="form-control" name="dni" id="dni">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                                <button type="button" class="btn btn-primary">buscar</button>
                            </div>
                        </div>
                    </div>
                    {{--{!! Form::close()!!}--}}
                </div>
                <!-- END FORM MODAL MARKUP -->

                @if(!isset($worker))

                @else

                @endif

            </div><!--end .section-body -->
        </section>
    </div><!--end #content-->
    <!-- END CONTENT -->
@stop
@section('script')
    <script src="{{ asset('js/libs/spin.js/spin.min.js')}}"></script>
    <script src="{{  asset('js/libs/jquery-ui-widget/jquery.ui.widget.js')}}"></script>
    <script src="{{ asset('js/libs/jquery-file-upload/jquery.iframe-transport.js')}}"></script>
    <script src="{{ asset('js/libs/jquery-file-upload/jquery.fileupload.js')}}"></script>
    <script src="{{ asset('js/libs/jquery-file-upload/jquery.fileupload-process.js')}}"></script>
    <script src="{{ asset('js/libs/jquery-file-upload/jquery.fileupload-validate.js')}}"></script>
    <script src="{{ asset('js/libs/wizard/jquery.bootstrap.wizard.min.js') }}" ></script>
    <script src="{{ asset('js/libs/jcrop/jquery.Jcrop.min.js') }}" ></script>

    <script type="text/javascript">
        jQuery(function(){
            if ($('#formModal').length)$('#formModal').modal('show');
        });
    </script>


@stop
