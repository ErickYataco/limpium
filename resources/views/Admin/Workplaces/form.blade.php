<div class="card">
    <div class="card-head style-primary">
        <header>Local</header>
        <div class="tools">
            <button type="submit" id="crear" class="btn btn-floating-action btn-default-light"><i class="fa fa-plus"></i></button>
        </div>
    </div>
    <div class="card-body ">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::text('enterprise', null, array('id' => 'enterprise','class' => 'form-control input-sm', 'data-rule-minlength' => '5', 'required')) !!}
                    <input type="hidden" name="account_id" id="account_id" value="">
                    <label for="enterprise" class="control-label">Empresa</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::text('local', null, array('id' => 'local','class' => 'form-control', 'data-rule-minlength' => '5', 'required')) !!}
                    <label for="local" class="control-label">Local</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    {!!Form::select('department', $departments, null, array('id'=>'department','class' => 'form-control ','required'=>'required'))!!}
                    <input type="hidden" name="department_text" id="department_text" value="">
                    <label for="deparment" class="control-label">Departameto</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <select id="province" class="form-control" name="province" required></select>
                    <input type="hidden" name="province_text" id="province_text" value="">
                    <label for="province" class="control-label">Provincia</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <select id="district" class="form-control" name="district" required></select>
                    <input type="hidden" name="district_text" id="district_text" value="">
                    <label for="district" class="control-label">Distrito</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::text('address', null, array('id' => 'address','class' => 'form-control','data-rule-minlength' => '10' , 'required')) !!}
                    <label for="address" class="control-label">Direccion</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::text('reference', null, array('id' => 'reference','class' => 'form-control', 'data-rule-minlength' => '10', 'required')) !!}
                    <label for="reference" class="control-label">Referencia</label>
                </div>
            </div>
        </div>
    </div><!--end .card-body -->
</div><!--end .card -->
<em class="text-caption">Centros laborales</em>