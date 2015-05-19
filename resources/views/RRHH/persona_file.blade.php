@extends('layouts.master')
@section('title','Registro de Personas')
@section('css')
    <link href="{{ asset('css/theme-1/libs/wizard/wizard.css?1425466601') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/bootstrap-datepicker/datepicker3.css?1424887858') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/select2/select2.css?1424887856') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/libs/jcrop/jquery.Jcrop.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme-1/person.css') }}" rel="stylesheet">
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

                <!-- BEGIN INTRO -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-primary">Ficha de Persona</h1>
                    </div><!--end .col -->
                    <div class="col-lg-8">
                        <article class="margin-bottom-xxl">
                            <p class="lead">
                                Registro de personas y asignacion a contratos.
                            </p>
                        </article>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END INTRO -->

                <!-- BEGIN VALIDATION FORM WIZARD -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="card">
                                            <div class="body">
                                                <div class="row">
                                                    <div class="col-lg-offset-2 col-md-12">
                                                        <br/>
                                                        <img id="previewContainer11" src="/img/avatar1.jpg" width="640" height="480">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-offset-1 col-md-3">
                                                        <br/>
                                                        <div class="btn-group" data-toggle="buttons">
                                                            <label class="btn ink-reaction btn-primary">
                                                                <input type="submit" name="options" id="option1"><i class="fa fa-male fa-fw"></i> Male
                                                            </label>
                                                            <label class="btn ink-reaction btn-primary">
                                                                <input type="submit" name="options" id="option3"><i class="fa fa-female fa-fw"></i> Female
                                                            </label>
                                                        </div><!--end .btn-group -->
                                                        <br/>
                                                        <br/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end .col -->
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div class="body">
                                                <div class="col-lg-offset-2 col-md-3">
                                                    <br/>
                                                    <img id="previewContainer1" src="/img/avatar1.jpg">
                                                    <br/>
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end .col -->
                                </div><!--end .row -->

                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Form wizard with validation</em>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END VALIDATION FORM WIZARD -->

                <!-- BEGIN VALIDATION FORM WIZARD -->
                <div class="row">
                    <div id="files"></div>
                    <div id="files"></div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body ">
                                <div class="well text-center"  id="previewSpinner">
                                    {!! Form::open(array('url' => 'rrhh/persona/profilecrop', 'id'=>'lostpetform','method' => 'post'))!!}
                                    <fieldset>
                                        <!-- The container for the uploaded files -->
                                        <div id="files"></div>
                                        <p><span class="btn btn-large btn-block fileinput-button">
                                                Profile
                                            <i class="icon-picture"></i>
                                            <!-- The file input field used as target for the file upload widget -->
                                            <input id="fileupload" accept="image/*" type="file" name="file">
                                        </span></p>

                                        <!-- The global progress bar -->
                                        <div id="progress" class="progress" style="margin-top:20px;margin-bottom:20px;">
                                            <div class="bar"></div>
                                        </div>

                                        <input type="hidden" id="x" name="x" />
                                        <input type="hidden" id="y" name="y" />
                                        <input type="hidden" id="w" name="w" />
                                        <input type="hidden" id="h" name="h" />

                                        <br>
                                        <p><button type="submit" class="btn btn-large"><i class="icon-eye"></i> Preview and print the poster</button></p>

                                    </fieldset>
                                    {!! Form::close()!!}
                                    <div class="well text-center"  id="imageContainer">
                                        <p><img id="previewContainer" src="img/dog-poster.jpg"></p>
                                    </div>
                                </div>
                            </div><!--end .card-body -->
                        </div><!--end .card -->
                        <em class="text-caption">Form wizard with validation</em>

                        <!-- BEGIN FORM MODAL MARKUP -->
                        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="formModalLabel">Filtre por Contrato</h4>
                                    </div>
                                    <form class="form-horizontal" role="form">
                                        <div class="modal-body">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form class="form">
                                                        <div class="form-group">
                                                            <select class="form-control select2-list" data-placeholder="Select an item">
                                                                <optgroup label="San Isidro">
                                                                    <option value="AK">Fibra</option>
                                                                    <option value="HI">Totus</option>
                                                                </optgroup>
                                                                <optgroup label="San Luis">
                                                                    <option value="CA">Metro</option>
                                                                    <option value="NV">Poligono</option>
                                                                    <option value="OR">Rectangulo</option>
                                                                    <option value="WA">Washington1</option>
                                                                </optgroup>
                                                            </select>
                                                            <!--<label>Select with option filtering</label> -->
                                                        </div>
                                                    </form>
                                                </div><!--end .card-body -->
                                            </div><!--end .card -->

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Busqueda</button>
                                        </div>
                                    </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!-- END FORM MODAL MARKUP -->
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
    <script src="{{ asset('js/libs/wizard/jquery.bootstrap.wizard.min.js') }}" ></script>
    <script src="{{ asset('js/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}" ></script>
    <script src="{{ asset('js/libs/select2/select2.min.js') }}" ></script>
    <script src="{{ asset('js/libs/inputmask/jquery.inputmask.bundle.min.js') }}" ></script>
    <script src="{{ asset('js/libs/jcrop/jquery.Jcrop.min.js') }}" ></script>

    <script src="{{ asset('js/libs/select2/select2.min.js') }}" ></script>

    <script type="text/javascript">
        jQuery(function(){
            // affix picture
            var $window = $(window);
            setTimeout(function () {
                $('#imageContainer').affix({
                    offset: {
                        //top: 300
                        top: function () { return $window.width() <= 980 ? 100 : 210 }
                        , bottom: 110
                    }
                })
            }, 100)

            $('#progress').hide();
            $('#downloadBtn').hide();

            function resetCoords()
            {
                $('#x').val('');
                $('#y').val('');
                $('#w').val('');
                $('#h').val('');
            };

            $('#fileupload').fileupload({
                url: "{{url('rrhh/persona/upload')}}",
                dataType: 'json',
                done: function (e, data) {
                    $('#progress').hide();
                    resetCoords();
                    $.each(data.result.files, function (index, file) {
                        console.log(file);
                        console.log(file.name);

                        $('#files').html($('<img/>').attr('src',file));
                        $('.jcrop-preview').attr('src',file);
                    });

                    // Create variables (in this scope) to hold the API and image size
                    var jcrop_api,
                            boundx,
                            boundy;

                    var boxSize = 300;

                    $('#files img').Jcrop({
                        onChange: updateCoords,
                        onSelect: updateCoords,
                        aspectRatio: 3/2,
                        minSize: 200,
                        maxSize: 200,
                        boxWidth: boxSize,
                        boxHeight: boxSize,
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

                    function updateCoords(c)
                    {
                        $('#x').val(c.x);
                        $('#y').val(c.y);
                        $('#w').val(c.w);
                        $('#h').val(c.h);
                    };
                },
                fail: function(){
                    alert('Error uploading an image');
                },
                always: function(e,data){
                    $('#progress').hide();
                },
                start: function(e,data){
                    $('#progress').show();
                },
                acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                maxFileSize: 5000000,
                maxNumberOfFiles: 1,
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress .bar').css(
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
                $.post("{{url('rrhh/persona/profilecrop')}}", $("#lostpetform").serialize())
                        .done(function(data) { $('#previewContainer').attr('src',data.image); $('#downloadBtn').fadeIn(400);
                        })
                        .fail(function() { alert("error"); })
                        .always(function() { ImageSpinner.stop();});
                return false;
            });
        });
    </script>

    <script src="{{  asset('js/libs/spin/spin.min.js')}}"></script>
    <script src="{{  asset('js/libs/jquery-ui-widget/jquery.ui.widget.js')}}"></script>
    <script src="{{  asset('js/libs/jquery-file-upload/jquery.iframe-transport.js')}}"></script>
    <script src="{{  asset('js/libs/jquery-file-upload/jquery.fileupload.js')}}"></script>
    <script src="{{  asset('js/libs/jquery-file-upload/jquery.fileupload-process.js')}}"></script>
    <script src="{{  asset('js/libs/jquery-file-upload/jquery.fileupload-validate.js')}}"></script>
    <script src="{{  asset('js/libs/jquery-file-upload/jquery.Jcrop.min.js')}}"></script>



@stop
