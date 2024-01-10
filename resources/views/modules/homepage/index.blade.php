@extends('layouts.main')

@section('container')
    <style>
        .background-row {
            background-image: url("/Assets/tult.jpg");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 900px;
        }

        .btn-hover:hover {
            cursor: pointer;
            border: 0px;
            color: white !important;
            background-color: #9f1521;
        }

        .btn-hover:focus {
            cursor: pointer;
            border: 0px;
            color: white !important;
            background-color: #9f1521;
        }
    </style>
    <section>
        @if(session('failed'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oh no...',
                    text: '{{ session('failed') }}',
                })
            </script>
        @endif

        <!-- img background and buttton in img -->
        <div class="row background-row d-flex container-fluid" style="align-items: end; justify-content: center">
            <div class="d-flex" style="justify-content: center">
                <button id="btn_gedung" class="text-danger border-0 fs-2 col-sm-2 p-3 btn-hover" data-bs-toggle="collapse"
                    data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">
                    Gedung
                </button>

                <button id="btn_kelas" class="text-danger border-0 fs-2 col-sm-2 p-3 btn-hover" data-bs-toggle="collapse"
                    data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                    Kelas
                </button>

                <button id="btn_Olahraga" class="text-danger border-0 fs-2 col-sm-2 p-3 btn-hover text-center"
                    data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false"
                    aria-controls="multiCollapseExample3">
                    Olahraga
                </button>
            </div>
        </div>

        <!-- button collapse for gedung -->
        <div class="container px-0" style="margin-top: 20px;">
            <div class="row mx-0">
                <div class="collapse " id="multiCollapseExample1" style="width :100%; padding-left: 0;padding-right: 0;">
                    <div class="card card-body">
                        <div class="dropdown row">
                            {{-- COBA --}}
                            <div class="col-lg-6">
                                <p class="fs-1">Gedung</p>
                                <form action="/checkAvailability" method="POST">
                                    @csrf
                                    <select class="form-select form-select-lg mb-3 col-4" aria-label="Large select example" name="facility_id" id="facility_id">
                                        <option selected>Pilih gedung</option>
                                        @foreach ($buildings as $building)
                                        <option value="{{ $building->id }}">{{ $building->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <p class="fs-1">Tanggal</p>
                                    <input type="date" class="form-control  form-select-lg mb-3 col-4" name="tanggalSewa" id="tanggalSewa" required>
                                    <button class="btn" type="submit" style="background-color: #9f1521; color: #fff;border-color: #9f1521;">Submit</button>
                                </div>
                            </form>
                            {{-- COBA --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- button collapse for Kelas -->
        <div class="container px-0 ">
            <div class="row">
                <div class="collapse" id="multiCollapseExample2" style="width :100% ">
                    <div class=" card card-body">
                        <div class="dropdown row">
                            <div class="col-lg-6 ">
                                <form action="/checkAvailabilityKelas" method="POST">
                                    @csrf
                                    <p class="fs-1">Gedung</p>
                                    <select class="form-select form-select-lg mb-3 col-4" aria-label="Large select example"
                                    onchange="updateKelas()" id="gedungPerkuliahan" name="gedungPerkuliahan">
                                    <option selected>Pilih gedung</option>
                                    @foreach ($classes as $gedung)
                                    <option value="{{ $gedung->id }}">{{ $gedung->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <p class="fs-1">Kelas</p>
                                <select class="form-select form-select-lg mb-3 col-4" aria-label="Large select example" id="kelasPerkuliahan" name="kelasPerkuliahan">
                                    <option selected>Pilih Kelas</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <p class="fs-1">Tanggal</p>
                                <input type="date" class="form-control  form-select-lg mb-3 col-4" id="tanggal_sewa" aria-label="Large select example" placeholder="Contoh : 12.30-15.30" name="tanggal_sewa">
                                <div class="col" style="padding-top: 20px;">
                                    {{-- <a class="btn" href="#" style="background-color: #9f1521; color: #fff;border-color: #9f1521; " onclick="checkAvailabilityKelas()">Submit</a> --}}
                                    <button class="btn" type="submit" style="background-color: #9f1521; color: #fff;border-color: #9f1521; ">Submit</button>
                                </div>
                            </div>
                        </form>                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- button collapse for Sport -->
            <div class="row g-1">
                <div class="collapse" id="multiCollapseExample3" style="width :100%">
                    <div class=" card card-body">
                        <div class="dropdown row">
                            <div class="col-lg-6 ">
                                <p class="fs-1">Sport</p>
                                <!-- View -->
                                <form action="/checkAvailability" method = "POST">
                                    @csrf
                                    <select class="form-select form-select-lg mb-3 col-4" aria-label="Large select example" id="facility_id" name="facility_id">
                                        <option selected>Pilih Lapangan</option>
                                        @foreach ($sports as $sport)
                                        <option value="{{ $sport->id }}">{{ $sport->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <p class="fs-1">Tanggal</p>
                                    <input type="date" id="tanggalSewa" name="tanggalSewa" class="form-control  form-select-lg mb-3 col-4">
                                    <button class="btn" type="submit" style="background-color: #9f1521; color: #fff;border-color: #9f1521;">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h1 class="text-center fs-2  mb-4" style="color: #9f1521; padding-top: 100px;">About Rentit </h1>
        </div>

        <!-- acordion for about Rentit -->
        <div class="container col-6 mb-5">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <strong>Apa itu Rentit ?</strong>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Merupakan Aplikasi yang dapat digunakan untuk meminjam fasilitas. Kami dapat meminjam kan
                            fasilitas seperti gedung, kelas, dan bahkan lapangan untuk melakukan aktivitas olahraga.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong>Memudahkan Untuk melakukan peminjaman</strong>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Dengan adanya aplikasi ini kami berharap dapat memudahkan mahasiswa Telkom untuk melakukan
                            peminjaman fasilitas yang ada di telkom university. Aplikasi ini dapat digunakan untuk meminjam
                            fasilitas secara online dan terstruktur.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong>Mempercepat untuk melakukan peminjaman</strong>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quos quam blanditiis officiis
                            ipsam explicabo eius, harum deserunt aliquam, numquam pariatur at velit eos. Dolores maiores
                            consequuntur officiis explicabo ullam.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script>
        // Handle collapse for Gedung button
        $('#btn_gedung').on('click', function() {
            $('#multiCollapseExample2, #multiCollapseExample3').collapse('hide');
        });

        // Handle collapse for Kelas button
        $('#btn_kelas').on('click', function() {
            $('#multiCollapseExample1, #multiCollapseExample3').collapse('hide');
        });

        // Handle collapse for Olahraga button
        $('#btn_Olahraga').on('click', function() {
            $('#multiCollapseExample1, #multiCollapseExample2').collapse('hide');
        });

        function updateKelas() {
            var gedung = document.getElementById('gedungPerkuliahan').value;
            // console.log(gedung);
            $.ajax({
                type: 'POST',
                url: '/updateKelas',
                data: {
                    facility_id: gedung,
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    var dropdown = $('#kelasPerkuliahan');
                    dropdown.empty();

                    if (response.length != 0) {
                        for (var i = 0; i < response.length; i++) {
                            var room = response[i]['room'];
                            var idRoom = response[i]['id'];
                            var option = $('<option></option>').attr('value', idRoom).text(room);
                            dropdown.append(option);
                        }
                    } else {
                        var defaultOption = $('<option></option>').attr('value', '').text('Pilih Kelas');
                        dropdown.append(defaultOption);
                    }
                },
                error: function(xhr, status, error) {
                    // Handle kesalahan jika terjadi
                    console.error(error);
                }
            })
        }

        // function checkAvailabilityKelas() {
        //     var gedungPerkuliahan = document.getElementById('gedungPerkuliahan').value;
        //     var tanggalPinjam = document.getElementById('tanggal_sewa').value;
        //     var kelasPerkuliahan = document.getElementById('kelasPerkuliahan').value;

        //     $.ajax({
        //         type: 'POST',
        //         url: '/checkAvailabilityKelas',
        //         data: {
        //             gedung_perkuliahan: gedungPerkuliahan,
        //             tanggal_pinjam: tanggalPinjam,
        //             kelas_perkuliahan: kelasPerkuliahan,
        //             _token: '{{csrf_token()}}'
        //         },
        //         success: function(response){
        //             console.log(response);
        //         },
        //         error: function(xhr, status, error){
        //             console.log(error);
        //         }
        //     })

        //     console.log('Gedung Perkuliahan : ', gedungPerkuliahan);
        //     console.log('Kelas Perkuliahan : ', kelasPerkuliahan);
        //     console.log('Tanggal Sewa : ', tanggalPinjam);
        // }


    </script>
@endsection
