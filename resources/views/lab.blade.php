@extends('header')

<main id="main">
  <!-- ======= Middle Content Section ======= -->
  <section id="middle-content" class="middle-content">
    <div class="container-fluid con-fluid1" data-aos="fade-up">
      <div class="row no-gutters card-shadow pr-3" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <center><h4 class="underline-small">{{ __('lab.about_title') }}</h4></center>
              <!--<hr>-->
              <p class="description pt-3" align="justify">
                {{ __('lab.about_description_1') }}<br><br>

                {{ __('lab.about_description_2') }}<br><br>

                {{ __('lab.about_description_3') }}<br><br>

                {{ __('lab.about_description_4') }}<br><br>

                {{ __('lab.about_description_5') }}<br><br>
                 </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ======= End Middle Content Section ======= -->
</main>

@include('footer');
