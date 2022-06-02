@extends('layouts.main')
@section('konten')
<div class="row justify-content-center">
    <div class="col-md-5">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
        <div class="card">
            <div class="card-header bg-primary text-white"><center><h4>Form Login</h4></center></div>
            <div class="card-body">
                <form action="{{ url('/login/auth') }}" method="post">
                @csrf
                    <div class="form-group ">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" autocomplete="off" placeholder="mail@gmail.com" value="{{ old('email') }}">
                    </div>
                    <div class="form-group ">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="*********" autocomplete="off">
                    </div>
                    <div class="form-group mt-4 mb-2 justify-content-center">
                        <div class="col-12 ">
                            <center><button type="submit" class="btn btn-primary btn-center w-25" name="simpan">Login</button></center>
                        </div>
                    </div>
                </form>
                <small class="d-block text-center">Not registered? <a href="/register">Register Now!</a></small>
            </div>
        </div>
    </div>
</div>
@endsection