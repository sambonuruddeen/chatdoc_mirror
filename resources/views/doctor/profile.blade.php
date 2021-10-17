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
      @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

        <div class="row gy-4">
        @if  (!empty($doctor)) 
          <div class="col-lg-7">
            
            <img src="{{ asset('avatar/'.$doctor['avatar']) }}" width="600px" height="600px" alt="">
            <br />
            <div class="row">
            <form action="{{ route('updateAvatar') }}" method="post" class="form-group" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <table>
            <tr>
              <td><label><i class="bi bi-image"></i> Change Profile Picture:</label> </td>
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
              <td>&nbsp;<input type="file" name="avatar" onchange="form.submit()" class="form-control-file" /></td>
            </tr>
            </table>
            </form>

            </div>

          </div>
          
          <div class="col-lg-5">
            <div class="portfolio-info">
            
              <h3>Dr. {{ Auth::user()->name}}</h3>
              <ul>
                <li><strong>Specialization</strong>: {{ $doctor->specialization }} </li>
                <li><strong>license Type</strong>: {{ $doctor->license_type }}</li>
                <li><strong>License Number</strong>: {{ $doctor->license_number }}</li>
                <li><strong>Patients Treated</strong>: 0</li>
                <li><strong>Languages</strong>: {{ $doctor->languages }}</li>
                <li><strong>Consultation Rate</strong>: NGN {{ $doctor->rate }}</li>
                <li><strong>Rating</strong>: 4.5/5.0 </li>
              </ul>
              <div style="text-align: center;">
              
            <p><strong>Bio</strong><br>
              {{ $doctor->biography }}
            </p>
            
                <a href=" {{ $doctor->twitter }}"><i class="bi bi-twitter"></i></a>
                <a href=" {{ $doctor->facebook }}"><i class="bi bi-facebook"></i></a>
                <a href=" {{ $doctor->linkedin }}"><i class="bi bi-linkedin"></i></a>
              </div>
                          
              <a href="{{ url('edit_doctor/'. Auth::user()->id) }}"><i class="bi bi-pen"></i> Edit Profile</a>
                         
            </div>
            <hr />
            <div class="portfolio-description">
            <div style="text-align:center;"><h5><a href=""><i class="bi bi-camera-video"></i> Video Call</a> |
            <a href=""><i class="bi bi-telephone"></i> Voice Call</a> |
            <a href=""><i class="bi bi-chat"></i> Chat</a></h5>
           
           
            <p>OR:</p>

            <a href="#"><button class="btn btn-outline-success btn-sm">Book Now</button></a>
            
            

                      </div>
                      
          
         

          
            </div>
            
          </div>
          @else
          <div>Your Profile is Incomplete. Click <a href="{{ url('edit_doctor/'. Auth::user()->id) }}">Here</a> to setup your Profile</div>
          @endif
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

    @endsection