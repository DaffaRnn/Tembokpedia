<x-dashboard>
@auth
@if(auth()->user()->role == 'admin')
    <div class="card-body">
        <p class="card-title">Relawan</p>
        <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3 text-light">+ Admin</a>
        <div class="table-responsive text-center">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Program</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($relawans as $relawan)    
                    <tr>
                        <th scope="row">{{$loop->iteration }}</th>
                        <td>{{ $relawan->nama }}</td>
                        <td>{{ $relawan->email }}</td>
                        <td>{{ $relawan->kategori }}</td>
                        @foreach ($relawan->programs as $program)  
                        <td>{{ $program->title }}</td>
                        <td>
                            @if ($program->pivot->diterima === 1)
                                Diterima
                            @elseif ($program->pivot->diterima === 0)
                                Ditolak
                            @else
                                Menunggu
                            @endif
                        </td>
                        @endforeach
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalTerima{{ $relawan->id }}">
                                Terima
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalTolak{{ $relawan->id }}">
                                Tolak
                            </button>        
                        </td>
                    </tr>

                    <!-- Modal Konfirmasi Terima -->
                    <div class="modal fade" id="modalTerima{{ $relawan->id }}" tabindex="-1" aria-labelledby="modalTerimaLabel{{ $relawan->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTerimaLabel{{ $relawan->id }}">Konfirmasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah kamu yakin ingin <strong>menerima</strong> relawan ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <form action="{{ route('relawan.terima', $relawan->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Ya, Terima</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Konfirmasi Tolak -->
                    <div class="modal fade" id="modalTolak{{ $relawan->id }}" tabindex="-1" aria-labelledby="modalTolakLabel{{ $relawan->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTolakLabel{{ $relawan->id }}">Konfirmasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah kamu yakin ingin <strong>menolak</strong> dan menghapus relawan ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <form action="{{ route('relawan.tolak', $relawan->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Ya, Tolak</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    @endforeach
                </tbody>
            </table>
            <div class="mt-5 d-flex justify-content-end">
                {{ $relawans->links('pagination::bootstrap-5') }}
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