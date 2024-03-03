<div class="row mb-3">
    <label class="col-md-4 col-form-label">Nama</label>
    <div class="col-md-8">
        {!! Form::text('nama', null, ['class' => 'form-control', 'autofocus' => true]) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-4 col-form-label">Deskripsi</label>
    <div class="col-md-8">
        {!! Form::textarea('deskripsi', null, ['class' => 'form-control', "rows" => 3]) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-4 col-form-label">Foto</label>
    <div class="col-md-8">
        {!! Form::file("file", ["class" => "form-control", "accept" => "image/*"]) !!}
    </div>
</div>