@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<main id="main">

 <!-- ======= Breadcrumbs ======= -->
 <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Admin Dashboard</h2>
          <ol>
            <li><a href="#">{{ Auth::user()->name }}</a></li>
            <li>Dashboard</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">

         <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-3 col-md-6">
            <div class="icon-box text-center">
              <div class="icon"><i class="bi bi-people"></i></div>
              <h4 class="title"><a href="">Patients Management</a></h4>
              
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="icon-box text-center">
              <div class="icon"><i class="bi bi-person-circle"></i></div>
              <h4 class="title"><a href="">Doctors Management</a></h4>
              
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="icon-box text-center">
              <div class="icon"><i class="bi bi-credit-card"></i></div>
              <h4 class="title"><a href="">Payments Management</a></h4>
              
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="icon-box text-center">
              <div class="icon"><i class="bi bi-gear"></i></div>
              <h4 class="title"><a href="">Settings</a></h4>
              
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->


       
      </div>
    </section>


</main>
@endsection
