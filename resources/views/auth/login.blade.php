@extends('layouts.app')

@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><i class="icofont-ui-lock"></i> Login</h2>
          <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>

        <div class="row">

          

          <div class="col-lg-5 mt-4 mt-lg-0 d-flex align-items-center" style="margin: 0 auto;">
          
            <form method="POST" action="{{ route('login') }}" class="my_form">
            @csrf
              <div class="row">
                
              <div class="form-group mt-3">
                <label for="name">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required autofocus />
              </div>
              
              <div class="form-group mt-3">
                <label for="name">Password</label>
                <input type="password" class="form-control" name="password" id="password" required autocomplete="current-password" />
              </div>
             
              <div class="inline-flex form-group mt-3" >
              <!--<span class="form-check-inline pull-left">ll
              <input id="remember_me" type="checkbox" class="" name="remember" /> kk
              </span>-->

              <small>
              @if (Route::has('password.request'))
                    <a style="float: right;" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
              </small>
              </div>             
              
              <div class="text-center"><button type="submit">Login</button></div>
              
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection