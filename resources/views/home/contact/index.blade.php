<div class="container my-5">
    <div class="text-center">
        <h4 class="mb-4">CONTACT</h4>
        <p>Berikan Saran Dan Pemasukan Kepada Kami</p>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header text-center">
                    Form Saran
                </div>
                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-primary">
                            {{ session('success') }}
                        </div>
                    @endif
                    {!! Form::open([
                        'route' => 'front.contact.store',
                        'method' => 'POST',
                        'enctype' => 'multipart/form-data',
                        'id' => 'form-contact',
                        'class' => 'row g-3',
                    ]) !!}
                        <div class="col-md-12">
                            <label class="form-label">Nama</label>
                            {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Telepon</label>
                            {!! Form::text('telepon', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Alamat</label>
                            {!! Form::textarea('alamat', null, ['class' => 'form-control', 'rows' => 3]) !!}
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Saran</label>
                            {!! Form::textarea('saran', null, ['class' => 'form-control', 'rows' => 3]) !!}
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
