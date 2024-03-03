<div class="container my-5">
    <img src="{{$item->file_url}}" class="w-100 mb-3" alt="">
    <h2 class="blog-post-title">{{$item->judul}}</h2>
    <p>
        {{$item->ringkasan}}
    </p>
    <div>
        {!! nl2br($item->isi) !!}
    </div>
</div>
