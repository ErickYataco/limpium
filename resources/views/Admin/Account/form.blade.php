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
                    {!! Form::text('name', null, array('id' => 'enterprise','class' => 'form-control input-sm', 'data-rule-minlength' => '5', 'required')) !!}
                    <input type="hidden" name="enterprise_id" id="enterprise_id" value="">
                    <label for="enterprise" class="control-label">Empresa</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::text('ruc', null, array('id' => 'ruc','class' => 'form-control input-sm','data-inputmask' => '"mask": "99999999999"', 'data-rule-minlength' => '11', 'required')) !!}
                    <label for="ruc" class="control-label">RUC</label>
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
                    <label for="mobile_phone" class="control-label">Telefono Movil contacto</label>
                    <p class="help-block">Ejemplo: (51) (1) 987-654-321</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::text('office_phone', null, array('id' => 'office_phone','class' => 'form-control', 'data-inputmask' => "'mask': '(99) 999-9999'", 'required')) !!}
                    <label for="office_phone" class="control-label">Telefono Fijo contacto</label>
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
    </div><!--end .card-body -->
</div><!--end .card -->
<em class="text-caption">Cuentas</em>