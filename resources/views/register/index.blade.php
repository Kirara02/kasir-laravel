@extends('layouts.main')
@section('konten')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header bg-primary text-white"><center><h4>Form register</h4></center></div>
            <div class="card-body">
                <form action="{{ url('/register') }}" method="post">
                @csrf
                    <div class="form-group ">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" autocomplete="off" required value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" class="form-control @error('name') is-invalid @enderror" autocomplete="off" required value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" id="email" class="form-control @error('name') is-invalid @enderror" autocomplete="off" required value="{{ old('email') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control @error('name') is-invalid @enderror" autocomplete="off" required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mt-4 mb-2 justify-content-center">
                        <div class="col-12 ">
                            <center><button type="submit" class="btn btn-primary btn-center w-25" name="simpan">Register</button></center>
                        </div>
                    </div>
                </form>
                <small class="d-block text-center">Already registered? <a href="/login">Login</a></small>
            </div>
        </div>
    </div>
</div>
@endsection