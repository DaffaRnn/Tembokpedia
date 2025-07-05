<x-form-layout>
@auth
@if(auth()->user()->role == 'admin')
    <x-slot:title>{{ $title }}</x-slot:title>

        <section class="container">
            <div class="program-st rounded-4 my-5" style="background-color: #fff">
                        
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-12 px-4 mb-2 py-5 bg-light rounded-4 shadow">
                        
                        <div class="text-center mb-4">
                            <h1>Tambah Admin</h1>
                        </div>    
                    

                        <form action="{{ route('admin.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="relawan_id">Pilih Relawan (Diterima & Dokumentator)</label>
                                <select name="relawan_id" class="form-control" required>
                                    @forelse($relawans as $relawan)
                                        <option value="{{ $relawan->id }}">
                                            {{ $relawan->nama }} |
                                            @foreach ($relawan->programs as $program)
                                            {{ $program->title }}
                                            @endforeach
                                        </option>
                                    @empty
                                        <option disabled>Tidak ada relawan yang memenuhi kriteria.</option>
                                    @endforelse
                                </select>
                            </div>
                
                            <button type="submit" class="btn btn-primary btn-sm mt-3">Tambahkan Sebagai Admin</button>
                            <a href="{{ route('admin.relawan') }}" class="btn btn-primary btn-sm mt-3">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@else
<h1 class="text-danger">Maaf Anda Tidak Memiliki Akses ke Halaman ini!</h1>
@endif
@endauth
</x-form-layout>