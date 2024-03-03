@extends('admin.layouts.app')
@section('title', $titlePage)
@section('content')
<div class="row">
    <div class="col-md-7">
        <div class="card shadow-sm">
            <div class="card-header border-bottom py-3 d-md-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Edit {{$titlePage}}</h5>
                <div class="mt-2 mt-md-0">
                    <a href="{{route("$route.index")}}" class="btn btn-sm btn-secondary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body pt-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-sm-12">
                    {!! Form::model($item, ['route' => [$route.".update", $item->id], 'method' => 'PUT','class' => 'form form-horizontal','enctype' => 'multipart/form-data']) !!}
                        {!! Form::hidden("id", null) !!}
                        @include("admin.".$route.".form")
                        <div class="row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary"><i class="ti ti-device-floppy"></i> Save</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
@endpush
@push('script')
    <script>
        $(document).ready(function() {
        });
    </script>
@endpush