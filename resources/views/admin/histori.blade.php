<x-dashboard>
@auth
@if(auth()->user()->role == 'admin')
    <div class="card-body">
        <p class="card-title">Histori</p>
        <a href="{{ route('histori.create') }}" class="btn btn-primary mb-3">+ Histori</a>
        <div class="table-responsive text-center">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Selesai</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($historis as $histori)
                        
                    <tr>
                        <th scope="row">{{$loop->iteration }}</th>
                        <td>{{ $histori->title }}</td>
                        <td>{{ Str::limit($histori->description, 25) }}</td>
                        <td>{{ $histori->tanggal_selesai }}</td>
                        <td>
                            <a href="{{ route('histori.edit', $histori->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('histori.destroy', $histori->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus histori ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@else
<h1 class="text-danger">Maaf Anda Tidak Memiliki Akses ke Halaman ini!</h1>
@endif
@endauth

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