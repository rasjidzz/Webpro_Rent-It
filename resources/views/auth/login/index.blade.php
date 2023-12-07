@extends('layouts.main')

@section('container')
<style>
  .card-body{
    background-color: #ed1e28;
  }
</style>
<div class="row justify-content-center my-5">
    <div class="col-lg-4">

      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin w-100 m-auto">
            <h3 class="text-center ">Hello</h3> 
            <h1 class=" mb-3 fw-normal text-center">Welcome to Rent-It !</h1>
            <div class="card-body rounded">
              <div class="px-3 mt-2">
                <h4 class="text-center text-white">Login</h4>
                <form action="/login" method="POST">
                  @csrf
                  <div class="form-group mt-2">
                      <label for="username" class="label-access text-white mb-2">
                        Email
                      </label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required autofocus value="{{ old('email') }}">
                      @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                  </div>
                  <div class="form-group mt-3">
                    <label for="userpassword" class="text-white mb-2">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                  </div>
                  <button class="btn btn-light btn-round btn-block w-100 text-dark mt-4">Login</button>
                </form>
                <small class="d-block text-center mt-3">
                    Not registered ? 
                    <a href="/register" class="text-decoration-none">Register now</a>
                </small>
              </div>
            </div>
          </main>
    </div>
</div>
@endsection