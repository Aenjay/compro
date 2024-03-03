@extends('admin.layouts.app')
@section('title', $titlePage)
@section('content')
<div>
    <div class="mb-2 d-flex align-items-center justify-content-between">
        <h2>{{ $titlePage }}</h2>
    </div>
    <div class="card mb-4 border-0">
        <div class="card-body ">
            Selamat Datang di {{config('app.name')}} Panel
        </div>
    </div>
</div>
@endsection