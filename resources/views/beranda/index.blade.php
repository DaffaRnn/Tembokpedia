<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>
    
    {{-- Hero Section --}}
    <section class="hero-section shadow"></section>
    {{-- End Hero Section --}}

    {{-- Beranda Tentang --}}
    <section class="container-fluid">
        <div class="beranda py-5 mx-3 rounded-4 shadow">
            <div class="row">
                

                    <div class="col-md-5 flex-grow-1 d-flex align-items-center justify-content-center">
                        <img id="img" src="img/logo.jpeg" alt="tembokpedia" class="img-fluid shadow-lg rounded-circle h-auto" width="350">
                    </div>
                        
                    <div id="desc" class="col-md-5 flex-grow-1 text-center">
                        <h1 class="mb-4">Tentang Kami</h1>
                        <p class="mb-5" style="text-align: justify">Tembokpedia adalah gerakan kerelawanan yang mengajak sebuah pihak untuk terlibat aktif dalam membentuk karakter baik anak usia sekolah dasar di seluruh Indonesia. Selama satu tahun, para relawan diajak untuk menggambar dan mewarnai tembok kampung bersama anak-anak tentang sebuah pesan baik yang sesuai dengan konteks sosial dimana tempat anak tinggal.</p>
                        <a href="{{ route('tentang.index') }}" class="btn tombol text-light fw-1">Baca Selengkapnya</a>

                    </div>
        
            </div>
        </div>
    </section>
    {{-- Akhir Beranda Tentang --}}

    {{-- Beranda Benefit --}}
    <section class="container-fluid">
        <div class="beranda py-5 mx-3 rounded-4 shadow">
            <div class="beranda-aktivitas">

                <div class="text-center mb-5">
                    <h1 class="mb-4">Manfaat Mengikuti Program Kami <span class="text-danger">!!</span></h1>
                </div>

                <div class="row justify-content-evenly mx-3">
        
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3">
                            <div class="card icon-active p-4 rounded-5 shadow">
                                <div class="icon-wrapper mx-auto mb-3" style="background-color: #e0f0ff; color: 007bff;">
                                    <i class='bxr bx-user-voice'></i> 
                                </div>
                                <hr class="mx-4">
                                <div class="card-body">
                                    <h5 class="card-title">Menjalin Relasi</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3">
                            <div class="card icon-active p-4 rounded-5 shadow">
                                <div class="icon-wrapper mx-auto mb-3" style="background-color: #f4e8ff; color: #a259ff;">
                                    <i class='bxr bx-handshake'></i> 
                                </div>
                                <hr class="mx-4">
                                <div class="card-body">
                                    <h5 class="card-title">Dukungan Komunitas</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3">
                            <div class="card icon-active p-4 rounded-5 shadow">
                                <div class="icon-wrapper mx-auto mb-3" style="background-color: #fff7e0; color: #ffc107;">
                                    <i class='bxr bx-intellect'></i>  
                                </div>
                                <hr class="mx-4">
                                <div class="card-body">
                                    <h5 class="card-title">Menambah Wawasan</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-3">
                            <div class="card icon-active p-4 rounded-5 shadow">
                                <div class="icon-wrapper mx-auto mb-3" style="background-color: #e8fce8; color: #28a745;">
                                    <i class='bxr bx-rocket'></i> 
                                </div>
                                <hr class="mx-4">
                                <div class="card-body">
                                    <h5 class="card-title">Meningkatkan Skill</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                </div>
                            </div>
                        </div>
        
                </div>
            </div>
        </div>
    </section>
    {{-- Akhir Beranda Benefit --}}

    {{-- Beranda Aktivitas --}}
    <section class="container-fluid">
        <div class="beranda py-5 mx-3 rounded-4 shadow">
            <div class="beranda-aktivitas">

                <div class="text-center mb-5">
                    <h1 class="mb-4">Aktivitas Kami</h1>
                </div>

                <div class="row justify-content-evenly mx-3">
        
                    @foreach ($histories as $history)
                        <div class="col-lg-4 col-md-6 my-3">
                            <div class="card p-4 rounded-5 shadow">
                                <img src="{{ asset('storage/' . $history->image_path) }}" class="card-img-top rounded-5 shadow" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $history->title }}</h5>
                                    <p class="card-text">{{ Str::limit($history->description, 100) }}</p>
                                    <a href="{{ route('histori.show', $history->id) }}" class="btn btn-primary rounded-5">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
        
                </div>
            </div>
        </div>
    </section>
    {{-- Akhir Beranda Aktivitas --}}

    {{-- Beranda Program --}}
    <section class="container-fluid">
        <div class="card card-program beranda text-center py-5 mx-3 rounded-4 shadow text-light">
            <div class="card-header bg-transparent border-0 fs-5">
                Mari Bergabung Ke
            </div>
            <div class="card-body">
                <h1 class="card-title">Program Kami</h1>
                <p class="card-text">Menjadi Bagian Dari Relawan Untuk Meningkatkan Kualitas Anak Bangsa</p>
                <a href="{{ route('program.index') }}" class="btn btn-primary">Ikutan Program</a>
            </div>
            <div class="card-footer bg-transparent border-0 text-white-50">
                Be The Part Of Us
            </div>
        </div>                
    </section>
    {{-- Akhir Beranda Program --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: '{{ session('error') }}',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#d33'
                });
            });
        </script>
    @endif

</x-layout>