@extends('layouts.main')

@section('container')

<div class="bg-image">
  <img src='Assets/GKU.jpg' class="w-100" />
  <div class="mask text-light d-flex justify-content-center flex-column text-center" style="background-color: rgba(0, 0, 0, 0.5)">
    <h4 class="display-6">Selamat Datang di Rent-It</h4>
    <h6>Login for more information ! </h6>
    <div class="container">
      <a href="/login" class="btn btn-danger">Login</a>
    </div>
  </div>
</div>

<div class="container-fluid py-5 fasilitas">
  <div class="container text-center">
    <div class="container px-4 py-5" id="featured-3">
      <h2 class="display-3" id="fasilitas">Fasilitas</h2>
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
            <img src="/Assets/gedung.png" alt="" style="max-width: 70px;">
          </div>
          <h3 class="fs-2 text-body-emphasis">Gedung</h3>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>
        <div class="feature col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
            <img src="/Assets/olahraga.png" alt="" style="max-width: 70px;">
          </div>
          <h3 class="fs-2 text-body-emphasis">Olahraga</h3>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>
        <div class="feature col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3">
            <img src="/Assets/kelas.png" alt="" style="max-width: 70px;">
          </div>
          <h3 class="fs-2 text-body-emphasis">Kelas</h3>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
