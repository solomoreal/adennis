@extends('layouts.app')

@section('content')
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto text-danger">ExxonMobil</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active menu-has-children"><a href="#">Energy Environment</a></li>
          <li><a href="#">Research and innovation</a></li>
          <li><a href="#">Company</a></li>
          <li><a href="#">Newsroom</a></li>
          <li><a href="#">Investor</a></li>


          <li class="menu-has-children btn-danger pt-1 text-white"><a>Check Staff ID</a>
            <ul class="form-card">
              <p class="text-center text-dark my-2">Enter Staff ID</p>
            <form action="{{route('checkStaff')}}" method="POST">
              {{ csrf_field() }}
                <input type="text" name="bio_id" placeholder="Enter Staff ID "><br>
                <button type="submit" class="btn-get mt-2 py-1 text-center">Send</button>
              </form>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{asset('img/intro-carousel/6.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h5 class="text-danger">Newsroom</h5>
                <h2>Expanding university partnerships to India</h2>
                <h5 class="text-white">Research to focus on biofuels, gas conversion and emissions reduction</h5>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('img/intro-carousel/8.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h5 class="text-danger">Newsroom</h5>
                <h2>ExxonMobil announces Tripletail oil discovery offshore Guyana</h2>
                <h5 class="text-white">Stabroek Block discovery adds to previous 6-billion-barrel estimate</h5>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Expanding university partnerships to India</a></h4>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">ExxonMobil announces Tripletail oil discovery offshore Guyana</a></h4>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">2019 Energy and Carbon Summary</a></h4>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>ExxonMobil</h3>
          <p>The need for energy is universal. That's why ExxonMobil scientists and engineers are pioneering new
            research and pursuing new technologies to reduce emissions while creating more efficient fuels. We're
            committed to responsibly meeting the world's energy needs.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="{{asset('img/intro-carousel/air-pollution-clouds-coal-459670.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Commitment</a></h2>
              <p>
                Affordable and sustainable energy solutions are required to advance global prosperity. We invest in
                technology and communities to bring the world better energy.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="{{asset('img/ourmission.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Cleaner power: reducing emissions with carbon capture and storage</a></h2>
              <p>
                For more than 30 years, ExxonMobil engineers and scientists have researched, developed and applied
                technologies that could play a role in the widespread deployment of carbon capture and storage.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="{{asset('img/about-vision.jpg')}}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione
                voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="my-5">
      <div class="container">

        <!-- <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad
            pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa
            panatarel.</p>
        </header> -->

        <div class="row">
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Improving Energy Access</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Improving enfficiency</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Sustainability</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Mitigating emmissions</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Job creation</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
            </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Out reach</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero </p>
          </div>
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container">
        <h2>Brazil’s newfound energy</h2>
        <p>The rhythms of Brazil are legendary and extend well beyond the energy of the Carnival parade. The country
          best known for its sandy beaches and legendary soccer stars, also has a long history as one of the wo...
        </p>
        <a class="cta-btn" href="#">Learn more...</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <!-- <header class="section-header">
          <h3>Our Clients</h3>
        </header> -->

        <div class="row">
          <div class="col-md-4">
            <div class="container mr-5">
              <img src="{{asset('img/careers.jpg')}}" alt="" class="img-fluid">
              <h2>Careers</h2>
              <div class="links">
                <a href="#">Career opportunitiex</a>
                <a href="#">Careers</a>
                <a href="#">Our location</a>
                <a href="#">Our hiring process</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="container">
              <img src="{{asset('img/Motorris.jpg')}}" alt="" class="img-fluid">
              <h2>Motorist</h2>
              <div class="links">
                <a href="#">Find a service station</a>
                <a href="#">Loyalty and payment</a>
                <a href="#">Synergy Fuels</a>
                <a href="#">Moto oil and other lubricants</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="container">
              <img src="{{asset('img/whoweare.jpg')}}" alt="" class="img-fluid">
              <h2>Who we are</h2>
              <div class="links">
                <a href="#">Business lines</a>
                <a href="#">Our history</a>
                <a href="#">Management commitee</a>
                <a href="#">Guiding principles</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #clients -->



    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Get in touch</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="{{route('postContact')}}" method="POST">
            {{ csrf_field() }}
          
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="body" rows="5" data-rule="required"
                data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
              <h3><a href="#intro" class="scrollto text-danger">ExxonMobil</a></h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies
              darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo.
              Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Energy Environment</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Research and innovation</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Company</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Newsroom</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Investor</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>ExxonMobil</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Danis</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset('lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  {{-- <script src="{{asset('contactform/contactform.js')}}"></script> --}}

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>
{{--  --}}
@endsection