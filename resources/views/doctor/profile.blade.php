@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Doctor Profile</h2>
          <ol>
            <li><a href="#">Dashboard</a></li>
            <li>My Profile</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">
        @if  (!empty($doctor)) {
          <div class="col-lg-7">
            <img src="{{ asset('img/team/team-1.jpg') }}" alt="">
          </div>

          <div class="col-lg-5">
            <div class="portfolio-info">
            
              <h3>Dr. Mustapha Muhammad </h3>
              <ul>
                <li><strong>Specialization</strong>: Family Medicine</li>
                <li><strong>MDCN Number</strong>: 458796</li>
                <li><strong>Patients Treated</strong>: 75</li>
                <li><strong>Languages</strong>: English,Hausa, Arabic</li>
                <li><strong>Consultation Rate</strong>: NGN 1000</li>
              </ul>
              <div style="text-align: center;">
              <h5><a href=""><i class="bi bi-camera-video"></i> Video Call</a> |
            <a href=""><i class="bi bi-telephone"></i> Voice Call</a> |
            <a href=""><i class="bi bi-chat"></i> Chat</a></h5>
           
           
            <p>OR:</p>

            <a href=""><button class="btn btn-outline-success btn-sm">Book Now</button></a>
              </div>
            </div>
            <hr />
            <div class="portfolio-description">
            <div style="text-align:center;">
            <p>Bio...</p>
            <p><a href="#">Rating: 4.5/5.0</a> </p>
            
            <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>

                      </div>
          
         

          
            </div>
          </div>
          @endif
          <div>Your Profile is Incomplete. Click <a href="{{ url('edit_doctor/'. Auth::user()->id) }}">Here</a> to setup your Profile</div>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

    @endsection