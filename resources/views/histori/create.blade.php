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
                        <h1>Buat Histori</h1>
                    </div>

                    <form action="{{ route('histori.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="program_id" class="form-label">Pilih Program</label>
                            <select name="program_id" id="program_id" class="form-select" required>
                                <option value="">-- Pilih Program Selesai --</option>
                                @foreach ($programs as $program)
                                    <option value="{{ $program->id }}">{{ $program->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Histori</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                            <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="iamge_path" class="form-label">Upload Gambar</label>
                            <input type="file" name="image_path" id="image_path" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">Simpan Histori</button>
                        <a href="{{ route('admin.histori') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>

            </div>
        </div>
    </section>    

</x-form-layout>