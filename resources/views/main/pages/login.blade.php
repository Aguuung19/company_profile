@extends('layouts.main')

@section('content')
    <section class="login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            @if(session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{session('loginError')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <h1 class="login-header">Login</h1>                            
                        </div>
                        <div class="col-12">
                            <div class="login-box">
                                <form action="{{url('/user-login')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="login-label" for="email">Email :</label>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}" autofocus required>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>                                            
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="login-label" for="password">Password :</label>
                                        <input type="password" name="password" class="form-control" id="password" required>
                                    </div>
                                    <button class="w-100 btn btn-login" type="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection