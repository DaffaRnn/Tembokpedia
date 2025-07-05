<x-form-layout>
    <x-slot:title>Edit Program</x-slot:title>

    <section class="container">
        <div class="program-st rounded-4 my-5" style="background-color: #fff">
            
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-12 px-4 mb-2 py-5 bg-light rounded-4 shadow">

                    <div class="text-center mb-4">
                        <h1>Edit Galeri</h1>
                    </div>

                    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Gambar</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $galeri->title) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea name="description" class="form-control" rows="4">{{ old('description', $galeri->description) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image_path" class="form-label">Gambar Baru (Opsional)</label>
                            <input type="file" name="image_path" class="form-control">
                            @if ($galeri->image_path)
                                <img src="{{ asset('storage/' . $galeri->image_path) }}" class="img-fluid mt-3 rounded" style="max-width: 200px;" alt="Gambar Sebelumnya">
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary w-100 rounded-pill">Simpan Perubahan</button>
                    </form>

                </div>
            </div>

        </div>
    </section>

</x-form-layout>
