<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="container-fluid">
        <div class="program-st py-5 mx-3 rounded-4 shadow">

            <div class="text-center mb-4">
                <h1>Histori Kegiatan</h1>
            </div>

            <div class="row justify-content-center mx-5">

                @foreach ($histories as $history)
                    <div class="col-lg-10 col-md-11 col-sm-12 my-2 mx-auto  mb-3">
                        <div class="card shadow">
                            <div class="row g-0">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    @if ($history->image_path)
                                        <img src="{{ asset('storage/' . $history->image_path) }}" class="img-fluid rounded-start w-100" alt="Gambar Program" style="object-fit: cover">
                                    @endif
                                </div>
                                <div class="col-lg-9 col-md-8 col-sm-6">
                                    <div class="card-body">
                                        <h5 class="card-title mb-1">{{ $history->title }}</h5>
                                        <p class="text-muted mb-1">
                                            <i class="bx bx-calendar"></i> {{ \Carbon\Carbon::parse($history->tanggal_selesai)->format('d M Y') }}
                                        </p>
                                        <p class="card-text small">{{ Str::limit($history->description, 100) }}</p>
                                        <span class="badge bg-secondary">Program: {{ $history->program->title }}</span>
                                        <a href="{{ route('histori.show', $history->id) }}" class="btn btn-primary btn-md float-end rounded-3">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="mt-4 d-flex justify-content-center">
                {{ $histories->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </section>        
    
</x-layout>