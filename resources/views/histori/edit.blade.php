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
                        <h1>Edit Program</h1>
                    </div>

                    <form action="{{ route('histori.update', $histori->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Pilih Program -->
                        <div class="mb-3">
                            <label for="program_id" class="form-label">Program</label>
                            <select name="program_id" id="program_id" class="form-select" required>
                                @foreach ($programs as $program)
                                    <option value="{{ $program->id }}" {{ $program->id == $histori->program_id ? 'selected' : '' }}>
                                        {{ $program->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Judul -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Histori</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $histori->title) }}" required>
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea name="description" rows="5" class="form-control" required>{{ old('description', $histori->description) }}</textarea>
                        </div>

                        <!-- Tanggal Selesai -->
                        <div class="mb-3">
                            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                            <input type="date" name="tanggal_selesai" class="form-control" value="{{ old('tanggal_selesai', $histori->tanggal_selesai) }}" required>
                        </div>

                        <!-- Gambar -->
                        <div class="mb-3">
                            <label for="image_path" class="form-label">Gambar Histori</label>
                            <input type="file" name="image_path" class="form-control">
                            @if ($histori->image_path)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $histori->image_path) }}" alt="Histori Image" class="img-fluid rounded" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary w-100 rounded-pill">Perbarui Histori</button>
                    </form>

                </div>
            </div>

        </div>
    </section>

</x-form-layout>
