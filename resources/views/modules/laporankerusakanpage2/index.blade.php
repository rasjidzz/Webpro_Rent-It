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
            <h1 style="font-weight: bold; color: black;">LAPORAN KERUSAKAN</h1>

        </div>
    </div>

    <div class="container d-flex border border-dark rounded-2" style="height: 200px; margin-bottom: 20px;">
        <div class="d-flex flex-column justify-content-center ms-3" style="z-index: 1;">
            <p class="fs-1 text-danger text-center">PERHATIAN!</p>
            <p class="fs-4 text-center">Kami sedang melakukan peninjauan mengenai laporan kerusakan anda, jika kami menemukan bahwa kerusakan tersebut merupakan ulah peminjam maka kami
                akan memberikan denda dan jika bukan, maka kami akan segera memperbaiki fasilitas yang rusak.</p>
        </div>
    </div>

</div>


@endsection