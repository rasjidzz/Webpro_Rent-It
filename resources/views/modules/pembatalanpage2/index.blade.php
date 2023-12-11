@extends('layouts.main')
@section('container')
<style>
    .container {
        min-height: 72vh;
    }
</style>

<div class="container">

    <div id="PilihFasilitas" style="border: 2px white; padding: 20px; background-color: white; border-radius: 10px;">
        <div class="" style="text-align: center; color: white;">
            <h1 style="font-weight: bold; color: black;">PEMBATALAN</h1>

        </div>
    </div>

    <div class="container d-flex border border-dark rounded-2" style="height: 200px; margin-bottom: 20px;">
        <div class="d-flex flex-column justify-content-center ms-3" style="z-index: 1;">
            <p class="fs-1 text-danger text-center">PERHATIAN!</p>
            <p class="fs-4 text-center">Kami sedang melakukan peninjauan mengenai laporan pembatalan anda, ketika
                pembatalan disetujui anda tidak dapat melakukan pengajuan peminjaman 1x24 jam.</p>
        </div>
    </div>

</div>


@endsection