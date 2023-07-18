<?php ?> @include('header');  <main id="main">
      
      <!-- ======= Middle Content Section ======= -->
      <section id="middle-content" class="middle-content">
        <div class="container-fluid con-fluid1" data-aos="fade-up">
            <div class="row no-gutters card-shadow pr-3" data-aos="fade-up" data-aos-delay="100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <center><h4 class="underline-small">{{ __('foodAbout.about') }}</h4></center>
                            <!--<hr>-->
                            <p class="description pt-3" align="justify" >
                            {{ __('foodAbout.desc') }}
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