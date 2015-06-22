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
                                        <div class="tools">
                                            <button id="searchWorkers" href="#offcanvas-filter-workers" data-toggle="offcanvas" class="btn btn-raised btn-floating-action btn-default-light"><i class="fa fa-search"></i></button>
                                        </div>
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

                @else
                        <!-- BEGIN VERTICAL FORM -->
                    <div class="row">
                        <div class=" col-md-12">
                            <form class="form">
                                <div class="card">
                                    <div class="card-head style-primary">
                                        <header>Colaborador: {{ $worker->full_name}}</header>
                                        <div class="tools">
                                            <button id="searchWorkers" href="#offcanvas-filter-workers" data-toggle="offcanvas" class="btn btn-raised btn-floating-action btn-default-light"><i class="fa fa-search"></i></button>
                                        </div>
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

    <!-- BEGIN OFFCANVAS RIGHT -->
    <div class="offcanvas">
        <!-- BEGIN OFFCANVAS FILTER CONTRACTS RIGHT -->
        <div id="offcanvas-filter-workers" class="offcanvas-pane width-12 " style="width:580px;">
            <div class="offcanvas-head style-primary-dark ">
                <header class="height-1">Colaborador</header>
                <div class="offcanvas-tools">
                    <a class="btn btn-lg btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                        <i class="md md-close"></i>
                    </a>
                </div>
            </div>

            <div class="offcanvas-body">
                <form id="form-filter-workers">
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label for="enterprise" class="control-label">DNI</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                {!! Form::text('dni', null, array('id' => 'dni','class' => 'form-control input-sm', 'data-rule-minlength' => '8', 'required')) !!}
                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/><br/><br/>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <button type="button" id="btnSearchWorkers" class="btn btn-raised btn-primary ink-reaction btn-block">
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

    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS RIGHT -->

@stop
@section('script')
    <script src="{{ asset('js/libs/jquery-validation/dist/jquery.validate.min.js') }}" ></script>
    <script src="{{ asset('js/libs/jquery-validation/dist/additional-methods.min.js') }}" ></script>
    <script src="{{ asset('js/libs/jquery-validation/dist/localization/messages_es.js') }}" ></script>
    <script src="{{ asset('js/core/demo/DemoFormComponents.js') }}" ></script>
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
                //if ($('#formModal').length)$('#formModal').modal('show');
                $('#searchWorkers').trigger('click');

                $( "#btnSearchWorkers").click(function(){
                    var form=$('#form-filter-workers');
                    var valid = form.valid();
                    if(!valid) {
                        form.data('validator').focusInvalid();
                        return false;
                    }
                    getWorker(0);
                });

                function getWorker(page) {
                    $.ajax({
                        url : '/find-worker?page=' + page,
                        data : { dni : $('#dni').val()},
                        dataType: 'json'
                    }).done(function (data) {
                        $('#list-contracts').html(data);
                        //location.hash = page;
                    }).fail(function () {
                        alert('No se pudo cargar los contratos.');
                    });
                }
            });
        </script>
    @else
        <script type="text/javascript">
        jQuery(function(){

            $( "#btnSearchWorkers").click(function(){
                var form=$('#form-filter-workers');
                var valid = form.valid();
                if(!valid) {
                    form.data('validator').focusInvalid();
                    return false;
                }
            });

            $('.progress').hide();

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
                aspectRatio: 3/2,
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
                        aspectRatio: 3/2,
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
