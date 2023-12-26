@extends('layouts.admin')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col">
            <h1 class="text-center">
                {{ $facility->name }}
            </h1>
            <a class="btn btn-success" href="/admin/facilities">Back to All</a>
            <a href="/admin/facilities/{{ $facility->slug }}/edit" class="btn btn-warning">Edit</a>
            <form action="/admin/facilities/{{ $facility->slug }}" method="post" class="d-inline" id="deleteForm-{{ $facility->slug }}">
                @method('delete')
                @csrf
                <button class="btn btn-danger delete-btn" data-facility-id="{{ $facility->slug }}">
                    Delete
                </button>
           </form>         

           @if ($facility->image)
            <div id="{{ $facility->slug }}" class="carousel slide my-3" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach (explode(', ', $facility->image) as $index => $imagePath)
                            <div class="carousel-item{{ $index == 0 ? ' active' : '' }}">
                                <img src="{{ asset('storage/' . $imagePath) }}" class="d-block w-100" alt="{{ $facility->slug }}-{{ $index + 1 }}" class="rounded" width="300" height="300">
                            </div>
                        @endforeach
                        <button class="carousel-control-prev" type="button" data-bs-target="#{{ $facility->slug }}" data-bs-slide="prev"></button>
                        <button class="carousel-control-next" type="button" data-bs-target="#{{ $facility->slug }}" data-bs-slide="next"></button>
                    </div>
                </div>
            @else
                <div id="{{ $facility->slug }}" class="carousel slide my-3" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/Fasilitas') }}/{{ $facility->slug }}-1.jpg" class="d-block w-100" alt="{{ $facility->slug }}-2" class="rounded" width="300" height="300">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/Fasilitas') }}/{{ $facility->slug }}-2.jpg" class="d-block w-100" alt="{{ $facility->slug }}-2" class="rounded" width="300" height="300">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#{{ $facility->slug }}" data-bs-slide="prev"></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#{{ $facility->slug }}" data-bs-slide="next"></button>
                </div>
           @endif

            <p class="lead">
                Category :
                <strong>
                    {{ $facility->category->name }}
                </strong>
            </p>
            <p class="lead">
                Harga :
                <strong>
                    {{ $facility->harga }}
                </strong>
            </p>

            
            <article class="my-3 fs-5">
                {!! $facility->description !!}
            </article>
        </div>
    </div>
</div>

@endsection