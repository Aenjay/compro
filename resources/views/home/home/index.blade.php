<style>
    /* Global styles */
    body,
    h1,
    h2,
    h3,
    p {
        margin: 0;
        padding: 0;
    }

    /* Your existing styles here */

    /* Fade-in animation */
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out;
    }

    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .wrapper-img-banner {
        width: 100%;
        max-height: 500px;
        overflow: hidden;
    }

    .img-banner {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .carousel-inner {
        position: relative;
    }

    .container.int-20 {
        margin-top: 50px;
        /* Sesuaikan jarak di atas elemen About */
    }

    /* Menurunkan tulisan "About" sedikit */
    .container.int-20 h4 {
        margin-bottom: 5px;
        /* Sesuaikan jarak di bawah tulisan "About" */
    }

    .wrapper-card-blog {
        position: relative;
        width: 100%;
        height: 150px;
        /* Adjusted height to make the image smaller */
        overflow: hidden;
        background-position: center top;
        /* Menampilkan bagian atas gambar tanpa potongan ke bawah */
        background-size: cover;
        transition: transform 0.3s ease-in-out;
    }

    .wrapper-card-blog img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card {
        border: none;
        /* Menghapus border default kartu */
        position: relative;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Box shadow added */
    }

    .card:hover .wrapper-card-blog {
        transform: scale(1.05);
        /* Scale up on hover */
    }

    .text-below {
        text-align: center;
        padding: 10px;
        font-weight: bold;
        color: blue;
        opacity: 0;
        transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
    }

    .card:hover .text-below {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<div id="myCarousel" class="carousel slide mb-6 fade-in" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="wrapper-img-banner">
                <img src="{{ asset('img/banner.jpg') }}" class="img-banner" alt="">
            </div>
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>{{ config('app.name') }}</h1>
                </div>
            </div>
        </div>
        <!-- Add more carousel items as needed -->
    </div>
</div>

<div class="container int-20 fade-in">
    <!-- About section -->
    <div class="text-center mb-4">
        <h4 class="mb-2">ABOUT</h4>
        <h5>apa anda tahu kami? kami akan beritahu anda</h5>
    </div>

    <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="/img/flora.jpg" width="100%" alt="" class="w-50 h-100 bg-danger ">
        </div>
        <div class="col-md-6">
            <div class="h-100 d-flex flex-column justify-content-center gap-2" style="text-align: justify;">
                <p>
                    <strong>Nama Perusahaan</strong>: {{ config('app.name') }}
                </p>
                <p>
                    <strong>Tentang Kami</strong>:
                    {{ config('app.name') }} adalah perusahaan tanaman yang menghadirkan keindahan alam ke dalam
                    ruang hidup Anda. Kami berkomitmen untuk menyediakan tanaman hias berkualitas tinggi, memperkaya
                    lingkungan sekitar, dan menciptakan ruang yang penuh inspirasi.
                </p>
                <p>
                    <strong>Misi Kami</strong>:
                    Membawa kehidupan melalui tanaman, {{ config('app.name') }} berusaha menciptakan pengalaman
                    taman yang mudah diakses untuk semua orang. Dengan koleksi tanaman yang unik dan layanan yang
                    ramah lingkungan, kami ingin memperkaya setiap sudut hidup Anda.
                    Bergabunglah dengan {{ config('app.name') }} - Memperindah Ruang Hidup, Satu Tanaman pada Waktu.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="bg-success my-5 fade-in">
    <div class="container py-5">
        <!-- Content with green background -->
        <div class="text-white">
            <!-- Isi konten yang ingin ditampilkan di dalam div ini -->
        </div>
        <h5 class="text-white">Pelajari lagi tentang kami</h5>
        <p class="text-white"> {{ config('app.name') }} adalah perusahaan yang berkomitmen untuk membawa keindahan
            tanaman ke dalam kehidupan sehari-hari Anda. Kami menawarkan tanaman hias berkualitas tinggi untuk
            mempercantik ruang hidup dan memberikan nuansa alam yang menyegarkan.</p>
    </div>
</div>

<div class="container my-20 fade-in">
    <div class="text-center mb-5">
        <h4 class="">SERVICES</h4>
        <p>Apa yang kami tawarkan? Temukan di bawah ini.</p>
    </div>
    <div class="row fade-in">
        <!-- Services loop -->
        @foreach ($getService_home as $item)
            <div class="col-md-3">
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
    <div class="text-center mt-5 fade-in">
        <a href="{{route('front.service.index')}}" class="btn btn-success">Selengkapnya <i class="fas fa-arrow-right"></i></a>
    </div>
</div>


<div class="bg-light my-5 fade-in" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <div class="container py-5">
        <!-- Content with light background -->
        <div class="text-dark">
            <!-- Isi konten yang ingin ditampilkan di dalam div ini -->
        </div>
        <h5 class="text-dark text-center">Pelajari lagi tentang kami</h5>
        <p class="text-dark text-center"> {{ config('app.name') }} bukan hanya sekadar toko tanaman, tapi juga
            teman perjalanan Anda dalam menciptakan ruang hijau di sekitar Anda. Bergabunglah dengan kami untuk
            merayakan kehidupan melalui kehadiran tanaman, menjadikan setiap sudut rumah Anda sebagai bagian dari
            keindahan alam.</p>
    </div>
</div>


<div class="container my-2 fade-in">
    <div class="text-center mb-3">
        <h4 class="">BLOG</h4>
        <p>Apa saja kabar hari ini? Kami akan beritahu Anda.</p>
    </div>

    <div class="row">
        @foreach ($getBlog_home as $item)
            <div class="col-md-3 h-100">
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
    
    <div class="text-center mt-5 fade-in">
        <a href="{{route('front.blog.index')}}" class="btn btn-success">Selengkapnya <i
                class="fas fa-arrow-right"></i></a>
    </div>
</div>

</div>

<div class="bg-success my-5 fade-in">
    <div class="container py-5">
        <!-- Another section with green background -->
        <div class="text-white">
            <!-- Isi konten yang ingin ditampilkan di dalam div ini -->
        </div>
        <h5 class="text-white">Pelajari lagi tentang kami</h5>
        <p class="text-white"> Dengan fokus pada keberlanjutan dan kelestarian lingkungan, kami menyediakan beragam
            tanaman yang ramah lingkungan dan mudah perawatannya. Misi kami adalah menciptakan pengalaman taman yang
            dapat diakses oleh semua orang, tanpa mengorbankan nilai-nilai keindahan dan kualitas</p>
    </div>
</div>

<div class="container my-4 fade-in">
    <div class="text-center">
        <h4 class="">Hubungi Kami</h4>
        <p>Anda dapat bertanya langsung kepada kami</p>
        <a href="https://api.whatsapp.com/send?phone=081210400797" class="btn btn-success mt-3" target="_blank">
            <i class="fas fa-phone"></i> Hubungi Kami di WhatsApp
        </a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const elements = document.querySelectorAll('.fade-in');

        function checkVisibility() {
            elements.forEach(element => {
                const rect = element.getBoundingClientRect();
                const isVisible = (rect.top <= window.innerHeight && rect.bottom >= 0);
                if (isVisible) {
                    element.classList.add('visible');
                }
            });
        }

        // Initial check
        checkVisibility();

        // Check visibility on scroll
        window.addEventListener('scroll', checkVisibility);
    });
</script>
