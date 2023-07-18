<?php ?>  @include('header');

  <!-- <main id="main"> -->
	<section id="middle-content" class="middle-content">
    <div class="container-fluid con-fluid1" data-aos="fade-up">
        <center><h2 class="underline-small">{{ __('foodPublications.section_title') }}</h2></center>
        <div class="row no-gutters card-shadow pr-3" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 pt-3">
                        <a href="/publication pdf/Orange_Book_15_05_2018.pdf"><img src="/img/publications/orange.jpg" width="100%"></a>
                        <center><h4 class="underline-small pt-3">{{ __('foodPublications.orange_book_title') }}</h4></center>
                        <p align="justify">{{ __('foodPublications.orange_book_description') }}</p>
                    </div>
                    <div class="col-lg-3 pt-3">
                        <a href="/publication pdf/Pink_Book_SNF_12_03_2018.pdf"><img src="/img/publications/pink.jpg" width="100%"></a>
                        <center><h4 class="underline-small pt-3">{{ __('foodPublications.pink_book_title') }}</h4></center>
           xln             <p align="justify">{{ __('foodPublications.pink_book_description') }}</p>
                    </div>
                    <div class="col-lg-3 pt-3">
                        <a href="food_yellow.php" target="blank"><img src="/img/publications/yellow.jpg" width="100%" height="71%"></a>
                        <center><h4 class="underline-small pt-3">{{ __('foodPublications.yellow_book_title') }}</h4></center>
                        <p align="justify">{{ __('foodPublications.yellow_book_description') }}</p>
                    </div>
                    <div class="col-lg-3 pt-3">
                        <a href="/publication pdf/DART_Book_03_05_2018.pdf"><img src="/img/publications/dart.jpg" width="100%" ></a>
                        <center><h4 class="underline-small pt-3">{{ __('foodPublications.dart_book_title') }}</h4></center>
                        <p align="justify">{{ __('foodPublications.dart_book_description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- </main> -->
@include('footer');