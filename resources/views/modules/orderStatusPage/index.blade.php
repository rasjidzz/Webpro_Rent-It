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
                                        <h5>{{ $active }}</h5>
                                        <p class="text-muted mb-0">Active</p>
                                    </div>
                                    <div class="col-4">
                                        <i class="mdi mdi-run-fast" style="font-size: 40px; color: #0300bb"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 mt-4" id="approved">
                <a href="" class="text-decoration-none text-dark">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-8 align-self-center text-start">
                                        <h5>{{ $approved }}</h5>
                                        <p class="text-muted mb-0">Approved</p>
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
                                        <p class="text-muted mb-0">Waiting</p>
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
                                        <h5>{{ $canceled }}</h5>
                                        <p class="text-muted mb-0">Canceled</p>
                                    </div>
                                    <div class="col-4">
                                        <i class="mdi mdi-cancel" style="font-size: 40px; color: #ff0000"></i>
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
                                        <p class="text-muted mb-0">Rejected</p>
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
            <div class="col-4 mt-4" id="declined">
                <a href="" class="text-decoration-none text-dark">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="icon-contain">
                                <div class="row">
                                    <div class="col-8 align-self-center text-start">
                                        <h5>{{ $completed }}</h5>
                                        <p class="text-muted mb-0">Completed</p>
                                    </div>
                                    <div class="col-4">
                                        <i class="mdi mdi-check" style="font-size: 40px; color: #008000"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @foreach ($daftarPemesanan as $pesanan)
            <div class="card mb-3 mt-5 mb-5" id="card_list">
                <div class="row g-0">
                    <div class="col-6 col-md-2">
                        <td>
                            {{-- <img src="{{ asset($pesanan->facility->image) }}" alt="{{ $pesanan->facility->slug }}" width="90px" height="90px" name="{{ $pesanan->facility->slug }}"> --}}
                            @foreach (explode(', ', $pesanan->facility->image) as $index => $imagePath)
                                <img src="{{ asset('storage/' . $imagePath) }}" class="d-block w-100 h-100"
                                    alt="{{ $pesanan->facility->slug }}-{{ $index + 1 }}" class="rounded" width="300"
                                    height="300">
                            @break
                        @endforeach
                    </td>
                </div>
                <div class="col-6 col-md-10">
                    <div class="card-body">
                        <h5 class="card-title fs-2 font-family-Open Sans" name="nama_bayar">
                            {{ $pesanan->facility->name }}</h5>
                        {{-- <p class="card-text text-danger font-family-Open Sans" name="harga_bayar">Rp {{ $pesanan->facility->price }}</p> --}}
                        <p class="card-text text-danger font-family-Open Sans" name="harga_bayar">
                            <span class="formatted-price" data-raw-price="{{ $pesanan->facility->price }}">
                                Rp {{ $pesanan->facility->price }}
                            </span>
                        </p>
                        <p class="card-text">
                            <small class="text-muted font-family-Open Sans" name="tanggal_bayar">
                                {{ $pesanan->tanggal_pemesanan }}
                            </small>
                        </p>
                    </div>
                    @if ($pesanan->status === 'Approved')
                        <a class="btn btn-success mx-3 my-3"
                            onclick="openModalPembayaran({{ $pesanan->facility->price }}, {{ $pesanan->id }})">
                            Bayar
                        </a>
                    @endif
                    @if ($pesanan->status === 'Rejected')
                        <a class="btn btn-danger mx-3 my-3"
                            onclick="openModalDetail({{ $pesanan->id }}, {{ $pesanan->facility->price }})">
                            Detail Penolakan
                        </a>
                    @endif
                    @if ($pesanan->status === 'Active')
                        <a class="btn btn-danger mx-3 my-3" onclick="completeRent({{ $pesanan->id }})">
                            Complete
                        </a>
                    @endif
                </div>
                <div class="col-md-12">
                    <div class="card-footer fw-bold font-family-Open Sans" name="status_bayar"
                        style="color:#{{ $warna[$pesanan->id] }}">{{ $pesanan->status }}</div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-center">
        {!! $daftarPemesanan->links() !!}
    </div>
</div>

{{-- Modal Pembayaran --}}
<div class="modal fade" id="modalPembayaran" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h1 class="modal-title fs-5">Pembayaran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="balance-section">
                    <h4 class="mb-4">Saldo : Rp <span class="balance-amount">{{ "Rp " . number_format(auth()->user()->wallet->balance, 2, ',', '.') }}</span></h4>
                    <h5 id="tagihan" class="tagihan-header">Tagihan :</h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a onclick="bayarTagihan()" class="btn btn-primary">Bayar</a>
            </div>
        </div>
    </div>
</div>
{{-- Modal Pembayaran --}}


<!-- Modal Detail -->
<div class="modal fade" id="modalDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Rejected</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Alasan Penolakan</h4>
                <!-- Add the following line to display the note -->
                <p id="alasanPenolakan">Reason: </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    function openModalDetail(pesananId, hargasewa) {
        $('#tagihan').text('Tagihan: ' + hargasewa);
        $('#modalDetail').modal('show');
        // console.log("Modal harga : ", hargasewa);
        // console.log("Pesanan Id : ", pesananId);
        $.ajax({
            url: '/getpemesanandetail',
            type: 'POST',
            data: {
                pesanan_ID: pesananId
            },
            success: function(response) {
                // console.log(response);
                $('#alasanPenolakan').text('Reason: ' + response);
            },
            error: function(error) {
                console.error('Complete error:', error);
            }
        });
    }
    var hargaSewa = 0;
    var pesananID = 0;

    function completeRent(pesananId) {
        pesananID = pesananId;
        console.log(pesananId);
        $.ajax({
            url: '/complete',
            type: 'POST',
            data: {
                pesanan_ID: pesananID
            },
            success: function(response) {
                console.log("Complete Success ", response);
                if (response.status == 'Success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Completed',
                        text: 'Penyewaan telah selesai',
                    }).then((result) => {
                        // Reload the page after the user clicks OK
                        if (result.isConfirmed || result.isDismissed) {
                            window.location.reload();
                        }
                    });
                }
            },
            error: function(error) {
                console.error('Complete error:', error);
            }
        });
        hargaSewa = 0;
        pesananID = 0;
    }

    function openModalPembayaran(hargasewa, pesananId) {
        hargaSewa = hargasewa;
        pesananID = pesananId;
        $('#tagihan').text('Tagihan : ' + formatCurrency(hargaSewa));
        $('#modalPembayaran').modal('show');
        console.log("Modal harga : ", hargaSewa);
        console.log("Pesanan Id : ", pesananId);
    }

    function bayarTagihan() {
        var hargasewa = hargaSewa;
        var pesanan_ID = pesananID;
        console.log("masuk", hargasewa);

        // Your AJAX request
        $.ajax({
            url: '/bayar',
            type: 'POST',
            data: {
                hargasewa: hargasewa,
                pesanan_ID: pesananID
            },
            success: function(response) {
                console.log('Payment successful:', response);
                if (response.status == 'error') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Insufficient Balance',
                        text: 'Your wallet balance is not enough for this payment.',
                    });
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'Payment Successful',
                        text: 'Your payment was successful!',
                    }).then((result) => {
                        // Reload the page after the user clicks OK
                        if (result.isConfirmed || result.isDismissed) {
                            window.location.reload();
                        }
                    });
                }
            },
            error: function(error) {
                console.error('Payment error:', error);
            }
        });

        hargaSewa = 0;
        pesananID = 0;
        $('#modalPembayaran').modal('hide');
    }

    // Loop melalui setiap elemen dengan class "formatted-price"
    document.querySelectorAll('.formatted-price').forEach(function(element) {
        // Mengambil nilai harga dari data-raw-price
        var rawPrice = element.getAttribute('data-raw-price');

        // Memformat harga dengan fungsi formatCurrency
        var formattedPrice = formatCurrency(rawPrice);

        // Mengganti teks pada elemen dengan harga yang diformat
        element.innerText = formattedPrice;
    });

    function formatCurrency(amount) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        }).format(amount);
    }
</script>

<style>
    .balance-section {
        text-align: center;
    }

    .balance-amount {
        font-size: 1.2em;
        color: #28a745; /* Warna hijau untuk menyoroti saldo */
        font-weight: bold;
    }

    .tagihan-header {
        font-size: 1.1em;
        margin-top: 10px;
        border-bottom: 2px solid #007bff; /* Garis bawah biru untuk memisahkan tagihan */
        padding-bottom: 5px;
    }
</style>

@endsection
