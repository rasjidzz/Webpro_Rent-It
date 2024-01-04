@extends ('layouts.admin')

@section('content')
    <style>
        * {
            font-family: 'Open Sans', sans-serif;
        }
    </style>

    <div class="container-lg justify-content-center">
        <h1 class="text-center mt-5 mb-5">Permintaan Reservasi</h1>
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card card-body" style="background-color: #F4F5F6;">
            <table class="table table-responsive table-hover">
                <thead style="background-color: #D32B31; color:azure">
                    <tr>
                        <th scope="col" style="width: 250px;">Photo</th>
                        <th scope="col" style="width: 200px;">Gedung</th>
                        <th scope="col" style="width: 300px;">Peminjam</th>
                        <th scope="col" style="width: 150px;">NIM</th>
                        <th scope="col" style="width: 150px;">No Telepon</th>
                        <th scope="col" style="width: 150px;">Dokumen</th>
                        <th scope="col" style="width: 200px;">Tanggal Pinjam</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesananFasilitas as $info)
                        <tr>
                            <td>
                                {{-- <img src="{{ asset($info->facility->image) }}" alt="{{ $info->facility->slug }}" width="90px" height="90px" name="{{ $info->facility->slug }}"> --}}
                                @foreach (explode(', ', $info->facility->image) as $index => $imagePath)
                                    <img src="{{ asset('storage/' . $imagePath) }}" class="d-block w-100 h-100" alt="{{ $info->facility->slug }}-{{ $index + 1 }}" class="rounded" width="300" height="300">
                                    @break
                                @endforeach
                            </td>
                            <td>
                                <p>{{ $info->facility->name }}</p>
                            </td>
                            <td>
                                <p name="nama_user">{{ $info->user->name }}</p>
                            </td>
                            <td>
                                <p name="nim_user">{{ $info->user->nim }}</p>
                            </td>
                            <td>
                                <p name="tlp_user">{{ $info->nomor_tlp }}</p>
                            </td>
                            <td>
                                <a href="Assets/PDF/{{ $info->file_path }}" download>{{ $info->nama_file }}</a>
                            </td>
                            <td>
                                <p name="tgl_pinjam">{{ $info->tanggal_pemesanan }}</p>
                            </td>
                            <td>
                                <form action="{{ route('submission.approve', ['id' => $info->id]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-lg"
                                        style="width: 150px;">Accept</button>
                                </form>
                                <br>
                                <form action="{{ route('submission.deny', ['id' => $info->id]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-lg" style="width: 150px;">Deny</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $pesananFasilitas->links() !!}
            </div>
        </div>
    </div>
@endsection
