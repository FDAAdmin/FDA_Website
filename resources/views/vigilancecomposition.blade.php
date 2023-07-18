<?php ?> @include('header');
  <main id="main">
    <br><br><br>
      <!-- ======= Middle Content Section ======= -->
      <section id="middle-content" class="middle-content">
        <div class="container-fluid1" data-aos="fade-up">
          <center><h2 class="underline-small composition">{{__('composition.title')}}</h2></center>
            <div class="row no-gutters card-shadow pr-3" data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 pt-3">
                <p align="justify">{{__('composition.content')}}
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
  