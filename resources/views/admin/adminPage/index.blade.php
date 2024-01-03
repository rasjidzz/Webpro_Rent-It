@extends ('layouts.admin')

@section('content')

    <body style="background-color: #EDF0F5;">
        <div class="d-flex flex-column w-100">
            <div class="container text-center mt-3">
                <div class="row">
                    <div class="col-lg-3" id="submission">
                        <a href="/admin/reservasi" class="text-decoration-none text-dark">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-8 align-self-center text-start">
                                                <h5>{{ $countSubmission }}</h5>
                                                <p class="text-muted mb-0">Submission</p>
                                            </div>
                                            <div class="col-4">
                                                <i class="mdi mdi-file-account" style="font-size: 40px; color: #0366e4"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3" id="history">
                        <a href="/admin/history" class="text-decoration-none text-dark">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-8 align-self-center text-start">
                                                <h5>{{ $countHistory }}</h5>
                                                <p class="text-muted mb-0">History</p>
                                            </div>
                                            <div class="col-4">
                                                <i class="mdi mdi-account-check" style="font-size: 40px; color: green"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="/admin/kerusakan" class="text-decoration-none text-dark">
                            <div class="card shadow-sm" id="report">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-8 align-self-center text-start">
                                                <h5>{{ $countDamage }}</h5>
                                                <p class="text-muted mb-0">Damage report</p>
                                            </div>
                                            <div class="col-4">
                                                <i class="mdi mdi-account-alert" style="font-size: 40px; color: black"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3" id="cancellation">
                        <a href="/admin/cancellation" class="text-decoration-none text-dark">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-8 align-self-center text-start">
                                                <h5>{{ $countCancel }}</h5>
                                                <p class="text-muted mb-0">Cancellation</p>
                                            </div>
                                            <div class="col-4">
                                                <i class="mdi mdi-account-cancel"
                                                    style="font-size: 40px; color: #980700"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <div class="text-white py-2 pl-2 sticky-top" style="background-color: #b6252a;"></div> -->


    </body>
@endsection
