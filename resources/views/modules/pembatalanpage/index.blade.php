@extends('layouts.main')
@section('container')
<section>
    <div class="container">
        <div id="PilihFasilitas" style="border: 2px white; padding: 20px; background-color: white; border-radius: 10px; margin-bottom: 50px;">
            <div class="" style="text-align: center; color: white;">
                <h1 style="font-weight: bold; color: black;">PEMBATALAN</h1>
                <div class="" style="text-align: left; color: white;">
                    <h5 style="color: black;">Pesanan Yang Ingin Dibatalkan</h5>
                </div>
            </div>

            <form action="/cancelpesanan" method="post">
                @csrf
                {{-- <select class="form-select margin-bottom: 50px" onchange="fetchData()" id="selectFasilitas" name="selectedFacility"> --}}
                <select class="form-select margin-bottom: 50px" onchange="getPemesanan()" id="selectFasilitas" name="selectedFacility">
                    <option>Pilih Fasilitas</option>
                    @foreach ($pembatalans as $pembatalan)
                        {{-- <option value="{{ $pembatalan->facility->id }}">{{ $pembatalan->facility->name }}. Tanggal, {{ $pembatalan->tanggal_pemesanan }}</option> --}}
                        <option value="{{ $pembatalan->id }}">{{ $pembatalan->facility->name }}. Tanggal, {{ $pembatalan->tanggal_pemesanan }}</option>
                    @endforeach
                </select>
                <input type="hidden" id="hiddenPemesananID">
                <div class="container my-5">
                    <div class="row">
                        <div class="col">
                            <div class="auto" style="margin-bottom: 10%;">
                                <div class="d-flex" style="background-color: #ECE8E8;">
                                    <img src="" heigth="" width="200px" class="w-20" alt="" id="foto_fasilitas" />
                                    <div class="my-auto ms-2">
                                        <h2 class="fs-2 fw-3" style="margin-bottom: 5%;" id="nama_fasilitas">Nama Fasilitas</h2>
                                        <h3 style="color: #9F1521; font-weight: 400; font-size: 25px;" id="harga_fasilitas">Harga Fasilitas</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section>
                    <div class="container mb-3">
                        <label for="description" class="form-label">Alasan Pembatalan</label>
                        <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                        @error('description')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                        @enderror
                        <button class="btn btn-danger my-3" type="submit">
                            Batal
                        </button>
                    </div>
                </section>
            </form>
        </div>
    </div>
</section>


<script>
    function getPemesanan(){

        var dropdown = document.getElementById("selectFasilitas");
        var pemesananId = dropdown.value;

        $.ajax({
            url: '/getpemesananinfo',
            type: 'POST',
            data: {
                pemesanan_id: pemesananId
            },
            success: function (response) {
                console.log(response);
                // console.log('Public/Assets/'+response.image);
                document.getElementById("nama_fasilitas").innerText = response.name;
                document.getElementById("harga_fasilitas").innerText = formatCurrency(response.price);
                // Menetapkan gambar fasilitas
                var imgElement = document.getElementById("foto_fasilitas");
                imgElement.src = '{{ asset("storage/") }}' + '/' + response.image;
                imgElement.alt = response.name;  // Menetapkan teks alternatif untuk gambar
            },
            error: function (error) {
                console.error('Complete error:', error);
            }
        });
    }
    function fetchData() {
        // console.log("masuk");
        // Mendapatkan elemen dropdown
        var dropdown = document.getElementById("selectFasilitas");

        // Mendapatkan nilai terpilih dari dropdown
        var selectedFacilityId = dropdown.value;

        $.ajax({
            url: '/getfacilityinfo',
            type: 'POST',
            data: {
                facility_id: selectedFacilityId
            },
            success: function (response) {
                // console.log(response);
                // console.log('Public/Assets/'+response.image);
                document.getElementById("nama_fasilitas").innerText = response.name;
                document.getElementById("harga_fasilitas").innerText = formatCurrency(response.price);
                // Menetapkan gambar fasilitas
                var imgElement = document.getElementById("foto_fasilitas");
                imgElement.src = '{{ asset("storage/") }}' + '/' + response.image;
                imgElement.alt = response.name;  // Menetapkan teks alternatif untuk gambar
            },
            error: function (error) {
                console.error('Complete error:', error);
            }
        });
    }

    function formatCurrency(amount) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(amount);
    }
</script>

<style>
    #fileList {
        position: absolute;
        top: 10px;
        left: 10px;
        text-align: left;
    }

    .dropArea {
        overflow: auto;
        max-height: 200px;
    }

    section {
        margin-bottom: 50PX;
    }
</style>

@endsection
