@extends('layouts.master')
@section('title','Control Personal')
@section('content')
    <!-- BEGIN CONTENT-->
    <div id="content">
        <section>
            <div class="section-header">
                <ol class="breadcrumb">
                    <li class="active">Seguimiento Operarios</li>
                </ol>
            </div>
            <div class="section-body">
                <div class="row">

                    <!-- BEGIN BASIC MAP -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div id="map-canvas" class="border-gray height-full"></div>
                            </div>
                        </div><!--end .card -->
                        <em class="text-caption">Basic map</em>
                    </div><!--end .col -->
                    <!-- END BASIC MAP -->
                    <div class="gmap-control-container" id="legend">
                        <div class="gmap-control">
                            <h3>Leyenda</h3>
                            <ul>
                                <li><img src="../img/maps/sunny.png"/><span >Todo el personal en base</span></li>
                                <li><img src="../img/maps/cloudy.png"/><span>Falta una persona</span></li>
                                <li><img src="../img/maps/thunderstorm.png"/><span >Hay mas de 2 personas faltantes</span></li>
                            </ul>
                            <br/>

                        </div>
                        <div  class="col-xs-6 text-right">
                            <br/>
                            <br/>
                            <button class="btn btn-primary btn-raised" data-toggle="modal" data-target="#formModal">Busqueda</button>
                        </div><!--end .col -->
                    </div>

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
                                                                <optgroup label="San Borja">
                                                                    <option value="AZ">Sencosud</option>
                                                                    <option value="CO">Cerro Verde</option>
                                                                    <option value="ID">Sodexo</option>
                                                                    <option value="MT">BCP</option><option value="NE">Nebraska</option>
                                                                    <option value="NM">Interbank</option>
                                                                    <option value="ND">Petroleum</option>
                                                                    <option value="UT">Bumeran</option>
                                                                    <option value="WY">Peralta SAC</option>
                                                                </optgroup>
                                                                <optgroup label="Central Time Zone">
                                                                    <option value="AL">Alabama</option>
                                                                    <option value="AR">Arkansas</option>
                                                                    <option value="IL">Illinois</option>
                                                                    <option value="IA">Iowa</option>
                                                                    <option value="KS">Kansas</option>
                                                                    <option value="KY">Kentucky</option>
                                                                    <option value="LA">Louisiana</option>
                                                                    <option value="MN">Minnesota</option>
                                                                    <option value="MS">Mississippi</option>
                                                                    <option value="MO">Missouri</option>
                                                                    <option value="OK">Oklahoma</option>
                                                                    <option value="SD">South Dakota</option>
                                                                    <option value="TX">Texas</option>
                                                                    <option value="TN">Tennessee</option>
                                                                    <option value="WI">Wisconsin</option>
                                                                </optgroup>
                                                                <optgroup label="Eastern Time Zone">
                                                                    <option value="CT">Connecticut</option>
                                                                    <option value="DE">Delaware</option>
                                                                    <option value="FL">Florida</option>
                                                                    <option value="GA">Georgia</option>
                                                                    <option value="IN">Indiana</option>
                                                                    <option value="ME">Maine</option>
                                                                    <option value="MD">Maryland</option>
                                                                    <option value="MA">Massachusetts</option>
                                                                    <option value="MI">Michigan</option>
                                                                    <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                                                                    <option value="NY">New York</option>
                                                                    <option value="NC">North Carolina</option>
                                                                    <option value="OH">Ohio</option>
                                                                    <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                                                                    <option value="VT">Vermont</option><option value="VA">Virginia</option>
                                                                    <option value="WV">West Virginia</option>
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


                </div><!--end .row -->
            </div><!--end .section-body -->
        </section>
    </div><!--end #content-->
    <!-- END CONTENT -->
@stop
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script src="../js/mapa.js"></script>
<script src="../js/libs/gmaps/gmaps.js"></script>
