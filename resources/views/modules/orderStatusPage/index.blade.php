@extends('layouts.main')

@section('container')
    <style>
        .container-lg {
            min-height: 85vh;
        }
    </style>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <div class="container-lg">
        <div class="row justify-content-center">
            <h1 class="text-center font-family-Open Sans mt-4 ">Status Pemesanan</h1>
            <div class="col-4 mt-4" id="approved">
                <a href="" class="text-decoration-none text-dark">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-8 align-self-center text-start">
                                        <h5>{{ $approved }}</h5>
                                        <p class="text-muted mb-0">Diterima</p>
                                    </div>
                                    <div class="col-4">
                                        <i class="mdi mdi-account-check" style="font-size: 40px; color: #008000"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 mt-4" id="waiting">
                <a href="" class="text-decoration-none text-dark">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-8 align-self-center text-start">
                                        <h5>{{ $waiting }}</h5>
                                        <p class="text-muted mb-0">Menunggu</p>
                                    </div>
                                    <div class="col-4">
                                        <i class="mdi mdi-account-clock" style="font-size: 40px; color: #ffa500"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 mt-4" id="declined">
                <a href="" class="text-decoration-none text-dark">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-8 align-self-center text-start">
                                        <h5>{{ $denied }}</h5>
                                        <p class="text-muted mb-0">Ditolak</p>
                                    </div>
                                    <div class="col-4">
                                        <i class="mdi mdi-account-remove" style="font-size: 40px; color: #ff0000"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @foreach ($daftarPemesanan as $pesanan)
            <div class="card mb-3 mt-5" id="card_list">
                <div class="row g-0">
                    <div class="col-6 col-md-2">
                        <img src="{{ $pesanan->facility->photo }}" class="card-img" name="gedung_bayar"
                            style="height: 160px; object-fit: cover;" alt="gedung">
                    </div>
                    <div class="col-6 col-md-10">
                        <div class="card-body">
                            <h5 class="card-title fs-2 font-family-Open Sans" name="nama_bayar">
                                {{ $pesanan->facility->name }}</h5>
                            <p class="card-text text-danger font-family-Open Sans" name="harga_bayar">Rp 500.000</p>
                            <p class="card-text"><small class="text-muted font-family-Open Sans"
                                    name="tanggal_bayar">{{ $pesanan->tanggal_pemesanan }}</small></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card-footer fw-bold font-family-Open Sans" name="status_bayar"
                            style="color:#{{ $warna[$pesanan->id] }}">{{ $pesanan->status }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
