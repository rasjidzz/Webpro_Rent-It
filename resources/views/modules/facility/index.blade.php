@extends('layouts.main')

@section('container')
<section>
    <div class="container">
        <div class="row my-5">
            <div class="page-header text-center">
                <div class="container">
                    <h2 class="mx-auto fw-bolder">Telkom University Facility</h2>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div id="gedungTULT" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Assets/GedungPerkuliahan/TULT/TULT-2.jpg" class="d-block w-100" alt="tult1" class="rounded" width="300" height="300">
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/GedungPerkuliahan/TULT/TULT-1.jpeg" class="d-block w-100" alt="tult2" class="rounded" width="300" height="300">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#gedungTULT" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#gedungTULT" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container">
                            <h4>TULT</h4>
                            <div class="info">
                                <p>
                                    Gedung perkuliahan "TULT" merupakan tempat yang ideal untuk berbagai kegiatan akademis dan non-akademis.
                                    Kelas-kelas di gedung ini dirancang untuk memfasilitasi pembelajaran yang efektif dan suasana yang kondusif.
                                    Setiap ruangan dilengkapi dengan peralatan modern, seperti proyektor, layar proyeksi, dan papan tulis interaktif.
                                </p>
                                <a class="btn btn-danger" onclick="openMoreInfoModal()">More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-white py-1 pl-1 my-5" style="background-color: #b6252a;"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div id="gedungGKU" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Assets/GedungPerkuliahan/GKU/GKU-1.jpg" class="d-block w-100" alt="tult2" class="rounded" width="300" height="300">
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/GedungPerkuliahan/GKU/GKU-2.jpg" class="d-block w-100" alt="tult2" class="rounded" width="300" height="300">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#gedungGKU" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#gedungGKU" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container">
                            <h4>Gedung Kuliah Umum</h4>
                            <div class="info">
                                <p>
                                    Gedung perkuliahan "GKU" menyediakan fasilitas kelas yang dapat disewa untuk berbagai keperluan.
                                    Setiap kelas didesain dengan perhatian khusus untuk menciptakan lingkungan belajar yang optimal.
                                    Fasilitas modern, seperti proyektor, layar proyeksi, dan papan tulis interaktif, tersedia untuk mendukung
                                    kegiatan pembelajaran yang efektif.
                                </p>
                                <a class="btn btn-danger">More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-white py-1 pl-1 my-5" style="background-color: #b6252a;"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div id="lapanganTennis" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Assets/Olahraga/lapanganTennis/Tennis-1.jpeg" class="d-block w-100" alt="tult1" class="rounded" width="300" height="300">
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/Olahraga/lapanganTennis/Tennis-2.jpg" class="d-block w-100" alt="tult2" class="rounded" width="300" height="300">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#lapanganTennis" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#lapanganTennis" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container">
                            <h4>Lapangan Tennis</h4>
                            <div class="info">
                                <p>
                                    Lapangan tennis universitas adalah fasilitas olahraga yang luar biasa dan dapat dijadikan tempat yang ideal untuk berbagai kegiatan yang melibatkan aktivitas fisik dan rekreasi.
                                    Lapangan tennis di universitas kami memiliki ciri khas yang membuatnya menjadi pilihan yang tepat untuk disewa.
                                </p>
                                <a class="btn btn-danger">More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-white py-1 pl-1 my-5" style="background-color: #b6252a;"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div id="lapanganBasket" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Assets/Olahraga/LapanganBasket/Basket-1.jpeg" class="d-block w-100" alt="tult1" class="rounded" width="300" height="300">
                                </div>
                                <div class="carousel-item">
                                    <img src="Assets/Olahraga/LapanganBasket/Basket-2.jpeg" class="d-block w-100" alt="tult2" class="rounded" width="300" height="300">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#lapanganBasket" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#lapanganBasket" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container">
                            <h4>Lapangan Basket</h4>
                            <div class="info">
                                <p>
                                    Lapangan basket universitas kami adalah tempat yang dinamis dan energik yang dapat disewa untuk berbagai kegiatan.
                                    Dirancang untuk memenuhi standar tertinggi, lapangan basket ini menjadi pilihan ideal untuk melibatkan komunitas dalam olahraga, rekreasi,
                                    dan kegiatan sosial.
                                </p>
                                <a class="btn btn-danger">More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-white py-1 pl-1 my-5" style="background-color: #b6252a;"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection