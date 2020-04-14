<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Article | <?php echo $title ?></title>
  <meta content="<?php echo $description ?>" name="description">
  <meta content="" name="keywords">

  <meta charset="utf-8" name="author" content="Noman Nasir Minhas">
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?php echo $title ?>" />
  <meta property="og:url" content="https://foxx-2.github.io/OpinionByNoman/" />
  <meta property="og:description" content="<?php echo $description ?>" />
  <meta property="og:site_name" content="Opinion: By Noman" />
  <meta property="og:image" content="https://raw.githubusercontent.com/foxx-2/OpinionByNoman/master/cover.jpg" />
  <meta property="og:image:secure_url" content="https://raw.githubusercontent.com/foxx-2/OpinionByNoman/master/cover.jpg" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="<?php echo $description ?>" />
  <meta name="twitter:title" content="<?php echo $title ?>" />
  <meta name="twitter:image" content="https://raw.githubusercontent.com/foxx-2/OpinionByNoman/master/cover.jpg" />

  <link href="{{ URL::asset('img/favicon.png') }}" rel="icon">
  <link href="{{ URL::asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/article.css') }}" rel="stylesheet">

</head>

<body>

  <header id="header" class="header-tops">
    <div class="container">

      <h1><a href="/">Opinion: By Noman</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/">Home</a></li>
          <!-- <li><a href="index.html#services">Articles</a></li>
          <li><a href="index.html#about">About</a></li>
          <li><a href="index.html#resume">Resume</a></li>
          <li><a href="index.html#contact">Contact</a></li> -->
        </ul>
      </nav>

    </div>
  </header>

  
  <section id="about" class="about">

    
    <div class="about-me container">

      <div class="section-title">
        <h2>Article</h2>
        <p><?php echo $title ?></p>
      </div>

      <div class="social-links">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">
                            <a href="http://www.facebook.com/share.php?u=<?php echo $link ?>" target="_blank" rel="noopener"><span class="icofont-facebook"></span></a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://twitter.com/intent/tweet?url=<?php echo $link ?>&amp;text=<?php echo $titleplus ?>&amp;via=bloombergdotorg"
                               target="_blank" rel="noopener"><span class="icofont-twitter"></span></a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $link ?>&title=<?php echo $titleplus ?>&source=Bloomberg"
                               target="_blank" rel="noopener"><span class="icofont-linkedin"></span></a>
                        </li>
                        <li class="list-group-item">
                            <a href="mailto:?subject=<?php echo $subject ?>&amp;body=<?php echo $subject ?>Order Check Out: <?php echo $link ?>" ><span class="icofont-email"></span></a>
                        </li>
                    </ul>
                </div><br>
     <!--  <div class="social-links" style="margin-bottom: 50px;">
        <a href="#" class="icofont-facebook" style="margin-right: 10px;"></a>
        <a href="#" class="icofont-instagram" style="margin-right: 10px;"></a>
        <a href="#" class="icofont-brand-whatsapp" style="margin-right: 10px;"></a>
        <a href="#" class="icofont-copy" style="margin-right: 10px;"></a>
        <a href="#" class="icofont-send-print"></a>
      </div> -->

      <div class="row">
        <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left">
          <p>
				@yield('content')
          </p>
        </div>
      </div>
    </div>
  </section>
  

  <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ URL::asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ URL::asset('js/main.js') }}"></script>

</body>

</html>