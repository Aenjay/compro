<div class="container my-5">
    <div class="text-center">
        <h4 class="">SERVICES</h4>
        <p>Apa yang kami tawarkan? Temukan di bawah ini.</p>
    </div>
    <div class="row mt-5">
        @foreach ($getService as $item)
            <div class="col-md-3 my-3">
                <div class="text-center">
                    <div class="d-flex flex-column gap-2 align-items-center">
                        <img src="{{$item->file_url}}" width="100" alt="">
                        <h5><b>{{$item->nama}}</b></h5>
                    </div>
                    <p>{{$item->deskripsi}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
