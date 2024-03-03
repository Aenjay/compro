<div class="container my-5">
    <div class="text-center">
        <h4 class="">BLOG</h4>
        <p>Apa saja kabar hari ini? Kami akan beritahu Anda.</p>
    </div>

    <div class="row fade-in">
        @foreach ($getBlog as $item)
            <div class="col-md-3 h-100 mb-4">
                <div class="card">
                    <img src="{{$item->file_url}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->judul}}</h5>
                        <p class="card-text">{{$item->ringkasan}}</p>
                        <a href="{{route('front.blog.show', $item->id)}}" class="btn btn-primary mt-3">Lihat</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
