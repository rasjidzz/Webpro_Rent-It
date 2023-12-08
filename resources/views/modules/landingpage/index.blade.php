@extends('layouts.main')

@section('container')

<div class="masthead" style="background-image: url('/Assets/GKU.jpg');">
    <div class="color-overlay d-flex ">
        <div class="container-fluid justifyrt-content-center">
            <div class="row-md-5 mt-5">
                <div class="" style="text-align: center; color: white;">
                    <h1 style="font-weight: bold; color: white;">SELAMAT DATANG, MAU SEWA FASILITAS ?</h1>
                    <h1 style="font-weight: bold; color: white;">MASUK PAKAI AKUN SSO DULU YUK ?</h1>
                </div>
            </div>
            <div class="row-md-5 mt-5">
                <div class="" style="text-align: center;">
                    <h1 style="color: white;">Sign In</h1>
                </div>
                <div class="mt-3" style="text-align: center;">
                    <a class="btn btn-light" style="width: 400px; border-radius: 15px;" href='/login'>
                        <img src="/Assets/365Logo.png" alt="Office 365 Logo" style="max-width: 20px; margin-right: 5px;">
                        Connect with Office 365
                    </a>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col ms-3" style="text-align: start; color: white;">
                    <p class="fw-bold">Address</p>
                    <p>Gedung Panehan Pasca Sarjana Lantai 1,
                        Jl. Telekomunikasi Terusan Buah Batu,
                        Bandung - 40257, Indonesia</p>
                </div>
                <div class="col-6" style="text-align: center;">
                    <div class="container" style="background-color: #ffffff; padding: 20px; border-radius: 10px;">
                        <p class="fw-normal" style="font-weight: bold">
                            Jenis Fasilitas Yang Bisa Anda Sewa
                        </p>
                        <div class="row">
                            <div class="col">
                                <img src="/Assets/gedung.png" alt="" style="max-width: 70px;"> <br>
                                Gedung
                            </div>
                            <div class="col">
                                <img src="/Assets/kelas.png" alt="" style="max-width: 70px;"><br>
                                Kelas
                            </div>
                            <div class="col">
                                <img src="/Assets/olahraga.png" alt="" style="max-width: 70px;"> <br>
                                Olahraga
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col me-3" style="text-align: end; color: white">
                    <p class="fw-bold">Contact Us</p>
                    <p class="m-0">E-Mail: clove@telkomuniversity.ac.id </p>
                    <p class="m-0">WhatsApp Khusus Dosen: +62 821-1666-3563 </p>
                    <p class="m-0">WhatsApp Khusus Mahasiswa: +62 812-2200-1813 </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
