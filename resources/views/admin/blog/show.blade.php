@extends('admin.layouts.app')
@section('title', $titlePage)
@section('content')
    <div class="card shadow-sm">
        <div class="card-header border-bottom py-3 d-md-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Detail {{ $titlePage }}</h5>
            <div class="mt-2 mt-md-0 d-flex flex-column flex-sm-row gap-2">
                <a href="{{ route("$route.index") }}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
        <div class="card-body pt-4">
            <div class="row">
                <div class="col-md-8">
                    <p class="small text-uppercase text-muted">Details</p>
                    <div class="mb-2 row">
                        <div class="col-sm-3">
                            <label class="col-form-label">Judul</label>
                        </div>
                        <label class="col-sm-9 col-form-label font-medium-1">{{ $item->judul }}</label>
                    </div>
                    <div class="mb-2 row">
                        <div class="col-sm-3">
                            <label class="col-form-label">Ringkasan</label>
                        </div>
                        <label class="col-sm-9 col-form-label font-medium-1">{!! nl2br($item->ringkasan) !!}</label>
                    </div>
                    <div class="mb-2 row">
                        <div class="col-sm-3">
                            <label class="col-form-label">Isi</label>
                        </div>
                        <label class="col-sm-9 col-form-label font-medium-1">{!! nl2br($item->isi) !!}</label>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column gap-3">
                    <div>
                        <p class="small text-uppercase text-muted">Foto</p>
                        <img class="card-img-top" src="{{ $item->file_url }}" alt="Card image cap">
                    </div>
                    <div>
                        <p class="small text-uppercase text-muted">Action Time</p>
                        <ul class="list-unstyled card shadow-none border p-3">
                            <li class="mb-2">
                                <span class="fw-medium me-1">Created By:</span>
                                <span>{{ $item->created_by_user->name ?? '-' }}</span>
                            </li>
                            <li class="mb-2 pt-1">
                                <span class="fw-medium me-1">Created At:</span>
                                <span>{{ $item->created_at }}</span>
                            </li>
                            <li class="mb-2">
                                <span class="fw-medium me-1">Updated By:</span>
                                <span>{{ $item->updated_by_user->name ?? '-' }}</span>
                            </li>
                            <li class="mb-2 pt-1">
                                <span class="fw-medium me-1">Updated At:</span>
                                <span>{{ $item->updated_at }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/libs/plyr/plyr.css" />
@endpush
@push('script')
    <script src="{{ asset('/') }}assets/vendor/libs/plyr/plyr.js"></script>
    <script>
        $(document).ready(function() {
            if ($(".file-video").length > 0) {
                const audioPlayer = new Plyr('#plyr-video-player');
            }
        });
    </script>
@endpush
