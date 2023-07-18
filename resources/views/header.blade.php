<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{__('header.title')}}</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/Logo/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!--
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/icofont/icofont.min.css" rel="stylesheet">#
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/owl.carousel//owl.carousel.min.css" rel="stylesheet">
  <link href="/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  
  <!-- <link rel="stylesheet" href="boxicons.umin.css"> -->



  <link rel="stylesheet" href="/css/boxicons.min.css">
  <link rel="stylesheet" href="/css/icofont.css">
  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/aos.css" >

  <link rel="stylesheet" href="/css/venobox.min.css" />


  <!-- Template Main CSS File -->
  
  <link href="/css/style.css" rel="stylesheet">
  

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-block align-items-center fixed-top">
    @if ( Config::get('app.locale') == 'en')
        <img  id="topbar" src="img/Logo/Slice 21.png" style="width: 100%;">
    @elseif ( Config::get('app.locale') == 'mr' )
        <img  id="topbar" src="img/Logo/Slice 21 (1).png" style="width: 100%;">
    @endif
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top nav_english">
    <div class="container d-flex align-items-center">
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li id="home"><a href="{{ route('home') }}">{{__('header.home')}}</a></li>
                <li id="about" class="drop-down">
                    <a href="#">{{__('header.about')}}</a>
                    <ul>
                        <li><a href="{{ route('about') }}">{{__('header.about')}}</a></li>
                        <li><a href="{{ route('vision') }}">{{__('header.vision')}}</a></li>
                        <li><a href="{{ route('duties') }}">{{__('header.duties')}}</a></li>
                        <li><a href="{{ route('laws') }}">{{__('header.laws')}}</a></li>
                        <li><a href="{{ route('authorities') }}">{{__('header.authorities')}}</a></li>
                    </ul>
                </li>
                <li id="foodDept" class="drop-down">
                    <a href="#">{{__('header.foodDept')}}</a>
                    <ul>
                        <li><a href="{{ route('foodAbout') }}">{{__('header.about')}}</a></li>
                        <li><a href="{{ route('foodServices') }}">{{__('header.services')}}</a></li>
                        <li><a href="https://foscos.fssai.gov.in/consumergrievance/" target="_blank">{{__('header.complaintRegistration')}}</a></li>
                        <li><a href="{{ route('publications') }}">{{__('header.publications')}}</a></li>
                    </ul>
                </li>
                <li id="drugDept" class="drop-down">
                    <a href="#">{{__('header.drugDept')}}</a>
                    <ul>
                        <li><a href="{{ route('drugAbout') }}">{{__('header.about')}}</a></li>
                        <li><a href="{{ route('drugServices') }}">{{__('header.services')}}</a></li>
                        <li><a href="{{ route('drugDuties') }}">{{__('header.duties')}}</a></li>
                        <li><a href="#">{{__('header.publications')}}</a></li>
                    </ul>
                </li>
                <li id="labDept" class="drop-down">
                    <a href="#">{{__('header.labDept')}}</a>
                    <ul>
                        <li><a href="{{ route('labAbout') }}">{{__('header.about')}}</a></li>
                        <li><a href="{{ route('labIntroduction') }}">{{__('header.intro')}}</a></li>
                        <li><a href="{{ route('labHistory') }}">{{__('header.history')}}</a></li>
                        <li><a href="{{ route('labObjectives') }}">{{__('header.objectives')}}</a></li>
                        <li><a href="{{ route('labStructure') }}">{{__('header.structure')}}</a></li>
                    </ul>
                </li>
                <li id="vigDept" class="drop-down">
                    <a href="#">{{__('header.vigilanceDept')}}</a>
                    <ul>
                        <li><a href="{{ route('vigilanceAbout') }}">{{__('header.about')}}</a></li>
                        <li><a href="{{ route('vigilanceComposition') }}">{{__('header.compostition')}}</a></li>
                        <li><a href="{{ route('vigilanceDuties') }}">{{__('header.duties')}}</a></li>
                        <li><a href="#">{{__('header.contacts')}}</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('rti') }}">{{__('header.rti')}}</a></li>
                <li><a href="{{ route('seniorityList') }}">{{__('header.seniorityList')}}</a></li>
                <li><a href="{{ route('contact') }}">{{__('header.contact')}}</a></li>
                <li>@include('partials/language_switcher')</li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header>

  <!-- <script>
    var activeID = 'home';
    
    if(['/aboute.php', '/vision.php', '/importd33e.php', '/importd22e.php', '/authoritiese.php'].includes(window.location.pathname)){activeID = 'about';}
    if(['/foodaboute.php', '/foodservicese.php', '/publicatione.php'].includes(window.location.pathname)){activeID = 'foodDept';}
    if(['/drugabout.php', '/drugservice.php', '/drugduties.php', '/#'].includes(window.location.pathname)){activeID = 'drugDept';}
    if(['/labe.php', '/introductione.php', '/historye.php', '/Objectivese.php', '/Organizatione_e.php'].includes(window.location.pathname)){activeID = 'labDept';}
    if(['/vigilanceabout.php"', '/composition.php', '/vigilanceduties.php', '/#'].includes(window.location.pathname)){activeID = 'vigDept';}
    if(['/rti_e.php'].includes(window.location.pathname)){activeID = 'rti';}
    if(['/senioritye_list.php'].includes(window.location.pathname)){activeID = 'sanList';}
    if(['/coming_soon.php'].includes(window.location.pathname)){activeID = 'contact';}
    
    
    
    var currentActiveElement = document.getElementsByClassName('active');
    currentActiveElement[0].classList.remove('active');
    var activeElement = document.getElementById(activeID);
    activeElement.classList.add('active');
</script> -->
</body>  