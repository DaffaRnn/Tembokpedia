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

                    <form action="{{ route('program.update', $program->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Judul --}}
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Program</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="title" value="{{ old('title', $program->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Deskripsi --}}
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea name="description" id="description" rows="4" class="form-control @error('description') is-invalid @enderror" required>{{ old('description', $program->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Tanggal --}}
                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal</label>
                            <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"
                                id="date" value="{{ old('date', $program->date) }}" required>
                            @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Lokasi --}}
                        <div class="mb-3">
                            <label for="location" class="form-label">Lokasi</label>
                            <input type="text" name="location" class="form-control @error('location') is-invalid @enderror"
                                id="location" value="{{ old('location', $program->location) }}" required>
                            @error('location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Status --}}
                        <div class="mb-3">
                            <label for="status" class="form-label">Status Program</label>
                            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
                                <option value="Sedang Berlangsung" {{ old('status', $program->status) == 'Sedang Berlangsung' ? 'selected' : '' }}>Sedang Berlangsung</option>
                                <option value="Segera Dimulai" {{ old('status', $program->status) == 'Segera Dimulai' ? 'selected' : '' }}>Segera Dimulai</option>
                                <option value="Selesai" {{ old('status', $program->status) == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Gambar --}}
                        <div class="mb-3">
                            <label for="image_path" class="form-label">Gambar Program</label>
                            @if ($program->image_path)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $program->image_path) }}" alt="Gambar saat ini" class="img-thumbnail" width="200">
                                </div>
                            @endif
                            <input type="file" name="image_path" class="form-control @error('image_path') is-invalid @enderror" id="image_path">
                            @error('image_path')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Kegiatan (Activities) --}}
                        <div class="mb-3">
                            <label for="activities" class="form-label">Daftar Kegiatan</label>
                        @php
                            $rawActivities = $program->activities ?? '[]';
                            $activities = is_string($rawActivities) ? json_decode($rawActivities, true) : $rawActivities;
                            $activities = old('activities', $activities);
                        @endphp
                            @foreach ($activities as $index => $activity)
                                <input type="text" name="activities[]" class="form-control mb-2" value="{{ $activity }}">
                            @endforeach
                            <div id="extra-activities"></div>
                            <button type="button" class="btn btn-sm btn-outline-primary" onclick="addActivity()">+ Tambah Kegiatan</button>
                        </div>

                        <button type="submit" class="btn btn-success w-100 mt-4">Update Program</button>
                    </form>

                </div>
            </div>

        </div>
    </section>

    

    <script>
        function addActivity() {
            const div = document.createElement('div');
            div.innerHTML = `<input type="text" name="activities[]" class="form-control mb-2" placeholder="Kegiatan baru">`;
            document.getElementById('extra-activities').appendChild(div);
        }
    </script>
</x-form-layout>
