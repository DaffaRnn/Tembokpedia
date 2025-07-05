<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Tentang --}}
    <section class="container-fluid">
        <div class="tentang-st py-5 mx-3 rounded-4 shadow">
            <div class="row">
                
                <div class="col-lg-6 col-md-6 col-sm-12 flex-grow-1 d-flex justify-content-center">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="width: 600px;">
                        <div class="carousel-inner">
                            <div class="carousel-item active px-3">
                                <img src="{{ asset('img/img1.jpg') }}" class="d-block w-100 rounded-5" alt="..." style="height: 400px; object-fit: cover;">
                            </div>
                            <div class="carousel-item px-3">
                                <img src="{{ asset('img/img2.jpg') }}" class="d-block w-100 rounded-5" alt="..." style="height: 400px; object-fit: cover;">
                            </div>
                            <div class="carousel-item px-3">
                                <img src="{{ asset('img/img3.jpg') }}" class="d-block w-100 rounded-5" alt="..." style="height: 400px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
                        
                    <div id="desc" class="col-lg-6 col-md-6 col-sm-12 flex-grow-1 text-center">
                        <h1 class="mb-4">Tentang <span style="color: #1630c4;">Tembokpedia</span></h1>
                        <p class="mx-3" style="text-align: justify">
                            <b class="text-dark">#Tembokpedia</b> adalah gerakan kerelawanan yang mengajak sebuah pihak untuk terlibat aktif dalam membentuk karakter baik anak usia sekolah dasar di seluruh Indonesia. Selama satu tahun, para relawan diajak untuk menggambar dan mewarnai tembok kampung bersama anak-anak tentang sebuah pesan baik yang sesuai dengan konteks sosial dimana tempat anak tinggal.
                            <span class="my-1"></span>
                            Tembokpedia percaya bahwa kemajuan pendidikan Indonesia salah satunya ditandai dengan baiknya karakter anak Indonesia. Proses pembentukan karakter baik ini tentu tidak bisa diselesaikan oleh pihak sekolah atau pemerintah semata, namun memerlukan juga keterlibatan orang tua, pemuda, aparat desa, pegawai kelurahan hingga masyarakat luas pada umumnya. Oleh karena itu siapa saja bisa terlibat dalam gerakan Tembokpedia, siapa saja bisa ikut tanamkan pesan baik kepada anak-anak Indonesia.
                        </p>
                    </div>
        
            </div>
        </div>
    </section>
    {{--Akhir Tentang --}}

    {{-- Tentang Visi & Misi --}}
    <section class="container-fluid">
        <div class="tentang py-5 mx-3 rounded-4 shadow">
            <div class="beranda-aktivitas">

                {{-- <div class="text-center mb-5">
                    <h1 class="mb-4">Aktivitas Kami</h1>
                </div> --}}

                <div class="row justify-content-evenly mx-3">
        
                    <div class="col-lg-6 col-md-6 col-sm-12 my-3">
                        <div class="card icon-active p-4 rounded-5 shadow">
                            
                            <!-- Bagian Ikon + Judul -->
                            <div class="mb-3 d-flex justify-content-start align-items-center">
                                <div class="icon-wrapper me-2" 
                                    style="background-color: #FEF9C3; color: #FACC15; width: 50px; height: 50px;">
                                    <i class='bxr bx-bookmark fs-4'></i>
                                </div>
                                <h5 class="card-title m-0">Visi</h5>
                            </div>

                            <!-- Garis -->
                            <hr class="mx-0">

                            <!-- Isi Card -->
                            <div class="card-body pt-2">
                                <p style="text-align: justify">Menjadi komunitas seni dan edukasi yang berperan aktif dalam mencerdaskan kehidupan bangsa melalui pengembangan kreativitas anak usia dini dan pemberdayaan generasi muda melalui seni lukis mural yang inspiratif dan edukatif.</p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 my-3">
                        <div class="card icon-active p-4 rounded-5 shadow">
                            
                            <!-- Bagian Ikon + Judul -->
                            <div class="mb-3 d-flex justify-content-start align-items-center">
                                <div class="icon-wrapper me-2" 
                                    style="background-color: #CFFAFE; color: #06B6D4; width: 50px; height: 50px;">
                                    <i class='bxr bx-hourglass fs-4'></i>
                                </div>
                                <h5 class="card-title m-0">Misi</h5>
                            </div>

                            <!-- Garis -->
                            <hr class="mx-0">

                            <!-- Isi Card -->
                            <div class="card-body pt-2">
                                <p style="text-align: justify">Berkontribusi dalam peningkatan kualitas pendidikan dasar melalui pendekatan kreatif dan edukatif berbasis seni lukis mural yang dirancang khusus untuk anak-anak sekolah dasar atau sebaya sebagai upaya menumbuhkan minat belajar dan daya imajinasi.</p>
                            </div>
                            
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
    </section>
    {{-- Akhir Tentang Visi & Misi --}}

    {{-- Tentang 8 Sikap Dasar --}}
    <section class="container-fluid">
        <div class="beranda py-5 mx-3 rounded-4 shadow">
            <div class="beranda-aktivitas">

                <div class="text-center mb-5">
                    <h1 class="mb-4"><span class="span">8</span> Sikap Dasar</h1>
                </div>

                <div class="row justify-content-evenly mx-3" style="text-align: justify">
        
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3 d-flex">
                            <div class="card icon-active p-4 rounded-5 shadow h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Suka Rela</h5>
                                    <hr>
                                    <p class="card-text">Semua pihak yang terlibat mengikuti kegiatan ini dengan penuh kerelaan hati. Mereka terlibat tanpa paksaan dan semua pendanaan kegiatan berasal dari iuran pihak yang terlibat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3 d-flex">
                            <div class="card icon-active p-4 rounded-5 shadow h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Antusias</h5>
                                    <hr>
                                    <p class="card-text">Semua pihak bersemangat dalam melaksanakan setiap proses kegiatan. Saling memberikan narasi positif dan optimisme akan keberhasilan kegiatan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3 d-flex">
                            <div class="card icon-active p-4 rounded-5 shadow h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Siap Silaturahmi</h5>
                                    <hr>
                                    <p class="card-text">Terbuka untuk silaturahmi kepada anak-anak, relawan maupun masyarakat, serta bersedia membangun rasa kedekatan dengan komunikasi yang baik.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3 d-flex">
                            <div class="card icon-active p-4 rounded-5 shadow h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Kreatif</h5>
                                    <hr>
                                    <p class="card-text">Semua pihak bersikap kreatif dalam memanfaatkan sumber daya yang ada untuk mencapai tujuan kegiatan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3 d-flex">
                            <div class="card icon-active p-4 rounded-5 shadow h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Siap Bekerja Sama</h5>
                                    <hr>
                                    <p class="card-text">Setiap relawan saling menghargai dan saling terbuka dengan peran dan tanggung jawab masing-masing. Tidak sungkan untuk meminta bantuan dan siap membantu sesama relawan demi kesuksesan kegiatan. Bersikap solutif dan kontributif dalam penyelesaian tantangan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3 d-flex">
                            <div class="card icon-active p-4 rounded-5 shadow h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Bertanggung Jawab</h5>
                                    <hr>
                                    <p class="card-text">Semua pihak memiliki komitmen untuk menjalankan peran dan tugas yang sudah diberikan dari awal hingga akhir kegiatan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3 d-flex">
                            <div class="card icon-active p-4 rounded-5 shadow h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Tulus</h5>
                                    <hr>
                                    <p class="card-text">Semua pihak percaya bahwa ini bukan hanya tentang diri relawan dan masyarakat semata, tetapi juga tentang demi anak-anak Indonesia yang lebih baik melalui seni dan edukasi serta karakter diri yang lebih kuat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3 d-flex">
                            <div class="card icon-active p-4 rounded-5 shadow h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Siap Belajar</h5>
                                    <hr>
                                    <p class="card-text">Semua pihak siap untuk saling belajar, terbuka untuk menerima pembelajaran khususnya bagaimana berkomunikasi dengan masyarakat dan mengelola anak-anak.</p>
                                </div>
                            </div>
                        </div>
        
                </div>
            </div>
        </div>
    </section>
    {{-- Akkhir Tentang 8 Sikap Dasar --}}

     {{-- Tentang Syarat --}}
    <section class="container-fluid">
        <div class="tentang py-5 mx-3 rounded-4 shadow">
            <div class="beranda-aktivitas">

                <div class="text-center mb-5">
                    <h1 class="mb-4">Syarat & Tugas</h1>
                </div>

                <div class="row justify-content-center mx-3">
        
                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                        <div class="card icon-active p-4 rounded-5 shadow">
                            
                            <!-- Bagian Ikon + Judul -->
                            <div class="mb-3">
                                <h5 class="card-title m-0">Ilustrator</h5>
                            </div>

                            <!-- Garis -->
                            <hr class="mx-0">

                            <!-- Isi Card -->
                            <div class="card-body pt-2">
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center">
                                    <p>Mengumpulkan ide gambar dan membuat sketsa gambar</p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                    <p>Memastikan gambar yang dibuat dan diwarnai bersama berkualitas baik</p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                    <p>Membuat check list kebutuhan teknis menggambar</p>
                                    </li>
                                </ul>

                                <hr class="mx-0">

                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center">
                                    <p>Mempunyai skill dalam menggambar yang berkualitas</p>
                                    </li>
                                    <li class="d-flex align-items-center">
                                    <p>Bersedia mengikuti seluruh kegiatan tembokpedia termasuk dalam hadir pada hari briefing, hari sketsa, hari pelaksanaan dan refleksi.</p>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                        <div class="card icon-active p-4 rounded-5 shadow">
                            
                            <!-- Bagian Ikon + Judul -->
                            <div class="mb-3">
                                <h5 class="card-title m-0">Fasilitator</h5>
                            </div>

                            <!-- Garis -->
                            <hr class="mx-0">

                            <!-- Isi Card -->
                            <div class="card-body pt-2">
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Menjalin hubungan baik</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Berkomunikasi secara aktif</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Kolaborasi dengan tim</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Garis -->
                            <hr class="mx-0">

                            <!-- Isi Card -->
                            <div class="card-body pt-2">
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Menjalin hubungan baik</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Berkomunikasi secara aktif</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Kolaborasi dengan tim</span>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                        <div class="card icon-active p-4 rounded-5 shadow">
                            
                            <!-- Bagian Ikon + Judul -->
                            <div class="mb-3">
                                <h5 class="card-title m-0">Dokumentator</h5>
                            </div>

                            <!-- Garis -->
                            <hr class="mx-0">

                            <!-- Isi Card -->
                            <div class="card-body pt-2">
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Menjalin hubungan baik</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Berkomunikasi secara aktif</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Kolaborasi dengan tim</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Garis -->
                            <hr class="mx-0">

                            <!-- Isi Card -->
                            <div class="card-body pt-2">
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Menjalin hubungan baik</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Berkomunikasi secara aktif</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Kolaborasi dengan tim</span>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                        <div class="card icon-active p-4 rounded-5 shadow">
                            
                            <!-- Bagian Ikon + Judul -->
                            <div class="mb-3">
                                <h5 class="card-title m-0">Logistik</h5>
                            </div>

                            <!-- Garis -->
                            <hr class="mx-0">

                            <!-- Isi Card -->
                            <div class="card-body pt-2">
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Menjalin hubungan baik</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Berkomunikasi secara aktif</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Kolaborasi dengan tim</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Garis -->
                            <hr class="mx-0">

                            <!-- Isi Card -->
                            <div class="card-body pt-2">
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Menjalin hubungan baik</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Berkomunikasi secara aktif</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Kolaborasi dengan tim</span>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                        <div class="card icon-active p-4 rounded-5 shadow">
                            
                            <!-- Bagian Ikon + Judul -->
                            <div class="mb-3">
                                <h5 class="card-title m-0">Koordinator Lapangan</h5>
                            </div>

                            <!-- Garis -->
                            <hr class="mx-0">

                            <!-- Isi Card -->
                            <div class="card-body pt-2">
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Menjalin hubungan baik</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Berkomunikasi secara aktif</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Kolaborasi dengan tim</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Garis -->
                            <hr class="mx-0">

                            <!-- Isi Card -->
                            <div class="card-body pt-2">
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Menjalin hubungan baik</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5 mb-2">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Berkomunikasi secara aktif</span>
                                    </li>
                                    <li class="d-flex align-items-center fs-5">
                                    <i class='bxr bx-caret-right me-2'></i>
                                    <span>Kolaborasi dengan tim</span>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
    </section>
    {{-- Akhir Tentang Syarat --}}

</x-layout>