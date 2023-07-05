@extends('user.layouts.app')

@section('user-content')
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-title">Log In</h2>
                        <p class="sub-title mb-3">Best place to buy fashion products</p>
                    </div>
                </div>
                <div class="ec-login-wrapper">
                    <div class="ec-login-container">
                        <div class="ec-login-form">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="/login" method="post">
                                @csrf
                                <span class="ec-login-wrap">
                                    <label>Email Address*</label>
                                    <input type="text" name="email" placeholder="Enter your email..." required />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Password*</label>
                                    <input type="password" name="password" placeholder="Enter your password" required />
                                </span>
                                <span class="ec-login-wrap ec-login-fp">
                                    <label><a href="#">Forgot Password?</a></label>
                                </span>
                                <div>
                                    <span class="ec-login-wrap ec-login-btn">
                                    <input type="hidden" name="role" value="3">
                                    <button class="btn btn-primary" type="submit">Login</button>
                                    <a href="/register" class="btn btn-secondary">Register</a>
                                </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
