<x-layout>
    
    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="container-fluid">
        <div class="program-st py-5 mx-3 rounded-4 shadow">

             <div class="text-center mb-4">
                <h1>Program Kami</h1>
            </div>

           <!-- Baris Search -->
            <div class="row justify-content-center mx-5 mb-3">
                <div class="col-lg-10 col-md-11 col-sm-12">
                    <div style="width: 350px;"> <!-- Ubah lebar di sini -->
                    <form class="d-flex search-wrapper" role="search" method="GET" action="{{ route('program.index') }}">
                        <input class="form-control me-2" type="search" name="search" value="{{ $search }}" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </div>

            <div class="beranda-aktivitas">                
                <div class="row justify-content-center mx-5">

                    <!-- Card List -->
                    @foreach ($programs as $program)
                    <div class="col-lg-10 col-md-11 col-sm-12 my-2 mx-auto">
                        <div class="card mb-4 shadow rounded-4 overflow-hidden p-3 d-flex flex-column flex-md-row align-items-center" style="min-height: 220px;">
                            
                            <!-- Gambar Program -->
                            <div class="me-md-3 mb-3 mb-md-0" style="flex: 0 0 200px;">
                                <img src="{{ asset($program->image_path) }}" class="img-fluid rounded-4 shadow" alt="Program Tembokpedia" style="height: 150px; object-fit: cover; width: 200px;">
                            </div>

                            <!-- Konten -->
                            <div class="d-flex flex-column justify-content-between w-100">
                                <div class="d-flex justify-content-between align-items-center mb-2 flex-wrap">
                                    <h5 class="mb-0 me-2 fw-bold">{{ $program->title }}</h5>
                                    <span class="badge 
                                        @if($program->status == 'Sedang Berlangsung') bg-success 
                                        @elseif($program->status == 'Segera Dimulai') bg-warning 
                                        @else bg-secondary @endif
                                        px-3 py-2 rounded-pill">
                                        {{ $program->status }}
                                    </span>
                                </div>

                                <p class="text-muted mb-1 small">
                                    <i class='bx bx-calendar'></i> {{ \Carbon\Carbon::parse($program->date)->format('d F Y') }} &nbsp; | &nbsp;
                                    <i class='bx bx-map'></i> {{ $program->location }}
                                </p>

                                <p class="card-text small mb-2">
                                    {{ $program->description }}
                                </p>

                                <ul class="list-unstyled small mb-2">
                                    @foreach($program->activities ?? [] as $activity)
                                        <li><i class='bx bx-chevron-right'></i> {{ $activity }}</li>
                                    @endforeach
                                </ul>

                                <a href="#" class="btn btn-primary rounded-pill mt-1 w-100 justify-content-center">Daftar jadi Relawan</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                {{-- <div class="row justify-content-center mx-5">
                    <div class="col-lg-10 col-md-11 col-sm-12 my-2 mx-auto">
                            <div class="card mb-4 shadow rounded-4 overflow-hidden p-3 d-flex flex-column flex-md-row align-items-center" style="min-height: 220px;">
                                
                                <!-- Gambar Program -->
                                <div class="me-md-3 mb-3 mb-md-0" style="flex: 0 0 200px;">
                                    <img src="img/img1.jpg" class="img-fluid rounded-4 shadow" alt="Program Tembokpedia" style="height: 150px; object-fit: cover; width: 200px;">
                                </div>

                                <!-- Konten Card -->
                                <div class="d-flex flex-column justify-content-between w-100">
                                    <!-- Header: Judul dan Status -->
                                    <div class="d-flex justify-content-between align-items-center mb-2 flex-wrap">
                                        <h5 class="mb-0 me-2 fw-bold">Melukis di SDN 01</h5>
                                        <span class="badge bg-warning px-3 py-2 rounded-pill">Segera Dimulai</span>
                                    </div>

                                    <!-- Info Tanggal & Lokasi -->
                                    <p class="text-muted mb-1 small">
                                        <i class='bx bx-calendar'></i> 20 Juni 2025 &nbsp; | &nbsp;
                                        <i class='bx bx-map'></i> SDN 01 Sukamulya
                                    </p>

                                    <!-- Deskripsi -->
                                    <p class="card-text small mb-2">
                                        Program melukis tembok sambil membangun karakter anak-anak melalui cerita visual yang edukatif dan menyenangkan.
                                    </p>

                                    <!-- List Kegiatan -->
                                    <ul class="list-unstyled small mb-2">
                                        <li><i class='bx bx-chevron-right'></i> Melukis mural tematik</li>
                                        <li><i class='bx bx-chevron-right'></i> Edukasi cerita bergambar</li>
                                        <li><i class='bx bx-chevron-right'></i> Kolaborasi dengan siswa</li>
                                    </ul>

                                    <!-- CTA -->
                                    <a href="#" class="btn btn-primary rounded-pill mt-1 w-100 justify-content-center">Daftar jadi Relawan</a>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="row justify-content-center mx-5">
                    <div class="col-lg-10 col-md-11 col-sm-12 my-2 mx-auto">
                            <div class="card mb-4 shadow rounded-4 overflow-hidden p-3 d-flex flex-column flex-md-row align-items-center" style="min-height: 220px;">

                                <!-- Gambar Program -->
                                <div class="me-md-3 mb-3 mb-md-0" style="flex: 0 0 200px;">
                                    <img src="img/img1.jpg" class="img-fluid rounded-4 shadow" alt="Program Tembokpedia" style="height: 150px; object-fit: cover; width: 200px;">
                                </div>

                                <!-- Konten Card -->
                                <div class="d-flex flex-column justify-content-between w-100">
                                    <!-- Header: Judul dan Status -->
                                    <div class="d-flex justify-content-between align-items-center mb-2 flex-wrap">
                                        <h5 class="mb-0 me-2 fw-bold">Melukis di SDN 01</h5>
                                        <span class="badge bg-secondary px-3 py-2 rounded-pill">Selesai</span>
                                    </div>

                                    <!-- Info Tanggal & Lokasi -->
                                    <p class="text-muted mb-1 small">
                                        <i class='bx bx-calendar'></i> 20 Juni 2025 &nbsp; | &nbsp;
                                        <i class='bx bx-map'></i> SDN 01 Sukamulya
                                    </p>

                                    <!-- Deskripsi -->
                                    <p class="card-text small mb-2">
                                        Program melukis tembok sambil membangun karakter anak-anak melalui cerita visual yang edukatif dan menyenangkan.
                                    </p>

                                    <!-- List Kegiatan -->
                                    <ul class="list-unstyled small mb-2">
                                        <li><i class='bx bx-chevron-right'></i> Melukis mural tematik</li>
                                        <li><i class='bx bx-chevron-right'></i> Edukasi cerita bergambar</li>
                                        <li><i class='bx bx-chevron-right'></i> Kolaborasi dengan siswa</li>
                                    </ul>

                                    <!-- CTA -->
                                    <a href="#" class="btn btn-primary rounded-pill mt-1 w-100 justify-content-center">Daftar jadi Relawan</a>
                                </div>
                            </div>
                    </div>
                </div> --}}
            </div>

            <div class="mt-4 d-flex justify-content-end me-5">
                {{ $programs->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section> 
    
</x-layout>