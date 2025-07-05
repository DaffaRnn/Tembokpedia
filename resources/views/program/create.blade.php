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
                        <h1>Buat Program</h1>
                    </div>

                   <form action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Judul -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Program</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi Singkat</label>
                            <textarea name="description" class="form-control" rows="4" required></textarea>
                        </div>

                        <!-- Tanggal -->
                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal Program</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>

                        <!-- Lokasi -->
                        <div class="mb-3">
                            <label for="location" class="form-label">Lokasi</label>
                            <input type="text" name="location" class="form-control" required>
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status Program</label>
                            <select name="status" class="form-select" required>
                                <option value="Sedang Berlangsung">Sedang Berlangsung</option>
                                <option value="Segera Dimulai">Segera Dimulai</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                        </div>

                        <!-- Gambar -->
                        <div class="mb-3">
                            <label for="image_path" class="form-label">Gambar Program</label>
                            <input type="file" name="image_path" class="form-control">
                        </div>

                        <!-- Kegiatan -->
                        <div class="mb-3">
                            <label for="activities" class="form-label">Daftar Kegiatan</label>
                            <div id="activities-wrapper">
                                <input type="text" name="activities[]" class="form-control mb-2" placeholder="Kegiatan 1">
                            </div>
                            <button type="button" class="btn btn-sm btn-secondary" onclick="addActivity()">Tambah Kegiatan</button>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary w-100 rounded-pill">Simpan Program</button>
                        <a href="{{ route('admin.program') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>

            </div>
        </div>
    </section>
    
    <script>
        function addActivity() {
            const wrapper = document.getElementById('activities-wrapper');
            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'activities[]';
            input.className = 'form-control mb-2';
            input.placeholder = 'Kegiatan tambahan';
            wrapper.appendChild(input);
        }
    </script>

</x-form-layout>