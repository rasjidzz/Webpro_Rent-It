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
            @foreach ($facilities as $facility)
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div id="{{ $facility->slug }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Storage/fasilitas/{{ $facility->slug }}-2.jpg" class="d-block w-100" alt="{{ $facility->slug }}-2" class="rounded" width="300" height="300">
                                </div>
                                <div class="carousel-item">
                                    <img src="Storage/fasilitas/{{ $facility->slug }}-1.jpg" class="d-block w-100" alt="{{ $facility->slug }}-2" class="rounded" width="300" height="300">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#{{ $facility->slug }}" data-bs-slide="prev"></button>
                            <button class="carousel-control-next" type="button" data-bs-target="#{{ $facility->slug }}" data-bs-slide="next"></button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container">
                            <h4>{{ $facility->name }}</h4>
                            <div class="info">
                                @auth
                                <p>
                                    Harga : {{ $facility->harga }}
                                </p>
                                @endauth
                                <p>
                                    {{ $facility->description }}
                                </p>
                                {{-- <a class="btn btn-danger" onclick="openMoreInfoModal()">More Info</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="text-white py-1 pl-1 my-5" style="background-color: #b6252a;"></div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {!! $facilities->links() !!}
        </div>
    </div>
</section>
@endsection