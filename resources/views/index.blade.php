  <!-- ======= Start Header ======= -->
  <?php ?> @include('header');
  <!-- ======= End Header ======= -->

  <!-- ======= Start Main ======= -->
  <main id="main">

    <section id="testimonials" class="testimonials">
      <div class="container-fluid con-fluid1" data-aos="zoom-in">
        <div class="row">
          <div class="col-lg-8">
            <div class="owl-carousel testimonials-carousel">
              @foreach($array['banner'] as $image)
              <div class="testimonial-item">
                <img src="/img/banner/{{$image}}" class="testimonial-img" alt="">
              </div>
              @endforeach
            </div>
          </div>
          <div class="col-lg-4">
            <div class="home-event">
              <div class="card1">
                <h3 class="card1_title">{{__('home.pageText.newNotifications')}}</h3>
                <div class="card1_content" style="height: 64vh; padding-top: -10px;">
                  <div class="new_content">
                    <marquee behavior="scroll" scrollamount="4" direction="up" onmouseover="this.stop();" onmouseout="this.start();" style="height: 60vh;">
                      <ul style="list-style-type:disc;">
                        @foreach($array['notifications'] as $notification)
                        <li><a href="/pdf file/{{$notification['filename']}}">{{$notification['title']}}</a></li>
                        @endforeach
                      </ul>
                    </marquee>
                  </div>
                </div> <!-- card1 content end -->
              </div> <!-- card1 end -->
            </div>
            <!-- </div> -->
          </div>
        </div>
    </section>


    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h1>{{__('home.pageText.keyPerson')}}</h1>
          </div>
          <div class="container">
            @php
            $count = 0;
            $remainder = count($array['keyPersons']) % 4;
            $isFirstRow = true;
            @endphp
            <div class="row justify-content-center align-items-center">
              @foreach($array['keyPersons'] as $person)
              @if($count === $remainder && $isFirstRow)
              <div class="row justify-content-center align-items-center"> 
              @endif
                <div class="col-lg-3 col-md-6">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon">
                      <div class="or-category-innerbox-2 text-center">
                        <div class="or-category-img-shape position-relative">
                          <div class="or-category-img position-relative">
                            <img src="/img/key_person/{{$person['photoName']}}" alt="" class="img-circle" style="width: 100px; padding-top: 15px;">
                          </div>
                        </div>
                      </div>
                    </div>
                    <center>
                      <h2 class="description" style="font-size: 21px; margin-left: -80px; margin-right: -80px;">{{$person['name']}}</h2>
                      <p class="description" style="font-size: 1em; margin-left: -40px; margin-right: -40px;">{{$person['post']}}<br> {{__('home.pageText.mahaState')}}</p>
                    </center>
                  </div>@php $count++; @endphp
                </div>
                @if($count === $remainder )
              </div>
              @endif

              @endforeach
            </div>
          </div>
      </section>
<!-- End Featured Services Section -->





    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">
        <!--<div class="row">-->
        <!-- <div class="col-md-8"> -->
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="card1">
              <h3 class="card1_title">{{__('home.pageText.news')}}</h3>
              <div class="card1_content">
                @foreach($array['news'] as $news)
                @php
                [$day, $month, $year] = explode(' ', $news['date']);
                @endphp
                <div class="new_content">
                  <span class="date">
                    <div class="day">{{$day}}</div>
                    <div class="month">{{$month}}</div>
                    <div class="year">{{$year}}</div>
                  </span>
                  <span class="card1_text"><a href="https://youtu.be/EG9wX-DMpB0" target="_blanck">FDA Raid And Seized Fake Beauty Products </a></span>
                </div>
                @endforeach
              </div> <!-- card1 content end -->
            </div> <!-- card1 end -->
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="card1">
              <h3 class="card1_title">{{__('home.pageText.rules')}}</h3>
              <div class="card1_content">
                @foreach($array['rules'] as $rule)
                <div class="new_content">
                  <span class="card1_text"><a href="/pdf file/{{$rule['filename']}}" target="_blanck">{{$rule['title']}}</a></span>
                </div> <!-- card1 content end -->
                <br>
                @endforeach


              </div> <!-- card1 end -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="card1">
              <h3 class="card1_title">{{__('home.pageText.tenders')}}</h3>
              <div class="card1_content">
                @foreach($array['tenders'] as $tender)
                @php
                [$day, $month, $year] = explode(' ', $news['date']);
                @endphp
                <div class="new_content">
                  <span class="date">
                    <div class="day">{{$day}}</div>
                    <div class="month">{{$month}}</div>
                    <div class="year">{{$year}}</div>
                  </span>
                  <span class="card1_text"><a href="/pdf file/{{$tender['filename']}}" target="_blanck" title={{$tender['title']}}>{{$tender['title']}}</a></span>
                </div> <!-- card1 content end -->
                @endforeach
              </div>
            </div> <!-- card1 end -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="card1">
              <h3 class="card1_title">{{__('home.pageText.circulars')}}s</h3>
              <div class="card1_content">
                @foreach($array['circulars'] as $circular)
                @php
                [$day, $month, $year] = explode(' ', $news['date']);
                @endphp
                <div class="new_content">
                  <span class="date">
                    <div class="day">{{$day}}</div>
                    <div class="month">{{$month}}</div>
                    <div class="year">{{$year}}</div>
                  </span>
                  <span class="card1_text"><a href="/pdf file/{{$circular['filename']}}" target="_blanck">{{$tender['title']}}</a></span>
                </div> <!-- card1 content end -->
                @endforeach
              </div> <!-- card1 end -->
            </div>
          </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h1>{{__('home.pageText.photoAndVideo')}}</h1>
          <!-- h3>Find Out More <span>About Us</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>
        <div class="row skills-content">
          <div class="col-lg-7">
            <div class="gallery">
              <div class="main-image-section">
                <img id="main-view" class="main-view" src="" onclick="fullScreenImage();" />
                <!--  <div class="caption-container">
                        <div id="caption">This is the caption</div>
                        <div id="info">This is info message</div>
                    </div> -->
              </div>
              <div id="thumbnails" class="thumbnails"></div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="cards">
              <div class="card">
                <div class="top">
                  <div class="author">
                    <!-- <div class="avatar"></div> -->
                    <div class="info">
                      <span class="name" style="font-size: 20px;">{{__('home.pageText.videoGallery')}}</span>
                      <!-- <span class="time">12h ago</span> -->
                    </div>
                  </div>
                </div>
                <div>
                  <div class="owl-carousel testimonials-carousel">
                    @foreach($array['gallery']['videos'] as $video)

                    <div class="testimonial-item">
                      <iframe class="webcast-video" src="{{ $video['link'] }}" allowfullscreen style="height: 50vh;"></iframe>
                      <p>{{ $video['title'] }}</p>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




  </main>
  <!-- ======= End Main ======= -->

  <!-- ======= Start Footer ======= -->
  @include('footer');
  <!-- ======= End Footer ======= -->

  <script type="text/javascript">
    let images = [];
    var array = <?php echo json_encode($array['gallery']['photos']); ?>;

    for (let i = 0; i < array.length; i++) {
      images.push({
        url: '/img/news/' + array[i],
      });
    }
    const mainView = document.getElementById('main-view');
    const caption = document.getElementById('caption');
    const info = document.getElementById('info');

    const thumbnails = document.getElementById('thumbnails');

    for (let i = 0; i < images.length; i++) {
      let image = images[i];
      let img = document.createElement('img');
      img.src = images[i].url;
      img.setAttribute('width', 170);
      img.setAttribute('data-index', i);
      img.addEventListener('click', changeImage);
      thumbnails.appendChild(img);
    }

    function initGallery() {
      loadImage(0);
    };

    function slideImage() {
      let currentIndex = parseInt(mainView.getAttribute('data-index'));
      currentIndex = currentIndex + 1 == images.length ? 1 : currentIndex + 1;
      loadImage(currentIndex);
      setTimeout(slideImage, 3000);

    }

    function changeImage(event) {
      let target = event.currentTarget;
      let index = target.getAttribute('data-index');
      loadImage(index);
    }

    function loadImage(index) {
      let image = images[index];
      mainView.src = image.url;
      mainView.setAttribute('data-index', index);
      mainView.setAttribute('id', 'image-' + index);
      mainView.style.opacity = 1;
      caption.textContent = image.caption;
      info.textContent = image.info;

    }

    function fullScreenImage() {
      toggleFullscreen(mainView);
    }

    function toggleFullscreen(el) {
      if (document.fullscreenElement || document.mozFullScreenElement ||
        document.webkitFullscreenElement || document.msFullscreenElement) {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.mozCancelFullScreen) {
          document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
          document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) {
          document.msExitFullscreen();
        }
      } else {
        if (document.documentElement.requestFullscreen) {
          el.requestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) {
          el.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
          el.webkitRequestFullscreen();
        } else if (document.documentElement.msRequestFullscreen) {
          el.msRequestFullscreen();
        }
      }
    }

    initGallery();
    setTimeout(slideImage, 3000);
  </script>