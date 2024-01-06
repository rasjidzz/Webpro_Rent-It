@extends ('layouts.admin')

@section('content')

<style>
    * {
        font-family: 'Open Sans', sans-serif;
    }
</style>

<div class="container-lg justify-content-center">
    <h1 class="text-center mt-5 mb-5">Laporan Kerusakan</h1>

    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card card-body" style="background-color: #F4F5F6;">
        <table class="table table-responsive table-hover">
            <thead style="background-color: #D32B31; color:azure">
                <tr>
                    <th scope="col" style="width: 200px;">Gedung</th>
                    <th scope="col" style="width: 300px;">Peminjam</th>
                    <th scope="col" style="width: 150px;">NIM</th>
                    <th scope="col" style="width: 150px;">No Telepon</th>
                    <th scope="col" style="width: 150px;">Deskripsi</th>
                    <th scope="col" style="width: 150px;">Tanggal Pinjam</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporKerusakan as $info)
                <tr>
                    <td>
                        {{-- <img src="{{ asset($info->pemesanan->facility->photo) }}" alt="Gedung" width="90px" height="90px" name="gambar_gedung"> --}}
                        @foreach (explode(', ', $info->pemesanan->facility->image) as $index => $imagePath)
                        <img src="{{ asset('storage/' . $imagePath) }}" class="d-block w-100 h-100" alt="{{ $info->pemesanan->facility->slug }}-{{ $index + 1 }}" class="rounded" width="300" height="300">
                        @break
                    @endforeach
                    </td>
                    <td>
                        <p name="nama_user">{{ $info->pemesanan->user->name }}</p>
                    </td>
                    <td>
                        <p name="nim_user">{{ $info->pemesanan->user->nim }}</p>
                    </td>
                    <td>
                        <p name="tlp_user">{{ $info->pemesanan->nomor_tlp }}</p>
                    </td>
                    <td>
                        <p>{{ $info->deskripsi }}</p>
                    </td>
                    <td>
                        <p name="tgl_pinjam">{{ $info->pemesanan->tanggal_pemesanan }}</p>
                    </td>
                    <td class="align-middle">
                        <form action="/donereviewkerusakan" method="post">
                            @csrf
                            <input type="hidden" value="{{ $info->id }}" id="idKerusakan" name="idKerusakan">
                            <button type="submit" class="btn btn-success btn-lg" style="width: 150px;">Done</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $laporKerusakan->links() !!}
        </div>
    </div>
</div>
@endsection
