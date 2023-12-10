@extends('layouts.main')

@section('container')

<style>
    .container-lg {
        min-height: 85vh;
    }
</style>

<div class="container-lg">
    <div class="row justify-content-center">
        <h1 class="text-center font-family-Open Sans mt-4 ">Status</h1>
        <div class="col-4 mt-4 ">
            <div class="card">
                <div class="card-body row">
                    <div class="col-8 align-self-center font-family-Open Sans">
                        <h4 class="font-family-Open Sans">Approved</h4>
                        <p class="m-0 text-muted" id="jumlah_approve">0</p>
                    </div>
                    <div class="col-4">
                        <i class="fa-solid fa-circle-check" style="font-size:30px; padding-top:20px;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mt-4 ">
            <div class="card">
                <div class="card-body row">
                    <div class="col-8 align-self-center font-family-Open Sans">
                        <h4 class="font-family-Open Sans">Waiting</h4>
                        <p class="m-0 text-muted" id="jumlah_waiting">0</p>
                    </div>
                    <div class="col-4">
                        <i class="fa-solid fa-clock" style="font-size:30px; padding-top:20px;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mt-4 ">
            <div class="card">
                <div class="card-body row">
                    <div class="col-8 align-self-center font-family-Open Sans">
                        <h4 class="font-family-Open Sans">Rejected</h4>
                        <p class="m-0 text-muted" id="jumlah_reject">0</p>
                    </div>
                    <div class="col-4">
                        <i class="fa-solid fa-circle-xmark" style="font-size:30px; padding-top:20px;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 mt-5" id="card_list">
        <div class="row g-0">
            <div class="col-6 col-md-2">
                <img src="/Assets/GedungPerkuliahan/GKU/GKU-1.jpg" class="card-img" id="gedung_bayar" style="height: 160px; object-fit: cover;" alt="gedung">
            </div>
            <div class="col-6 col-md-10">
                <div class="card-body">
                    <h5 class="card-title fs-2 font-family-Open Sans" id="nama_bayar">Gedung GKU</h5>
                    <p class="card-text text-danger font-family-Open Sans" id="harga_bayar">Rp 500.000</p>
                    <p class="card-text"><small class="text-muted font-family-Open Sans" id="tanggal_bayar">13 Oktober 2023</small></p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card-footer text-success fw-bold font-family-Open Sans" id="status_bayar">Approved</div>
            </div>
        </div>
    </div>
    <div class="card mb-3 mt-5" id="card_list">
        <div class="row g-0">
            <div class="col-6 col-md-2">
                <img src="/Assets/tult.jpg" class="card-img" id="gedung_bayar" style="height: 160px; object-fit: cover;" alt="gedung">
            </div>
            <div class="col-6 col-md-10">
                <div class="card-body">
                    <h5 class="card-title fs-2" id="nama_bayar">Gedung TULT</h5>
                    <p class="card-text text-danger" id="harga_bayar">Rp 500.000</p>
                    <p class="card-text"><small class="text-muted" id="tanggal_bayar">13 Oktober 2023</small></p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card-footer text-success fw-bold" id="status_bayar">Approved</div>
            </div>
        </div>
    </div>
</div>

@endsection