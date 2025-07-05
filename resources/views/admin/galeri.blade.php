<x-dashboard>

    <div class="card-body">
        <p class="card-title">Galeri</p>
        <a href="{{ route('galeri.create') }}" class="btn btn-primary mb-3">+ Foto</a>
        <div class="table-responsive text-center">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">File</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galeries as $galeri)
                        
                    <tr>
                        <th scope="row">{{$loop->iteration }}</th>
                        <td>{{ $galeri->title }}</td>
                        <td>{{ Str::limit($galeri->description, 25) }}</td>
                        <td>{{ $galeri->image_path }}</td>
                        <td>
                            <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus gambar ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
            <div class="mt-5 d-flex justify-content-end">
                {{ $galeries->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#3085d6'
                });
            });
        </script>
    @endif
</x-dashboard>