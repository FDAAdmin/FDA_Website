<?php ?>@include('header');

<main id="main">

    <!-- ======= Middle Content Section ======= -->
    <section id="middle-content" class="middle-content">
        <div class="container-fluid con-fluid1" data-aos="fade-up">
            <div class="row no-gutters card-shadow pr-3" data-aos="fade-up" data-aos-delay="100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <center>
                                <h4 class="underline-small">{{ __('drugAbout.title') }}</h4>
                            </center>
                            <!--<hr>-->
                            <p class="description pt-3" align="justify">
                                {{ __('drugAbout.description_1') }}
                            </p>
                        </div>
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
                                                            <span>{{ __('drugAbout.act_1') }}</span>
                                                        </div>
                                                        <div></div>
                                                    </li>
                                                    <li>
                                                        <div><span>2</span></div>
                                                        <div>
                                                            <span>{{ __('drugAbout.act_2') }}</span>
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
                                                        <div><span>3</span></div>
                                                        <div>
                                                            <span>{{ __('drugAbout.act_3') }}</span>
                                                        </div>
                                                        <div></div>
                                                    </li>
                                                    <li>
                                                        <div><span>4</span></div>
                                                        <div>
                                                            <span>{{ __('drugAbout.act_4') }}</span>
                                                        </div>
                                                        <div></div>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <p class="description pt-3" align="justify">
                                            {{ __('drugAbout.implementation_description') }}
                                        </p>
                                    </div>
                                      @if ( Config::get('app.locale') == 'en')
                                        <img src="/img/chart/Ecombo.png" class="img-ab" width="100%" height="90%">
                                      @else 
                                        <img src="/img/chart/Mcombo.png" class="img-ab" width="100%" height="90%">
                                      @endif
                                    
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
