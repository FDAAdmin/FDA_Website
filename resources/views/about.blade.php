
@include('header');

  <main id="main">
      
      <!-- ======= Middle Content Section ======= -->
      <section id="middle-content" class="middle-content">
        <div class="container-fluid con-fluid1" data-aos="fade-up">
            <div class="row no-gutters card-shadow pr-3" data-aos="fade-up" data-aos-delay="100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <center><h4 class="underline-small">{{__('about.about')}}</h4></center>
                            <p class="description pt-3" align="justify" >
                            @php
                                $string = __('about.description');
                                $lines = explode(PHP_EOL, $string);
                                
                                foreach ($lines as $line) {
        	                        echo $line . "<br><br>";
                                }
                            @endphp
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="col-lg-12 pt-4">
                        <center><h4 class="underline-small">{{__('about.admin_structure')}}</h4></center>
                        @if ( Config::get('app.locale') == 'en')
                            <center><img src="/img/chart/English.jpg" width="100%"></center>
                        @elseif ( Config::get('app.locale') == 'mr' )
                            <center><img src="/img/chart/Slice 18.png" width="100%"></center>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div> 
      </section>   
    <!-- ======= End Middle Content Section ======= -->  
    </main>
  @include('footer');