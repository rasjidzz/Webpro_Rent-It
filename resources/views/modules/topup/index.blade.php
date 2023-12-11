@extends('layouts.main')

@section('container')


<div class="container my-5">
    <h1 class="text-center fw-bold mb-5">TOP UP</h1>
    <h3 class="text-center fw-bold mb-1">Saldo Anda: Rp 10.000.00</h3>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-4" style="margin-bottom: 33%;">
                <div class="card-body mb-4">
                    <form action="/modules/homepage" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="balance_option" class="mb-4 fw-bold text-center">Select Balance</label>
                            <div class="row row-cols-2 justify-content: center">
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-danger btn-lg mb-3"  style="width: 80%;" name="balance_option"
                                        value="25000">Rp 25,000,00</button>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-danger btn-lg" style="width: 80%;" name="balance_option"
                                        value="50000">Rp 50,000,00</button>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-danger btn-lg mb-3" style="width: 80%;" name="balance_option"
                                        value="100000">Rp 100,000,00</button>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-danger btn-lg" style="width: 80%;" name="balance_option"
                                        value="250000">Rp 250,000,00</button>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-danger btn-lg" style="width: 80%;" name="balance_option"
                                        value="500000">Rp 500,000,00</button>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-danger btn-lg" style="width: 80%;" name="balance_option"
                                        value="1000000">Rp 1,000,000,00</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .row-cols-2 {
        justify-content: center;
    }

    .card-body {
        display: flex;
        align-items: center;
        text-align: center;
    }
</style>

@endsection