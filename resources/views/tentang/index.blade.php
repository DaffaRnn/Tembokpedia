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
                                <img src="../img/img1.jpg" class="d-block w-100 rounded-5" alt="..." style="height: 400px; object-fit: cover;">
                            </div>
                            <div class="carousel-item px-3">
                                <img src="../img/img2.jpg" class="d-block w-100 rounded-5" alt="..." style="height: 400px; object-fit: cover;">
                            </div>
                            <div class="carousel-item px-3">
                                <img src="../img/img3.jpg" class="d-block w-100 rounded-5" alt="..." style="height: 400px; object-fit: cover;">
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
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="icon-wrapper d-flex justify-content-center align-items-center" 
                                    style="background-color: #FEF9C3; color: #FACC15; width: 50px; height: 50px;">
                                    <i class='bxr bx-bookmark fs-4'></i>
                                </div>
                                <h5 class="card-title m-0">Visi</h5>
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

                    <div class="col-lg-6 col-md-6 col-sm-12 my-3">
                        <div class="card icon-active p-4 rounded-5 shadow">
                            
                            <!-- Bagian Ikon + Judul -->
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="icon-wrapper d-flex justify-content-center align-items-center" 
                                    style="background-color: #CFFAFE; color: #06B6D4; width: 50px; height: 50px;">
                                    <i class='bxr bx-hourglass fs-4'></i>
                                </div>
                                <h5 class="card-title m-0">Misi</h5>
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
    {{-- Akhir Tentang Visi & Misi --}}

    {{-- Tentang 8 Sikap Dasar --}}
    <section class="container-fluid">
        <div class="beranda py-5 mx-3 rounded-4 shadow">
            <div class="beranda-aktivitas">

                <div class="text-center mb-5">
                    <h1 class="mb-4"><span class="span">8</span> Sikap Dasar</h1>
                </div>

                <div class="row justify-content-evenly mx-3">
        
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3">
                            <div class="card icon-active p-4 rounded-5 shadow">
                                <div class="card-body">
                                    <h5 class="card-title">Suka Rela</h5>
                                    <hr>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3">
                            <div class="card icon-active p-4 rounded-5 shadow">
                                <div class="card-body">
                                    <h5 class="card-title">Menjalin Relasi</h5>
                                    <hr>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3">
                            <div class="card icon-active p-4 rounded-5 shadow">
                                <div class="card-body">
                                    <h5 class="card-title">Menjalin Relasi</h5>
                                    <hr>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3">
                            <div class="card icon-active p-4 rounded-5 shadow">
                                <div class="card-body">
                                    <h5 class="card-title">Menjalin Relasi</h5>
                                    <hr>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3">
                            <div class="card icon-active p-4 rounded-5 shadow">
                                <div class="card-body">
                                    <h5 class="card-title">Menjalin Relasi</h5>
                                    <hr>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3">
                            <div class="card icon-active p-4 rounded-5 shadow">
                                <div class="card-body">
                                    <h5 class="card-title">Menjalin Relasi</h5>
                                    <hr>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3">
                            <div class="card icon-active p-4 rounded-5 shadow">
                                <div class="card-body">
                                    <h5 class="card-title">Menjalin Relasi</h5>
                                    <hr>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3">
                            <div class="card icon-active p-4 rounded-5 shadow">
                                <div class="card-body">
                                    <h5 class="card-title">Menjalin Relasi</h5>
                                    <hr>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
        
                </div>
            </div>
        </div>
    </section>
    {{-- Akkhir Tentang 8 Sikap Dasar --}}

</x-layout>