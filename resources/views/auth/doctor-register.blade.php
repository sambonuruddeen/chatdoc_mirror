@extends('layouts.app')

@section('title', 'Page Title')


@section('content')

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><i class="icofont-user-suited"></i> Doctor Registration</h2>
        
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>

        <div class="row">

          

          <div class="col-lg-5 mt-4 mt-lg-0 d-flex align-items-center" style="margin: 0 auto;">
          
            <form method="POST" action="{{ route('register') }}" class="my_form">
            @csrf
              <div class="row">
                
              <div class="form-group mt-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required autofocus />
              </div>
              <div class="form-group mt-3">
                <label for="name">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required />
              </div>
              <div class="form-group mt-3">
                <label for="name">Phone</label>
                <input type="number" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" required />
              </div>
              <div class="form-group mt-3">
                <label for="name">Password</label>
                <input type="password" class="form-control" name="password" id="password" required autocomplete="new-password" />
              </div>
              <div class="form-group mt-3">
                <label for="name">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required />
              </div>
              <div class="form-group mt-3">
                <a href="{{ route('login') }}">Already Registered? </a>
              </div>
              <div class="form-group mt-3">
                <input type="hidden" name="role" id="role" value="doctor" />
              </div>
              
              
              <div class="text-center"><button type="submit">Register</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection