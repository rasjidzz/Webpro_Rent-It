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
                        <th scope="col" style="width: 150px;">Tanggal Pinjam</th>
                        <th scope="col" style="width: 300px;">Peminjam</th>
                        <th scope="col" style="width: 150px;">NIM</th>
                        <th scope="col" style="width: 150px;">No Telepon</th>
                        <th scope="col" style="width: 150px;">Note</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cancelation as $info)
                        <tr>
                            <td>
                                {{ $info->facility->name }}
                            </td>
                            <td>
                                {{ $info->tanggal_pemesanan }}
                            </td>
                            <td>
                                {{ $info->user->name }}
                            </td>
                            <td>
                                {{ $info->user->nim }}
                            </td>
                            <td>
                                {{ $info->nomor_tlp }}
                            </td>
                            <td>
                                {{ $info->note }}
                            </td>
                            <td>
                                {{ $info->status }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
