<x-layout>
    <x-slot:title>{{ $title ?? 'Detail Histori' }}</x-slot:title>

    <section class="container my-5">
        <div class="row program-st justify-content-center rounded-4">
            <div class="col-lg-10 pt-5">

                <!-- Judul -->
                <h1 class="mb-5 text-center" style="font-size: 5rem">{{ $histori->title }}</h1>

                <!-- Info Program -->
                <p class="text-muted text-center">
                    {{ $histori->program->title }} |
                    {{ $histori->program->location }} |
                    {{ \Carbon\Carbon::parse($histori->tanggal_selesai)->translatedFormat('d F Y') }}
                </p>

                <!-- Gambar -->
                @if ($histori->image_path)
                    <div class="mb-4 text-center">
                        <img src="{{ asset('storage/' . $histori->image_path) }}" class="img-fluid rounded shadow-sm w-75" alt="Gambar Histori">
                    </div>
                @endif

                <!-- Deskripsi -->
                <article class="mb-5 artikel text" style="text-align: justify">
                    {!! nl2br(e($histori->description)) !!}
                </article>

                <!-- Relawan -->
                <h4 class="mb-3">Relawan yang Berpartisipasi</h4>
                @if($relawans->count())
                    <ul class="list-group text mb-5">
                        @foreach ($relawans as $relawan)
                            @if ($relawan->pivot->diterima === 1)
                                
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $relawan->nama }}
                                <span class="badge bg-primary">{{ $relawan->pivot->kategori ?? $relawan->kategori }}</span>
                            </li>
                            @endif
                            
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">Belum ada relawan yang terdaftar untuk program ini.</p>
                @endif

            </div>
        </div>
    </section>
</x-layout>
