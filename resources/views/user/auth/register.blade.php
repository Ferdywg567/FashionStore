@extends('user.layouts.app')

@section('user-content')
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Register</h2>
                        <p class="sub-title mb-3">Start your digital shopping experience</p>
                    </div>
                </div>
                <div class="ec-register-wrapper">
                    <div class="ec-register-container">
                        <div class="ec-register-form">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>*{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="/register " method="post">
                                @csrf
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Name*</label>
                                    <input type="text" name="name" placeholder="Enter your name" required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Email*</label>
                                    <input type="email" name="email" placeholder="Enter your email ..." required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Phone Number*</label>
                                    <input type="text" name="telephone" placeholder="Enter your phone number"
                                           required />
                                </span>

                                <span class="ec-register-wrap">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder="Enter your address" required/>
                                </span>

                                <span class="ec-register-wrap">
                                    <label>Password</label>
                                    <input type="password" name="password"  id="password" placeholder="Password" minlength="8">
                                </span>

                                <span class="ec-register-wrap">
                                    <label>Re - Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re - Enter Password" minlength="8">
                                </span>

                                <span class="ec-register-wrap ec-register-btn">
                                    <input type="hidden" name="role" id="role" value="3">
                                    <button class="mt-3 btn btn-primary" type="submit">Register</button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
