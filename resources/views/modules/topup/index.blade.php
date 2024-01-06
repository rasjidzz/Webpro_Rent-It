@extends('layouts.main')

@section('container')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />

    <div class="container my-5">
        <h1 class="text-center fw-bold mb-5">TOP UP</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h3 class="text-center fw-bold mb-1" id="saldo">Saldo Anda: Rp
            {{ number_format(auth()->user()->wallet->balance, 0, ',', '.') }}
        </h3>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mt-4" style="margin-bottom: 33%;">
                    <div class="card-body mb-4">
                        <form id="topupForm">
                            <input type="hidden" id="selectedBalance" name="selected_balance" value="">
                            <div class="form-group">
                                <label for="balance_option" class="mb-4 fw-bold text-center">Select Balance</label>
                                <div class="row row-cols-2 justify-content: center">
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-danger btn-lg mb-3"
                                            style="width: 80%;" name="balance_option" value="25000">Rp 25,000,00</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-danger btn-lg" style="width: 80%;"
                                            name="balance_option" value="50000">Rp 50,000,00</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-danger btn-lg mb-3"
                                            style="width: 80%;" name="balance_option" value="100000">Rp 100,000,00</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-danger btn-lg" style="width: 80%;"
                                            name="balance_option" value="250000">Rp 250,000,00</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-danger btn-lg" style="width: 80%;"
                                            name="balance_option" value="500000">Rp 500,000,00</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-danger btn-lg" style="width: 80%;"
                                            name="balance_option" value="1000000">Rp 1,000,000,00</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" tabindex="-1" id="topupModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="modalContent"></p>
                </div>
                <div class="modal-footer">
                    <button id="tutup" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="proses">Proses</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            // Fungsi untuk menangani klik pada tombol saldo
            $('button[name="balance_option"]').click(function() {
                var selectedBalance = $(this).val();
                $('#selectedBalance').val(selectedBalance);
                $('#modalContent').text('Anda akan melakukan topup sebesar Rp ' + numberWithCommas(
                    selectedBalance));
                $('#topupModal').modal('show');
            });

            // Event handler ketika tombol proses di dalam modal ditekan
            $('#proses').on('click', function() {
                var selectedBalance = $('#selectedBalance').val(); // Mendapatkan nilai saldo yang dipilih
                $('#topupModal').modal('hide'); // Menutup modal ketika tombol Batal ditekan

                // Memanggil topup.store menggunakan Ajax
                $.ajax({
                    type: 'POST',
                    url: '{{ route('topup.store') }}',
                    data: {
                        selected_balance: selectedBalance,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        console.log('Top-up successful');
                    },
                    error: function(error) {
                        console.error('Error during top-up');
                    }
                });
                location.reload(); // Merefresh halaman setelah menutup modal
            });
        });

        // Event handler ketika tombol Close di dalam modal ditekan
        $('#tutup').on('click', function() {
            $('#topupModal').modal('hide'); // Menutup modal ketika tombol Batal ditekan
        });

        // Fungsi untuk menambahkan pemisah ribuan pada nilai saldo
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    </script>

    <style>
        .card-body {
            display: flex;
            align-items: center;
            text-align: center;
        }
    </style>
@endsection
