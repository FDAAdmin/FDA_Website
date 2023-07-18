<?php ?> @include('header');
  <main id="main">
      
      <!-- ======= Middle Content Section ======= -->
      <section id="middle-content" class="middle-content">
        <div class="container-fluid con-fluid1" data-aos="fade-up">
            <div class="row no-gutters card-shadow pr-3" data-aos="fade-up" data-aos-delay="100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                        @if ( Config::get('app.locale') == 'en')
                            <center><h4 class="underline-small">Organization chart</h4></center>
                            <!--<hr>-->
                            <center class="pt-3"><img src="/img/chart/Slice 22.png" ></center>
                        @elseif ( Config::get('app.locale') == 'mr' )
                            <center><h4 class="underline-small">रचना </h4></center>
                            <!--<hr>-->
                            <center ><img src="/img/chart/Slice 33.png" ></center>
                        @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
      </section>   
    <!-- ======= End Middle Content Section ======= -->  
    </main>
  @include('footer');