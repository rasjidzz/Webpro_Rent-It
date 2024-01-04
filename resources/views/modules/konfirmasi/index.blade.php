@extends('layouts.main')

@section('container')
    {{-- <section> --}}
    <div class="container">
        <h1 class="text-center fw-bold" style="margin-bottom: 5%; margin-top: 5%;">KONFIRMASI</h1>
        <div class="row">
            <div class="col">
                <div class="auto" style="margin-bottom: 10%;">
                    <h2 style="font-size: 25px; font-weight: bold;">Fasilitas Yang Dipinjam</h2>
                    <div class="d-flex" style="background-color: #ECE8E8;">
                        <img src="Assets/GKU.jpg" heigth="" width="200px" class="w-20" alt="GKU" />
                        <div class="my-auto ms-2">
                            <h2 class="fs-2 fw-3" style="margin-bottom: 5%;">Gedung kuliah umum</h2>
                            <h3 style="color: #9F1521; font-weight: 400; font-size: 25px;">Rp 500.000.00</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form action="/book" method="POST" enctype="multipart/form-data">
            @csrf
            <input hidden type="text" class="form-control" id="user_id" name="user_id" value="{{ $user_id }}">
            <input hidden type="text" class="form-control" id="facility_id" name="facility_id"
                value="{{ $facility_id }}">
            <input hidden type="text" class="form-control" id="nama" name="nama" value="{{ $nama }}">
            <input hidden type="text" class="form-control" id="nim" name="nim" value="{{ $nim }}">
            <input hidden type="text" class="form-control" id="email" name="email" value="{{ $email }}">
            <input hidden type="text" class="form-control" id="noTel" name="noTel" value="{{ $noTel }}">
            <input hidden type="text" class="form-control" id="tanggalSewa" name="tanggalSewa"
                value="{{ $tanggalSewa }}">
            <input type="file" class="form-control" id="file" name="file" value="{{ $file }}">



            {{-- <h2 style="font-size: 25px; font-weight: bold;">Metode Pembayaran</h2> --}}
            <div class="row">
                <div class="col" style="margin-bottom: 7%">
                    <a class="btn btn-danger mb-5" id="" onclick="openModal()"
                        style="
            color: rgb(255, 255, 255);
            font-weight: bold;
            border-radius: 10px;
            font-size: 25px;
            height: auto;
            width: auto;
            ">Book
                        Now!</a>
                </div>
            </div>

            <div class="modal" tabindex="-1" id="Notif">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Notification!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Terima kasih sudah melakukan pemesanan, tunggu konfirmasi dari admin untuk
                                tahap selanjutnya
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" href="/homepage">Kembali Ke-Home</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <script>
        function openModal() {
            $('#Notif').modal('show');
        }
        openModal();
    </script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap");

        .modal-dialog {
            animation: bounce-in 0.5s;
        }

        @keyframes bounce-in {
            0% {
                transform: scale(0);
            }

            50% {
                transform: scale(1.5);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
    {{-- </section> --}}
@endsection
