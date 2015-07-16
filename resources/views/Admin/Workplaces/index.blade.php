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
                    <li class="active">Admin/Empresas</li>
                </ol>
            </div>
            <div class="section-body contain-lg">
                <!-- BEGIN INTRO -->
                <div class="row">
                    <div class="col-lg-8">
                        <article class="margin-bottom-xxl">
                            <p class="lead">
                                Busqueda de Empresas.
                            </p>
                        </article>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END INTRO -->

                {!! Form::open(array('url' => '/admin/locales', 'id'=>'formCreate','method' =>
                'get','role' => 'form', 'novalidate'=>'novalidate', 'class'=>'form floating-label form-validation'))!!}
                <div class="card">
                    <!-- BEGIN SCHEDULE REQUIREMENTS HEADER -->
                    <div class="card-head style-primary">
                        <header>Empresas</header>
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
                                <div class="form-group">
                                    {!! Form::text('enterprise', null, array('id' => 'enterprise','class' => 'form-control input-sm', 'data-rule-minlength' => '2', 'required')) !!}
                                    <label>Nombre de la Empresa</label>
                                </div>
                            </div>
                            <!--end .col -->
                            <div class="col-sm-3 col-md-3 ">
                                <div class="form-group">
                                    {!! Form::text('name', null, array('id' => 'enterprise','class' => 'form-control input-sm', 'data-rule-minlength' => '2', 'required')) !!}
                                    <label>Nombre del Local</label>
                                </div>
                            </div>
                            <!--end .col -->
                            <div class="col-sm-2 col-md-2 ">
                                <div class="form-group">
                                    {!!Form::select('department', $departments,null, array('id' => 'department','class' => 'form-control'))!!}
                                    <label>Departamento</label>
                                </div>
                            </div>
                            <!--end .col -->
                            <div class="col-sm-2 col-md-2 ">
                                <div class="form-group">
                                    <select id="province" name="province" class="form-control"></select>
                                    <label>Provincia</label>
                                </div>
                            </div>
                            <!--end .col -->
                            <div class="col-sm-2 col-md-2 ">
                                <div class="form-group">
                                    <select id="district" name="district" class="form-control"></select>
                                    <label>Distrito</label>
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
                                            <th class="text-center">LOCAL</th>
                                            <th class="text-center">DEPARTAMENTO</th>
                                            <th class="text-center">PROVINCIA</th>
                                            <th class="text-center">DISTRITO</th>
                                            <th class="text-center">DIRECCION</th>
                                            <th class="text-center">LATITUD</th>
                                            <th class="text-center">LONGITUD</th>
                                            <th class="text-center"></th>
                                        </tr>
                                        </thead>
                                        @if(isset($workplaces))
                                            <tbody>
                                            <?php $i=1; ?>
                                            @foreach( $workplaces as $workplace)
                                                <tr class="workers-assignment text-center">
                                                    <td>{{$i++}}</td>
                                                    <td>{{$workplace->account->name}}</td>
                                                    <td>{{$workplace->name}}</td>
                                                    <td>{{$workplace->department}}</td>
                                                    <td>{{$workplace->province}}</td>
                                                    <td>{{$workplace->district}}</td>
                                                    <td>{{$workplace->address}}</td>
                                                    <td>{{$workplace->latitude}}</td>
                                                    <td>{{$workplace->longitude}}</td>
                                                    <td>
                                                        <a href="{{url('admin/empresa/'.$workplace->id).'/editar'}}" class="btn btn-icon-toggle">
                                                            <i class="fa fa-pencil-square-o"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        @endif
                                    </table>
                                    @if(isset($workplaces))
                                        <div class="row">
                                            <!-- BEGIN SEARCH RESULTS PAGING -->
                                            <div class="text-center">
                                                {!!$workplaces->render()!!}
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
        jQuery(function(){

            $("#department").on("change", function(e) {
                $('#department_text').val(this.options[this.selectedIndex].text);
                $.getJSON('/find-province?data='+ this.value, function(opts){
                    var province=$("#province");
                    province.find('option').remove();
                    $("#district").find('option').remove();
                    $.each(opts, function() {
                        province.append($("<option />").val(this.id).text(this.text));
                    });
                    //province.addClass('dirty');
                });
            });

            $("#province").on("change", function(e) {
                $('#province_text').val(this.options[this.selectedIndex].text);
                $.getJSON('/find-district?data='+ this.value, function(opts){
                    var district=$("#district");
                    district.find('option').remove();
                    $.each(opts, function() {
                        district.append($("<option />").val(this.id).text(this.text));
                    });
                    //district.addClass('dirty');
                });
            });

            $("#district").on("change", function(e) {
                $('#district_text').val(this.options[this.selectedIndex].text);
            });

            $( "#enterprise" ).autocomplete({
                source: '/find-empresa',
                minLength:3,
                dataType: 'json',
                focus: function( event, ui ) {
                    return false;
                },
                select: function( event, ui ) {
                    $("#account_id").val(ui.item.id);
                }
            });

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
