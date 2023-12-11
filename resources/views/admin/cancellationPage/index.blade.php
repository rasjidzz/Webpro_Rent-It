@extends ('layouts.admin')

@section('content')
    <style>
        * {
            font-family: 'Open Sans', sans-serif;
        }
    </style>

    <div class="container-lg justify-content-center">
        <h1 class="text-center mt-5 mb-5">Pembatalan</h1>

        <div class="card card-body" style="background-color: #F4F5F6;">
            <table class="table table-responsive table-hover">
                <thead style="background-color: #D32B31; color:azure">
                    <tr>
                        <th scope="col" style="width: 200px;">Gedung</th>
                        <th scope="col" style="width: 300px;">Peminjam</th>
                        <th scope="col" style="width: 150px;">NIM</th>
                        <th scope="col" style="width: 150px;">No Telepon</th>
                        <th scope="col" style="width: 150px;">Dokumen</th>
                        <th scope="col" style="width: 150px;">Tanggal Pinjam</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="Assets/GedungPerkuliahan/TULT/TULT-2.jpg" alt="Gedung" width="90px"
                                height="90px">
                        </td>
                        <td>
                            <p>GIFARI JULIANDRI</p>
                        </td>
                        <td>
                            <p>1302210087</p>
                        </td>
                        <td>
                            087722437635
                        </td>
                        <td>
                            <a href="Assets/PDF/PBO_MOD7_BELLA HUTAURUK_1301213327_SUI.pdf" download>docs1</a><br>
                            <a href="Assets/PDF/TP_MOD7_1301210110_Maharani_Salsabila.pdf" download>docs2</a>
                        </td>
                        <td>
                            Senin, 16:30 - 18.30
                        </td>
                        <td class="align-middle">
                            <button type="button" class="btn btn-success btn-lg" style="width: 150px;">Done</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="Assets/Olahraga/LapanganTennis/Tennis-2.jpg" alt="Olahraga" width="90px"
                                height="90px" id="gambar_lapangan">
                        </td>
                        <td>
                            <p>UJANG KAYAT</p>
                        </td>
                        <td>
                            <p>1302190021</p>
                        </td>
                        <td>
                            085624715252
                        </td>
                        <td>
                            <a href="Assets/PDF/PBO_MOD7_BELLA HUTAURUK_1301213327_SUI.pdf" download>docs1</a><br>
                            <a href="Assets/PDF/TP_MOD7_1301210110_Maharani_Salsabila.pdf" download>docs2</a>
                        </td>
                        <td>
                            Sabtu, 07:30 - 09.30
                        </td>
                        <td class="align-middle">
                            <button type="button" class="btn btn-success btn-lg" style="width: 150px;">Done</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
