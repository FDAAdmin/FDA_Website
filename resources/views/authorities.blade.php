<?php ?>

@include('header');

<main id="main">
    <!-- ======= Middle Content Section ======= -->
    <section id="faq" class="faq ">
    <div class="container-fluid con-fluid1" data-aos="fade-up">
        <center><h2 class="underline-small">{{ __('authorities.title') }}</h2></center>
        <div class="row no-gutters card-shadow pr-3" data-aos="fade-up" data-aos-delay="100">

        <div class="container">
            <div class="row">
                <div class="col-lg-12  pt-5">
                    <!-- <ul class="faq-list">
                        <li> -->
                            <center><p style="font-size:18px; font-weight: 600;">{{ __('authorities.commissioner') }}</p>
                            <div id="faq1 faq">
                                <p>
                                    {{ __('authorities.commissioner_description') }}
                                </p>
                            </div>
                            </center>
                        <!--  </li>
                    </ul> -->
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <p class="faq-head text-center">{{ __('authorities.joint_commissioner_law') }}</p>
                    <div id="faq5 faq">
                        <p class="text-center">
                            {{ __('authorities.joint_commissioner_law_description') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <p class="faq-head text-center">{{ __('authorities.joint_commissioner_vigilance') }}</p>
                    <div id="faq2 faq">
                        <p class="text-center">
                            {{ __('authorities.joint_commissioner_vigilance_description') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <p class="faq-head text-center">{{ __('authorities.joint_commissioner_food') }}</p>
                    <div id="faq3 faq">
                        <p class="text-center">
                            {{ __('authorities.joint_commissioner_food_description') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 ">
                    <p class="faq-head text-center">{{ __('authorities.joint_commissioner_drugs') }}</p>
                    <div id="faq4 faq">
                        <p class="text-center">
                            {{ __('authorities.joint_commissioner_drugs_description') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <p class="faq-head text-center">{{ __('authorities.divisional_joint_commissioners') }}</p>
                    <div id="faq6 faq">
                        <p class="text-center">
                            {{ __('authorities.divisional_joint_commissioners_description') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="faq-head text-center">{{ __('authorities.assistant_director_drug_control_lab') }}</p>
                    <div id="faq7 faq">
                        <p class="text-center">
                            {{ __('authorities.assistant_director_drug_control_lab_description') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <p class="faq-head text-center">{{ __('authorities.assistant_commissioner_food') }}</p>
                    <div id="faq8 faq">
                        <p class="text-center">
                            {{ __('authorities.assistant_commissioner_food_description') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="faq-head text-center">{{ __('authorities.technical_officer_ayurved') }}</p>
                    <div id="faq13 faq">
                        <p class="text-center">
                            {{ __('authorities.technical_officer_ayurved_description') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="faq-head text-center">{{ __('authorities.food_safety_officer') }}</p>
                    <div id="faq10 faq">
                        <p class="text-center">
                            {{ __('authorities.food_safety_officer_description') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="faq-head text-center">{{ __('authorities.assistant_commissioner_drugs') }}</p>
                    <div id="faq9 faq">
                        <p class="text-center">
                            {{ __('authorities.assistant_commissioner_drugs_description') }}
                        </p>
                    </div>

                </div>
                <!-- <div class="col-lg-6"></div> -->
                <div class="col-lg-6 offset-lg-6">
                    <p class="faq-head text-center">{{ __('authorities.drugs_inspector') }}</p>
                    <div id="faq11 faq">
                        <p class="text-center">
                            {{ __('authorities.drugs_inspector_description') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>
    </section><!-- End Frequently Asked Questions Section -->
    <!-- ======= End Middle Content Section ======= -->
</main>

@include('footer');
