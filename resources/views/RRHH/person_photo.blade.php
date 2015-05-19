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

                @if(!isset($worker))
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
                                                        <button type="button" class="btn btn-info btn-block disabled">
                                                        <span class="pull-left">
                                                            <i class="md md-visibility"></i>
                                                        </span>Previsualizar
                                                        </button>
                                                    </div>
                                                </div>
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
                        {!! Form::open(array('url' => 'rrhh/colaborador/foto', 'method' => 'post'))!!}
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
                        {!! Form::close()!!}
                    </div>
                    <!-- END FORM MODAL MARKUP -->


                @else
                        <!-- BEGIN VERTICAL FORM -->
                    <div class="row">
                        <div class=" col-md-12">
                            <form class="form">
                                <div class="card">
                                    <div class="card-head style-primary">
                                        <header>Colaborador: {{ $worker->names.' '.$worker->first_last_name.' '.$worker->second_last_name }}</header>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8" id="previewSpinner">

                                                <form method="POST" action="{{url('form')}}" role="form">

                                                </form>

                                                {{--{!! Form::open(array('url' => 'form', 'method' => 'post','role' => 'form'))!!}--}}
                                                {{--<button type="submit" class="btn btn-default">Buscar</button>--}}
                                                {{--{!! Form::close()!!}--}}




                                                {{--{!! Form::open(array('url' => '/rrhh/colaborador/foto/face/'.$worker->id, 'id'=>'lostpetform','method' => 'post','role' => 'form'))!!}--}}
                                                <form method="POST" action="{{url('rrhh/colaborador/foto/face/'.$worker->id)}}" role="form">
                                                <div class="form-group">
                                                    <!-- The container for the uploaded files -->
                                                    <div id="files">
                                                        @if($photoProfile=='')
                                                            <img src="/img/avatar640.jpg" style="display: block;margin-left: auto;margin-right: auto" width="640" height="480">
                                                        @else
                                                            <img src="{{ $photoProfile }}" style="display: block;margin-left: auto;margin-right: auto" width="640" height="480">
                                                        @endif
                                                    </div>

                                                    <div class="progress" style="margin-top:20px;margin-bottom:20px;">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"  style="width: 10%;">
                                                            <span class="sr-only">10% Complete</span>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" id="x" name="x" />
                                                    <input type="hidden" id="y" name="y" />
                                                    <input type="hidden" id="w" name="w" />
                                                    <input type="hidden" id="h" name="h" />
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p><span class="btn btn-large btn-info btn-block fileinput-button">
                                                        <i class="md md-cloud-upload"></i>
                                                        <span> Cargar foto</span>
                                                        <!-- The file input field used as target for the file upload widget -->
                                                        <input id="fileupload" accept="image/*" type="file" name="file">
                                                    </span></p>
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <button type="submit" class="btn btn-info btn-block">
                                                        <span class="pull-left">
                                                            <i class="md md-visibility"></i>
                                                        </span>Procesar
                                                        </button>
                                                    </div>
                                                </div>
                                                {{--{!! Form::close()!!}--}}
                                                </form>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group" >
                                                    @if($photoFace=='')
                                                        <img id="previewContainer" src="/img/avatar1.jpg" >
                                                    @else
                                                        <img id="previewContainer" src="{{ $photoFace}}" >
                                                    @endif

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

    @if(!isset($worker))
        <script type="text/javascript">
            jQuery(function(){
                if ($('#formModal').length)$('#formModal').modal('show');
            });
        </script>
    @else
        <script type="text/javascript">
        jQuery(function(){

            $('.progress').hide();

            if ($('#formModal').length)$('#formModal').modal('show');


            function resetCoords()
            {
                $('#x').val('');
                $('#y').val('');
                $('#w').val('');
                $('#h').val('');
            };

            function updateCoords(c)
            {
                $('#x').val(c.x);
                $('#y').val(c.y);
                $('#w').val(c.w);
                $('#h').val(c.h);
            };

            // Create variables (in this scope) to hold the API and image size
            var jcrop_api,
                    boundx,
                    boundy;

            $('#files img').Jcrop({
                onChange: updateCoords,
                onSelect: updateCoords,

                minSize: 200,
                maxSize: 200,
                boxWidth: 640,
                boxHeight: 480,
            },function(){
                // Use the API to get the real image size
                var bounds = this.getBounds();
                boundx = bounds[0];
                boundy = bounds[1];
                // Store the API in the jcrop_api variable
                jcrop_api = this;
                $(".jcrop-holder").css('margin', '0px auto');

                // Move the preview into the jcrop container for css positioning
                //$preview.appendTo(jcrop_api.ui.holder);
            });

            $('#fileupload').fileupload({
                url: "{{url('rrhh/colaborador/foto/upload/'.$worker->id)}}",
                dataType: 'json',
                done: function (e, data) {
                    $('#progress').hide();
                    resetCoords();
                    $.each(data.result.files, function (index, file) {
                        console.log(file);
                        console.log(file.name);

                        $('#files').html("");
                        $('#files').html($('<img/>').attr('src',file));
                        $('.jcrop-preview').attr('src',file);
                    });



                    $('#files img').Jcrop({
                        onChange: updateCoords,
                        onSelect: updateCoords,

                        minSize: 200,
                        maxSize: 200,
                        boxWidth: 640,
                        boxHeight: 480,
                    },function(){
                        // Use the API to get the real image size
                        var bounds = this.getBounds();
                        boundx = bounds[0];
                        boundy = bounds[1];
                        // Store the API in the jcrop_api variable
                        jcrop_api = this;
                        $(".jcrop-holder").css('margin', '0px auto');

                        // Move the preview into the jcrop container for css positioning
                        //$preview.appendTo(jcrop_api.ui.holder);
                    });


                },
                fail: function(){
                    alert('Error uploading an image');
                },
                always: function(e,data){
                    $('.progress').hide();
                },
                start: function(e,data){
                    $('.progress').show();
                },
                acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                maxFileSize: 5000000,
                maxNumberOfFiles: 1,
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('.progress-bar').css(
                            'width',
                            progress + '%'
                    );
                }
            });

            // create spinner
            var opts = {
                lines: 13, // The number of lines to draw
                length: 20, // The length of each line
                width: 2, // The line thickness
                radius: 12, // The radius of the inner circle
                corners: 1, // Corner roundness (0..1)
                rotate: 0, // The rotation offset
                direction: 1, // 1: clockwise, -1: counterclockwise
                color: '#CCC', // #rgb or #rrggbb
                speed: 1, // Rounds per second
                trail: 67, // Afterglow percentage
                shadow: true, // Whether to render a shadow
                hwaccel: false, // Whether to use hardware acceleration
                className: 'spinner', // The CSS class to assign to the spinner
                zIndex: 2e9
            };

            ImageSpinner = new Spinner(opts).spin(document.getElementById('previewSpinner'));
            ImageSpinner.stop();

            $('#lostpetform').submit(function() {
                ImageSpinner.spin(document.getElementById('previewSpinner'));
                $.post("{{url('rrhh/colaborador/foto/face/'.$worker->id)}}", $("#lostpetform").serialize())
                        .done(function(data) { $('#previewContainer').attr('src',data.image); $('#downloadBtn').fadeIn(400);
                        })
                        .fail(function() { alert("error"); })
                        .always(function() { ImageSpinner.stop();});
                return false;
            });
        });
    </script>
    @endif

@stop
