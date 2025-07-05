<x-form-layout>
    
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <section class="container">
        <div class="program-st rounded-4 my-5" style="background-color: #fff">
            
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            
            
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-12 px-4 mb-2 py-5 bg-light rounded-4 shadow">
                    
                    <div class="text-center mb-4">
                        <h1>Tambah Galeri</h1>
                    </div>
                    
                    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Judul Gambar -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Gambar</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi (Opsional)</label>
                            <textarea name="description" class="form-control" rows="4"></textarea>
                        </div>
                        
                        <!-- Gambar -->
                        <div class="mb-3">
                            <label for="image_path" class="form-label">Unggah Gambar</label>
                            <input type="file" name="image_path" class="form-control" required>
                        </div>
                        
                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary w-100 rounded-pill">Simpan ke Galeri</button>
                        <a href="{{ route('admin.galeri') }}" class="btn btn-primary mt-3">Kembali</a>
                    </form>
                </div>

            </div>
        </div>
    </section>    

</x-form-layout>