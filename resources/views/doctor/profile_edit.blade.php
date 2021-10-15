@extends('layouts.app')

@section('title', 'ChatDoc Nigeria')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Edit Doctor Profile</h2>
          <ol>
            <li><a href="#">Dashboard</a></li>
            <li>Edit Profile</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><i class="icofont-user"></i> {{ Auth::user()->name }}</h2>
        
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>

        <div class="row">

          

          <div class="col-lg-5 mt-4 mt-lg-0 d-flex align-items-center" style="margin: 0 auto;">
          
          @if(isset($doc))
          <form method="POST" action="{{ route('update_doctor') }}" class="my_form">
          @else
          <form method="POST" action="{{ route('save_doctor') }}" class="my_form">
          @endif
          @csrf
              <div class="row">
                
              <div class="form-group mt-3">
                <label for="name">Specialization</label>
                <input type="text" class="form-control" name="specialization" id="specialization" value="{{ old('specialization', $doc->specialization) }}" required autofocus />
              </div>
              <div class="form-group mt-3">
                <label for="name">License Type</label>
                <input type="text" class="form-control" name="license_type" id="license_type" value="{{ old('license_type', $doc->license_type) }}" required />
              </div>
              <div class="form-group mt-3">
                <label for="name">License Number</label>
                <input type="text" class="form-control" name="license_number" id="license_number" value="{{ old('license_number', $doc->license_number) }}" required />
              </div>
              <div class="form-group mt-3">
                <label for="name">Languages</label>
                <input type="text" class="form-control" name="languages" id="languages" value="{{ old('languages', $doc->languages) }}" required placeholder="English, Hausa" />
              </div>
              <div class="form-group mt-3">
                <label for="name">Rate <small>(Naira)</small></label>
                <input type="text" class="form-control" name="rate" id="rate" value="{{ old('rate', $doc->rate) }}" placeholder="1000" required />
              </div>
              <div class="form-group mt-3">
                <label for="name">Biography</label>
                <textarea class="form-control" name="biography" id="biography">{{ old('biography', $doc->biography) }}</textarea>
              </div>
              <div>
                &nbsp;
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"
              </div>
              
              
              <div class="text-center"><button type="submit">Update Profile</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


@endsection
