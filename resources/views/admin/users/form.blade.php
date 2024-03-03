<div class="row mb-3">
    <label class="col-md-4 col-form-label">Nama</label>
    <div class="col-md-8">
        {!! Form::text('name', null, ['class' => 'form-control', 'autofocus' => true]) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-4 col-form-label">Email</label>
    <div class="col-md-8">
        {!! Form::email("email", null, ["class" => "form-control"]) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-4 col-form-label">Password</label>
    <div class="col-md-8">
        {!! Form::password("password", ["class" =>"form-control"]) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-4 col-form-label">Role</label>
    <div class="col-md-8">
        {!! Form::select("role", $listRole, null, ["class" => "form-control"]) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-4 col-form-label">Foto</label>
    <div class="col-md-8">
        {!! Form::file("file", ["class" => "form-control", "accept" => "image/*"]) !!}
    </div>
</div>