@extends('layouts.main')

@section('container')
<style>
  .card-body {
    background-color: #ed1e28;
  }
</style>
<div class="row justify-content-center my-5">
    <div class="col-lg-4">
        <main class="form-registration w-100 m-auto">
          <h3 class="text-center ">Hello</h3> 
          <h1 class=" mb-3 fw-normal text-center">Welcome to Rent-It !</h1>
          <div class="card-body rounded">
            <div class="px-3 mt-2">
              <h4 class="text-center text-white">Register</h4>
              <form action="/register" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label class="label-access text-white mb-2">Full Name</label>
                    <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Full Name" name="name" required value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                  <div class="form-group mt-3">
                    <label class="label-access text-white mb-2">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Full Name" name="username" required value="{{ old('username') }}">
                    @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group mt-3">
                    <label class="label-access text-white mb-2">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group mt-3">
                    <label class="label-access text-white mb-2">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="NIM" name="nim" required value="{{ old('nim') }}" maxlength="10">
                    @error('nim')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                <div class="form-group mt-3">
                  <label class="label-access text-white mb-2">Password</label>
                  <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-light btn-round btn-block w-100 text-dark w-100 py-2 mt-4" type="submit">Register</button>
              </form>
              <small class="d-block text-center mt-3">
                  Already registered ?  
                  <a  href="/login">Login</a>
              </small>
            </div>
          </div>
          </main>
    </div>
</div>
@endsection