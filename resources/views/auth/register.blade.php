@extends('fontend.layout.master')
@section('content')
    <!-- Login 6 - Bootstrap Brain Component -->
    <section class="bg-primary p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">
                                        <h3>Create Account</h3>
                                    </div>
                                </div>
                            </div>
                            <form action="" method="POST">
                                @csrf
                                <div class="row gy-3 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input value="{{old('name')}}" type="name" class="form-control @error('name')
                                            is-invalid
                                            @enderror" name="name" id="name"
                                                placeholder="Enter Your Name" required>
                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <label for="name" class="form-label">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input value="{{old('email')}}" type="email" class="form-control @error('email')
                                            is-invalid
                                            @enderror" name="email" id="email"
                                                placeholder="name@example.com" required>
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            <label for="email" class="form-label">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control @error('password')
                                            is-invalid
                                            @enderror" name="password" id="password"
                                                value="" placeholder="Password" required>
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="remember"
                                                id="remember_me">
                                            <label class="form-check-label text-secondary" for="remember">
                                                Keep me logged in
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn bsb-btn-2xl btn-primary" type="submit">Log in now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="mt-5 mb-4 border-secondary-subtle">
                                    <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                                        <a href="{{ route('login.view') }}"
                                            class="link-secondary text-decoration-none">Login</a>
                                        <a href="#!" class="link-secondary text-decoration-none">Forgot password</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        {{-- //development by md abdullah shake (mas it academy) --}}
@endsection
