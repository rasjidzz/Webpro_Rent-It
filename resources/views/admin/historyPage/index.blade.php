@extends('layouts.admin')

@section('content')
    <style>
        * {
            font-family: 'Open Sans', sans-serif;
        }
    </style>

    <div class="container-lg justify-content-center">
        <h1 class="text-center mt-5 mb-5">Submission History</h1>

        <div class="card card-body" style="background-color: #F4F5F6;">
            <table class="table table-responsive table-hover">
                <thead style="background-color: #D32B31; color:azure">
                    <tr>
                        <th scope="col" style="width: 200px;">Photo</th>
                        <th scope="col" style="width: 200px;">Nama Gedung</th>
                        <th scope="col" style="width: 250px;">Peminjam</th>
                        <th scope="col" style="width: 150px;">NIM</th>
                        <th scope="col" style="width: 150px;">No Telepon</th>
                        <th scope="col" style="width: 150px;">Dokumen</th>
                        <th scope="col" style="width: 150px;">Tanggal Pinjam</th>
                        <th scope="col" style="width: 150px;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($history as $pemesanan)
                        <tr>
                            <td>
                                {{-- <img src="{{ asset($pemesanan->facility->image) }}" alt="{{ $pemesanan->facility->slug }}" width="90px" height="90px" name="{{ $pemesanan->facility->slug }}"> --}}
                                @foreach (explode(', ', $pemesanan->facility->image) as $index => $imagePath)
                                    <img src="{{ asset('storage/' . $imagePath) }}" class="d-block w-100 h-100" alt="{{ $pemesanan->facility->slug }}-{{ $index + 1 }}" class="rounded" width="300" height="300">
                                    @break
                                @endforeach
                            </td>
                            <td>
                                <p name="nama_gedung">{{ $pemesanan->facility->name }}</p>
                            </td>
                            <td>
                                <p name="nama_user">{{ $pemesanan->user->name }}</p>
                            </td>
                            <td>
                                <p name="nim_user">{{ $pemesanan->user->nim }}</p>
                            </td>
                            <td>
                                <p name="tlp_user">{{ $pemesanan->nomor_tlp }}</p>
                            </td>
                            <td>
                                <a href="Assets/PDF/{{ $pemesanan->file_path }}" download>{{ $pemesanan->nama_file }}</a>
                            </td>
                            <td>
                                <p name="tgl_pinjam">{{ $pemesanan->tanggal_pemesanan }}</p>
                            </td>
                            <td>
                                @if ($pemesanan->status == 'Approved')
                                    <p name="statusPemesanan" class="text-success fw-bold">{{ $pemesanan->status }}</p>
                                @else
                                    <p name="statusPemesanan" class="text-danger fw-bold">{{ $pemesanan->status }}</p>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
