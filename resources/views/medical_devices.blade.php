@extends('layouts.app')

@section('title', 'Page Title')

@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Medical Devices</h2>
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Medical Devices</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <h2 align="center">
        <i class="bi bi-gear"></i> Medical Devices Coming Soon 
        </h2>
      </div>
    </section>

@endsection