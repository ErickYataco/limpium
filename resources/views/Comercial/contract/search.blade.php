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
                    <li class="active">Comercial/Contrato/Colaboradores</li>
                </ol>
            </div>
            <div class="section-body ">
                {{--<form method="POST" role="form" novalidate="novalidate" action="http://erp.limpium.com/admin/empresa">--}}
                {!! Form::open(array('url' => '/comercial/contrato/colaboradores', 'id'=>'formCreate','method' =>
                'post','role' => 'form', 'novalidate'=>'novalidate', 'class'=>'form floating-label form-validation'))!!}
                <div class="card">
                    <!-- BEGIN SCHEDULE REQUIREMENTS HEADER -->
                    <div class="card-head style-primary">
                        <header>Colaboradores del Contrato</header>
                        <div class="tools">
                            <button type="submit" id="searchLocal"
                                    class="btn btn-raised btn-floating-action btn-default-light"><i
                                        class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    <!--end .card-head -->
                    <!-- END SCHEDULE REQUIREMENTS HEADER -->
                    <!-- BEGIN SCHEDULE REQUIREMENTS WORKERS -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8 col-md-9 ">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            {!!Form::select('workerType', $workerType, null,
                                            array('id'=>'workerType','class' => 'form-control '))!!}
                                            {{--{!!Form::select('services', $services, null, array('id'=>'services','class' => 'form-control ','required'=>'required'))!!}--}}
                                            <label for="workerType" class="control-label">Tipo de Colaborador</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button id="add-workers"
                                                class="btn btn-raised btn-primary ink-reaction btn-block"
                                                type="button"
                                                workers=""
                                        @if(isset($contract))
                                                workable-days="{{($contract->monday==1?'monday,':'').
                                                        ($contract->tuesday==1?'tuesday,':'').
                                                        ($contract->wednesday==1?'wednesday,':'').
                                                        ($contract->thursday==1?'thursday,':'').
                                                        ($contract->friday==1?'friday,':'').
                                                        ($contract->saturday==1?'saturday,':'').
                                                        ($contract->sunday==1?'sunday,':'')}}"
                                                @endif>
                                                <span class="pull-left">
                                                    <i class="fa fa-plus"></i>
                                                </span>Colaboradores
                                        </button>
                                    </div>
                                    <div class="col-sm-2">
                                        <button href="#offcanvas-filter-contracts" data-toggle="offcanvas"
                                                type="button" class="btn btn-raised btn-primary ink-reaction btn-block">
                                                <span class="pull-left">
                                                    <i class="fa fa-search"></i>
                                                </span>Contratos
                                        </button>
                                    </div>
                                </div>
                                <br/>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <table id="requirements" class="table table-bordered table-hover ">
                                                <thead>
                                                <tr>
                                                    <th class="text-center" with="20px">
                                                        <div>
                                                            <a id="deleted-workers"
                                                               class="btn btn-floating-action btn-sm btn-primary-dark">
                                                                <i class="fa fa-minus"></i>
                                                            </a>
                                                        </div>
                                                    </th>
                                                    <th class="text-center" colspan="2">COLABORADOR</th>
                                                    <th class="text-center">LUNES</th>
                                                    <th class="text-center">MARTES</th>
                                                    <th class="text-center">MIERCOLES</th>
                                                    <th class="text-center">JUEVES</th>
                                                    <th class="text-center">VIERNES</th>
                                                    <th class="text-center">SABADO</th>
                                                    <th class="text-center">DOMINGO</th>
                                                    <th class="text-center"></th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
        jQuery(function () {


            $(".delete-row").live('click', function () {
                var i = 0;

                $(this).parent().parent().fadeTo(400, 0, function () {
                    $(this).remove();
                    $(".col-workers").each(function () {
                        i++;
                        $(this).html('');
                        $(this).append(i);
                    });
                });

                var row = $('#add-workers').attr('workers');
                row--;
                $('#add-workers').attr('workers', row);

                return false;
            });

            $("#deleted-workers").click(function () {
                $('#add-workers').attr('workers', '');
                $('tr[class^="workers-assignment"]').remove();
            });

            $("#btnSearchContracts").click(function () {
                var form = $('#form-filter-contracts');
                var valid = form.valid();
                if (!valid) {
                    form.data('validator').focusInvalid();
                    return false;
                }

                getContracts(0);
            });

            function getContracts(page) {
                $.ajax({
                    url: '/find-requirements-assignment?page=' + page,
                    data: {workplace_id: $('#workplaces').val(), service_id: $('#services').val()},
                    dataType: 'json'
                }).done(function (data) {
                    $('#list-contracts').html(data);
                    //location.hash = page;
                }).fail(function () {
                    alert('No se pudo cargar los contratos.');
                });
            }

            $("#add-workers").click(function () {
                var row = $('#add-workers').attr('workers');
                row++;
                $('#add-workers').attr('workers', row);
                addRow();

            });

            function addRow() {
                var days = $('#add-workers').attr('workable-days').split(',');
                var row = $('#add-workers').attr('workers');

                var html = '<tr class="workers-assignment text-center" ><td class="col-workers">' + row + '</td>' +
                        '<td class="worker-photo-' + row + '" style="border-right: 0px #FFF"><img class="img-circle width-1" src="{{asset('img/avatar2.jpg?')}}" alt="" /></td>' +
                        '<td class="text-left worker-name-' + row + '" style="border-left: 0px #FFF"><input type="hidden" name=workerTypes[] value="' + $("#workerType option:selected").val() +
                        '"><p class="text-info">' + $("#workerType option:selected").text();
                +'</p></td>';

                if ($.inArray('monday', days) > -1) {
                    html = html + '<td class="text-center"><div class="checkbox checkbox-styled"><label>' +
                    '<input type="checkbox" name="monday[]" value="' + row + '"><span><span></label></div></td>';
                } else {
                    html = html + '<td class="info text-center"></td>';
                }
                if ($.inArray('tuesday', days) > -1) {
                    html = html + '<td class="text-center"><div class="checkbox checkbox-styled"><label>' +
                    '<input type="checkbox" name="tuesday[]" value="' + row + '"><span><span></label></div></td>';
                } else {
                    html = html + '<td class="info text-center"></td>';
                }
                if ($.inArray('wednesday', days) > -1) {
                    html = html + '<td class="text-center"><div class="checkbox checkbox-styled">' +
                    '<label><input type="checkbox" name="wednesday[]" value="' + row + '"><span><span></label></div></td>';
                } else {
                    html = html + '<td class="info text-center"></td>';
                }
                if ($.inArray('thursday', days) > -1) {
                    html = html + '<td class="text-center"><div class="checkbox checkbox-styled">' +
                    '<label><input type="checkbox" name="thursday[]" value="' + row + '"><span><span></label></div></td>';
                } else {
                    html = html + '<td class="info text-center"></td>';
                }
                if ($.inArray('friday', days) > -1) {
                    html = html + '<td class="text-center"><div class="checkbox checkbox-styled">' +
                    '<label><input type="checkbox" name="friday[]" value="' + row + '"><span><span></label></div></td>';
                } else {
                    html = html + '<td class="info text-center"></td>';
                }
                if ($.inArray('saturday', days) > -1) {
                    html = html + '<td class="text-center"><div class="checkbox checkbox-styled">' +
                    '<label><input type="checkbox" name="saturday[]" value="' + row + '"><span><span></label></div></td>';
                } else {
                    html = html + '<td class="info text-center"></td>';
                }
                if ($.inArray('sunday', days) > -1) {
                    html = html + '<td class="text-center"><div class="checkbox checkbox-styled">' +
                    '<label><input type="checkbox" name="sunday[]" value="' + row + '"><span><span></label></div></td>';
                } else {
                    html = html + '<td class="info text-center"></td>';
                }

                html = html + '<td><button type="button" class="btn btn-icon-toggle delete-row" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button></td><tr>';

                $('#requirements tbody:last').append(html);

                $("body").tooltip({selector: '[data-toggle="tooltip"]'});

            }

            $("#btnSearchWorkers").click(function () {
                var form = $('#form-filter-backups');
                var valid = form.valid();
                if (!valid) {
                    form.data('validator').focusInvalid();
                    return false;
                }
                getWorkers(0);
            });

            $("#department").on("change", function (e) {
                $.getJSON('/find-province?data=' + this.value, function (opts) {
                    var province = $("#province");
                    province.find('option').remove();
                    $("#district").find('option').remove();
                    $.each(opts, function () {
                        province.append($("<option />").val(this.id).text(this.text));
                    });
                    //province.addClass('dirty');
                });
            });

            $("#province").on("change", function (e) {
                $.getJSON('/find-district?data=' + this.value, function (opts) {
                    var district = $("#district");
                    district.find('option').remove();
                    $.each(opts, function () {
                        district.append($("<option />").val(this.id).text(this.text));
                    });
                    //district.addClass('dirty');
                });
            });

            $("#enterprise").autocomplete({
                source: '/find-empresa',
                minLength: 3,
                dataType: 'json',
                focus: function (event, ui) {
                    return false;
                },
                select: function (event, ui) {
                    $.getJSON('/find-local?data=' + ui.item.id, function (opts) {
                        var workplaces = $("#workplaces");
                        workplaces.find('option').remove();
                        $.each(opts, function () {
                            workplaces.append($("<option />").val(this.id).text(this.text));
                        });
                    });
                }
            });
        });
    </script>
@stop
