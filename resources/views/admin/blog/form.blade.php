<div class="row mb-3">
    <label class="col-md-4 col-form-label">Judul</label>
    <div class="col-md-8">
        {!! Form::text('judul', null, ['class' => 'form-control', 'autofocus' => true]) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-4 col-form-label">Ringkasan</label>
    <div class="col-md-8">
        {!! Form::textarea('ringkasan', null, ['class' => 'form-control', "rows" => 3]) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-4 col-form-label">Isi</label>
    <div class="col-md-8">
        {!! Form::textarea('isi', null, ['class' => 'form-control', "rows" => 5]) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-md-4 col-form-label">Foto</label>
    <div class="col-md-8">
        {!! Form::file("file", ["class" => "form-control", "accept" => "image/*"]) !!}
    </div>
</div>