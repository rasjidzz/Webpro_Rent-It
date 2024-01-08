@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center border-bottom pt-3 pb-2 mb-3">
        <h1>Add New Facility</h1>
    </div>
    
    <div class="col">
        <form method="POST" action="/admin/facilities" enctype="multipart/form-data">
            @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nama Fasilitas</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{ old('name') }}">
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly value="{{ old('slug') }}">
                @error('slug')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id" id="category_id">
                  <option selected>Select Category</option>
                  @foreach ($categories as $category)
                  @if (old('category_id') == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>            
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>            
                  @endif
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Harga Fasilitas</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" inputmode="numeric" pattern="[0-9]*" value="{{ old('price') }}">
                  @error('price')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
              </div>            
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                {{-- <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"> --}}
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                @error('description')
                <p class="text-danger">
                  {{ $message }}
                </p>
                @enderror
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Image 1</label>
                <img class="img-preview-1 img-fluid mb-3 col-sm-5">
                <input type="file" class="form-control @error('image.0') is-invalid @enderror" id="image" name="image[]" onchange="previewImage()">
                @error('image.0')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                  <label for="image2" class="form-label">Image 2</label>
                  <img class="img-preview-2 img-fluid mb-3 col-sm-5">
                  <input type="file" class="form-control @error('image.1') is-invalid @enderror" id="image2" name="image[]" onchange="previewImage2()">
                  @error('image.1')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
              </div>
            <button type="submit" class="btn btn-danger">Add Facility</button>
        </form>
    </div>
</div>

<script>
  const title = document.querySelector('#name');
  const slug = document.querySelector('#slug');

  title.addEventListener('input', function(){
      const titleValue = title.value.trim().toLowerCase();
      const slugValue = titleValue.replace(/[^a-z0-9-]+/g, '-');
      slug.value = slugValue;
  });

  // const image2 = document.querySelector("#image2");

  function previewImage(){
    const image1 = document.querySelector("#image");
    const imgPreview1 = document.querySelector(".img-preview-1");

    imgPreview1.style.display = "block";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image1.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview1.src = oFREvent.target.result;
    }
  }
  function previewImage2(){
    const image2 = document.querySelector("#image2");
    const imgPreview2 = document.querySelector(".img-preview-2");

    imgPreview2.style.display = "block";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image2.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview2.src = oFREvent.target.result;
    }
  }
</script>


@endsection