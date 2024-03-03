<div class="container my-5">
    <div class="row py-3">
        <div class="col-md-4">
            <img src="{{ asset('img/flora.jpg') }}" class="img-hero rounded-circle"
                style="width: 100%; display: block; box-shadow: none;" alt="Flora Image">
        </div>
        <div class="col-md-8">
            <h2 class="section-title mb-4">Tentang Kami</h2>
            <p class="lead">Selamat datang di <strong>[{{config('app.name')}}]</strong> – sebuah perusahaan yang berdedikasi pada seni dan keindahan lanskap. Kami memimpin industri floraskape dengan inovasi, kreativitas, dan komitmen terhadap kepuasan pelanggan.</p>
            <p>Tim kami yang berpengalaman tidak hanya ahli dalam merancang taman yang menakjubkan, tetapi juga memahami nilai-nilai keberlanjutan dan keindahan alam.</p>
            <p>Kami bangga dengan kualitas pekerjaan kami dan berusaha untuk melebihi harapan setiap klien.</p>
            <p>Berlokasi di <em>[Lokasi Anda]</em>, kami menciptakan ruang terbuka yang memukau, berfungsional, dan ramah lingkungan. Hubungi kami hari ini untuk menciptakan keindahan bersama-sama!</p>
        </div>
    </div>
</div>

<style>
    .img-hero {
        border: 8px solid #fff;
        /* Border added for a cleaner look */
    }

    .section-title {
        color: #007BFF;
    }

    p.lead {
        font-size: 1.25rem;
    }
</style>
