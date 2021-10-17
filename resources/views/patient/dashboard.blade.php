@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Patient Dashboard</h2>
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

      Page Content....
      </div>
</section>

</div>

</section>

</main>

@endsection