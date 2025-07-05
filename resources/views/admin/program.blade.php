<x-dashboard>
@auth
@if(auth()->user()->role == 'admin')
    <div class="card-body">
        <p class="card-title">Program</p>
        <a href="{{ route('program.create') }}" class="btn btn-primary text-light mb-3">+ Program</a>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($programs as $program)
                        
                    <tr>
                        <th scope="row">{{$loop->iteration }}</th>
                        <td>{{ $program->title }}</td>
                        <td>{{ Str::limit($program->description, 30) }}</td>
                        <td>{{ $program->date->format('d M Y') }}</td>
                        <td>{{ $program->status }}</td>
                        <td>
                            <a href="{{ route('program.edit', $program->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('program.destroy', $program->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus program ini?')">
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
                {{ $programs->links('pagination::bootstrap-5') }}
            </div>
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