@extends ('layouts.admin')

@section('content')
    <style>
        * {
            font-family: 'Open Sans', sans-serif;
        }

        /* @media screen(765px) {
        
        } */
        .card-body {
            border: 2.5px solid #D80032
        }
    </style>

    <div class="container justify-content-center text-center">
        <div class="row justify-content-between w-100">
            <div class="col-lg-6 my-0" id="box1">
                <div class="card shadow-sm mt-4 ">
                    <div class="card-body d-flex align-items-center ">
                        <div class="icon-contain">
                            <div class="row d-flex justify-content-between">
                                <div class="col-md-7 align-self-center">
                                    <img src="Assets/Fasilitas/GKU-1.jpg" alt="GKU" width="100%"
                                        style="max-width: 400px; height: auto;">
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="card-text mt-2" style=" font-size: 15px;">
                                        Surya Aulia<br>
                                        1302210084<br>
                                        S1 Rekayasa Perangkat Lunak<br>
                                        081223344556 <br>
                                        <a href = "">Peminjaman.pdf</a><br><br><br><br>
                                        6 November 2023
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="box2">
                <div class="card shadow-sm mt-4">
                    <div class="card-body d-flex ">
                        <div class="icon-contain">
                            <div class="row d-flex justify-content-between">
                                <div class="col-md-7 align-self-center">
                                    <img src="Assets/GedungPerkuliahan/GKU/GKU-1.jpg" alt="GKU" width="100%"
                                        style="max-width: 400px; height: auto;">
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="card-text mt-2" style="font-size: 15px;">
                                        Stevent Rangga Ramaditya<br>
                                        1302210106<br>
                                        S1 Rekayasa Perangkat Lunak<br>
                                        089999999999 <br>
                                        <a href = "">Peminjaman.pdf</a><br><br><br><br>
                                        3 November 2023
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="box3">
                <div class="card shadow-sm mt-4 ">
                    <div class="card-body d-flex">
                        <div class="icon-contain">
                            <div class="row d-flex justify-content-between">
                                <div class="col-md-7 align-self-center">
                                    <img src="Assets/GedungPerkuliahan/GKU/GKU-1.jpg" alt="GKU" width="100%"
                                        style="max-width: 400px; height: auto;">
                                </div>
                                <div class="col-md-5 text-end">
                                    <p class="card-text mt-2" style=" font-size: 15px;">
                                        Gifari Juliandri<br>
                                        1302210087<br>
                                        S1 Rekayasa Perangkat Lunak<br>
                                        088978675645 <br>
                                        <a href = "">Peminjaman.pdf</a><br><br><br><br>
                                        10 November 2023
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
