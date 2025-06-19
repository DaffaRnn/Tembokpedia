<x-layout>
{{-- @dd($items) --}}
    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="container-fluid">
        <div class="program-st py-5 mx-3 rounded-4 shadow">

            <div class="text-center mb-5">
                <h1>Galeri Kami</h1>
            </div>

            <div class="row g-4 px-5">

                @foreach ($items as $item)
                <div class="col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
                    <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#modal{{ $item->id }}">
                        <img src="{{ asset('storage/' . $item->image_path) }}" class="img-fluid img-thumbnail rounded-4 shadow card-active" alt="Karya 1" width="300">
                    </div>
                </div>

            
                <!-- MODAL DETAIL GAMBAR -->
                <div class="modal fade" id="modal{{ $item->id }}" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-body p-0">
                            <img src="{{ asset('storage/' . $item->image_path) }}" class="img-fluid rounded mx-auto d-block shadow" alt="Detail Karya" style="max-width: 700px; width: 100%;">
                            <div class="p-3">
                            <h5>Judul Karya: {{ $item->title }}</h5>
                            <p>{{ $item->description }}</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- PAGINATION -->
                <div class="mt-5 d-flex justify-content-end">
                    {{ $items->links('pagination::bootstrap-5') }}
                </div>
            
            </div>
            
        </div>
    </section>        
    
</x-layout>