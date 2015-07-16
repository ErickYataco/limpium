
        <div class="card">
            <div class="card-head style-primary">
                <header>Contrato</header>
                <div class="tools">
                    <button type="submit" id="crear" class="btn btn-floating-action btn-default-light"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="card-body ">
                <div id="rootwizard2" class="form-wizard form-wizard-horizontal">
                    <div class="form-wizard-nav">
                        <div class="progress"><div class="progress-bar progress-bar-primary"></div></div>
                        <ul class="nav nav-justified">
                            <li class="active"><a href="#step1" data-toggle="tab"><span class="step">1</span> <span class="title">EMPRESA</span></a></li>
                            <li><a href="#step2" data-toggle="tab"><span class="step">2</span> <span class="title">REQUERIMIENTOS</span></a></li>
                        </ul>
                    </div><!--end .form-wizard-nav -->
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="step1">
                            <br/><br/>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        {!! Form::text('name', null, array('id' => 'name','class' => 'form-control input-sm', 'data-rule-minlength' => '2', 'required')) !!}
                                        <input type="hidden" name="enterprise_id" id="enterprise_id" value="">
                                        <label for="enterprise" class="control-label">Empresa</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-control " name="workplaces" id="workplaces" >
                                        </div>
                                        <input type="hidden" name="workplace_id" id="workplace_id" value="">
                                        <label for="workplaces" class="control-label">Local</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        {!! Form::text('contact', null, array('id' => 'contact','class' => 'form-control', 'data-rule-minlength' => '2', 'required')) !!}
                                        <label for="contact" class="control-label">Contacto</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        {!! Form::text('mobile_phone', null, array('id' => 'mobile_phone','class' => 'form-control', 'data-inputmask' => "'mask': '(99) (9) 999-999-999'", 'required')) !!}
                                        <label for="mobile_phone" class="control-label">Telefono fijo contacto</label>
                                        <p class="help-block">Ejemplo: (51) (1) 987-654-321</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        {!! Form::text('office_phone', null, array('id' => 'office_phone','class' => 'form-control', 'data-inputmask' => "'mask': '(99) 999-9999'", 'required')) !!}
                                        <label for="office_phone" class="control-label">Telefono Movil contacto</label>
                                        <p class="help-block">Ejemplo: (064) 765-4321</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        {!! Form::email('email_contact', null, array('id' => 'email_contact', 'class' => 'form-control', 'data-rule-email' => 'true', 'required')) !!}
                                        <label for="email_contact" class="control-label">Email contacto</label>
                                    </div>
                                </div>
                            </div>
                        </div><!--end #step1 -->
                        <div class="tab-pane" id="step2">
                            <br/><br/>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id='startContract' name="startContract" data-rule-date="true" data-inputmask="'mask': 'd/m/y'" required>
                                        <label for="startContract" class="control-label">Inicio de Requerimiento </label>
                                        <p class="help-block">Formato: d/m/y</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id='endContract' name="endContract" data-rule-date="true" data-inputmask="'mask': 'd/m/y'" required>
                                        <label for="endContract" class="control-label">Fin de Requerimiento</label>
                                        <p class="help-block">Formato: d/m/y</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::text('numberPersons', null, array('maxlength'=>'2','id'=>'numberPersons','class' => 'form-control','required')) !!}
                                        <label for="numberPersons" class="control-label">Numero de Personas</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!!Form::select('services', $services, null, array('id'=>'services','class' => 'form-control select2-list'))!!}
                                        <input type="hidden" name="service_id" id="service_id" value="">
                                        <label>Tipo de Servicio</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::text('startWork', null, array('id'=>'startWork','class' => 'form-control time12-mask','required')) !!}
                                        <label for="startWork" class="control-label">Hora de Ingreso</label>
                                        <p class="help-block">Time: am/pm</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::text('endWork', null, array('id'=>'endWork','class' => 'form-control time12-mask','required')) !!}
                                        <label for="endWork" class="control-label">Hora de Salida</label>
                                        <p class="help-block">Time: am/pm</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::text('startLunch', null, array('id'=>'startLunch','class' => 'form-control time12-mask','required')) !!}
                                        <label for="startLunch" class="control-label">Inicio de Refrigerio</label>
                                        <p class="help-block">Time: am/pm</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::text('endLunch', null, array('id'=>'endLunch','class' => 'form-control time12-mask','required')) !!}
                                        <label style="border: none; border-color: transparent" for="endLunch" class="control-label">Fin de Refrigerio</label>
                                        <p class="help-block">Time: am/pm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-styled">
                                            <label>
                                                <input id="monday" type="checkbox" name="monday">
                                                <span>Lunes</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-styled">
                                            <label>
                                                <input id="tuesday" type="checkbox" name="tuesday">
                                                <span>Martes</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-styled">
                                            <label>
                                                <input id="wednesday" type="checkbox" name="wednesday">
                                                <span>Miercoles</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-styled">
                                            <label>
                                                <input id="thursday" type="checkbox" name="thursday">
                                                <span>Jueves</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-styled">
                                            <label>
                                                <input id="friday" type="checkbox" name="friday">
                                                <span>Viernes</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-styled">
                                            <label>
                                                <input id="saturday" type="checkbox" name="saturday">
                                                <span>Sabado</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <div class="checkbox checkbox-styled">
                                            <label>
                                                <input id="sunday" type="checkbox" name="sunday" >
                                                <span>Domingo</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2">
                                    <button type="button" id="btnAddTable" class="btn btn-raised btn-primary ink-reaction btn-block">
                                                        <span class="pull-left">
                                                            <i class="fa fa-plus"></i>
                                                        </span> Requirimientos
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <br/>
                                <table id="requirements" class="table table-bordered table-hover ">
                                    <thead class="style-accent-dark">
                                    <tr >
                                        <th>#</th>
                                        <th>Vigencia</th>
                                        <th>Dias</th>
                                        <th>Horario</th>
                                        <th>Refrigerio</th>
                                        <th>Servicio</th>
                                        <th class="text-center" width="20px" ></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div><!--end #step2 -->
                    </div><!--end .tab-content -->
                    <ul class="pager wizard">
                        <li class="previous first"><a class="btn-raised" href="javascript:void(0);">Primero</a></li>
                        <li class="previous"><a class="btn-raised" href="javascript:void(0);">Previo</a></li>
                        <li class="next last"><a class="btn-raised" href="javascript:void(0);">Ultimo</a></li>
                        <li class="next"><a class="btn-raised" href="javascript:void(0);">Siguiente</a></li>
                    </ul>
                </div><!--end #rootwizard -->
            </div><!--end .card-body -->
        </div><!--end .card -->
        <em class="text-caption">Contratos</em>