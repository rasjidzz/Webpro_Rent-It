@extends ('layouts.admin')

@section('content')
    <style>
        * {
            font-family: 'Open Sans', sans-serif;
        }
    </style>

    <!-- Bootstrap and jQuery Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.bundle.min.js"></script>


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
                                    <img src="{{ asset('storage/' . $imagePath) }}" class="d-block w-100 h-100"
                                        alt="{{ $info->facility->slug }}-{{ $index + 1 }}" class="rounded" width="300"
                                        height="300">
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
                            <a href="{{ asset('storage/pdf/' . $info->file_path) }}" download>{{ $info->nama_file }}</a>
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
                                <button type="button" class="btn btn-danger btn-lg" style="width: 150px;" onclick="openModalDeny({{ $info->id }})">Deny</button>
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

<!-- Deny Reservation Modal -->
<div class="modal fade" id="denyModal" tabindex="-1" role="dialog" aria-labelledby="denyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="denyModalLabel">Deny Reservation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="denyForm" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="reason" required>Reason for Denial:</label>
                        <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger mt-3">Deny Reservation</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function openModalDeny(pesananId) {
        // Set attribute 'action' of the deny form dynamically based on pesananId
        var form = document.getElementById('denyForm');
        form.action = "/admin/submission/" + pesananId + "/deny"; // Update the route

        // Clear previous reason input
        form.reason.value = "";

        // Open the deny modal
        $('#denyModal').modal('show');
    }
</script>
@endsection
