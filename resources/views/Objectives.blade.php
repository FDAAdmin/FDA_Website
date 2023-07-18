<?php ?>   @include('header');

<main id="main">
  <!-- ======= Middle Content Section ======= -->
  <section id="middle-content" class="middle-content">
    <div class="container-fluid con-fluid1" data-aos="fade-up">
      <center>
        <h2 class="underline-small pt-4">{{ __('objectives.title') }}</h2>
      </center>
      <div class="row no-gutters card-shadow pr-3" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="pt-3 col-lg-6">
              <div class="row">
                <div class="col-lg-12">
                  <ol class="featured-list">
                    <li>
                      <div><span>1</span></div>
                      <div>
                        <span>{!! nl2br(e(__('objectives.objective1'))) !!}</span>
                      </div>
                      <div></div>
                    </li>
                  </ol>

                </div>
              </div>
            </div>

            <div class="pt-3 col-lg-6">
              <div class="row">
                <div class="col-lg-12">
                  <ol class="featured-list">
                    <li>
                      <div><span>2</span></div>
                      <div>
                        <span>{{ __('objectives.objective2') }}</span>
                      </div>
                      <div></div>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ======= End Middle Content Section ======= -->
</main>
@include('footer');