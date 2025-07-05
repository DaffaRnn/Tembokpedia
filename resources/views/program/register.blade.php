<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <section class="container-fluid">
        <div class="program-st rounded-4 py-5" style="background-color: #fff">

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-12 px-4 mb-3 bg-light rounded-4 shadow">

                    <div class="text-center my-5">
                        <h1>Pendaftaran Relawan</h1>
                        <h1 class="fs-3">Program : {{ $program->title }}</h1>
                    </div>

                    <form action="{{ route('program.register.store', $program->id) }}" method="POST" id="form-pendaftaran">
                        @csrf
                        <!-- Nama Relawan -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ old('nama') }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Relawan</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Kategori -->
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori Relawan</label>
                            <select name="kategori" id="kategori" class="form-select @error('kategori') is-invalid @enderror" required>
                                <option value="" disabled selected>Pilih kategori relawan</option>
                                <option value="Ilustrator">Ilustrator</option>
                                <option value="Fasilitator">Fasilitator</option>
                                <option value="Dokumentator">Dokumentator</option>
                                <option value="Logistik">Logistik</option>
                                <option value="Koordinator Lapangan">Koordinator Lapangan</option>
                            </select>
                            @error('kategori')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="button" class="btn btn-primary w-100 rounded-pill my-3" data-bs-toggle="modal" data-bs-target="#confirmModal">
                            Daftar Sekarang
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    
    <!-- MODAL KONFIRMASI -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Konfirmasi Pendaftaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                Apakah kamu yakin ingin mendaftar sebagai relawan untuk program <strong>{{ $program->title }}</strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" form="form-pendaftaran">Ya, Daftar</button>
            </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: '{{ session('error') }}',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#d33'
                });
            });
        </script>
    @endif
</x-layout>