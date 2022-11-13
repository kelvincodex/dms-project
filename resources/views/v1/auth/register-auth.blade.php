@extends('v1.layout.auth-layout')
@section('content')
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="{{asset("x-assets-x/img/logo.png")}}" alt="">
                            <span class="d-none d-lg-block">{{str_replace('_', ' ', env("APP_NAME"))}}</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-2 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Sign Up</h5>
{{--                                <p class="text-center small">Enter your personal details to create account</p>--}}
                            </div>

                            <form action="{{route('register')}}" method="post" class="row g-3" >
                                @csrf
                                @if(session()->get('errorMessage'))
                                    <div class="alert alert-danger col-12">
                                        {{session()->get('errorMessage')}}
                                    </div>
                                @endif
                                <div class="col-6">
                                    <label for="yourName" class="form-label">First Name</label>
                                    <input type="text" name="userFirstName" class="form-control"  value="{{old('userFirstName')}}"   id="yourName" >
                                    @error("userFirstName")
                                    <div class="invalid-feedback d-block">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="yourName" class="form-label">Last Name</label>
                                    <input type="text" name="userLastName" class="form-control"  value="{{old('userLastName')}}"  id="yourName" >
                                    @error("userLastName")
                                    <div class="invalid-feedback d-block">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="yourEmail" class="form-label">Your Email</label>
                                    <input type="email" name="userEmail" class="form-control"  value="{{old('userEmail')}}" id="yourEmail">
                                    @error("userEmail")
                                    <div class="invalid-feedback d-block">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="yourEmail" class="form-label">User Role</label>
                                    <select class="form-select" @selected(old('userRoleId'))>
                                        <option>choose...</option>
                                        <option>Lecture</option>
                                        <option>Clark</option>
                                    </select>
                                    @error("userRole")
                                    <div class="invalid-feedback d-block">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="yourEmail" class="form-label" >Office</label>
                                    <select class="form-select" name="userOfficeId" @selected(old('userOfficeId'))>
                                        <option value="">choose...</option>
                                        <option value="1">Lecture</option>
                                        <option value="2">Clark</option>
                                    </select>
                                    @error("userOfficeId")
                                    <div class="invalid-feedback d-block">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="userPassword" class="form-control" id="yourPassword" value="{{old('userPassword')}}" >
                                    @error("userPassword")
                                    <div class="invalid-feedback d-block">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="yourPassword" class="form-label">Re-type Password</label>
                                    <input type="password" name="userPassword_confirmation" class="form-control" id="yourPassword" >

                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Already have an account? <a href="{{route('login')}}">Log in</a></p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
