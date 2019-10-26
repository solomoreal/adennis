<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Exxonmobil</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
    rel="stylesheet">
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
  
    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

  
  <main id="main">
    <section id="contact" class=" wow fadeInUp contact1">
      <div class="container ">

        <div class="section-header">
          <h3>Login to admin</h3>
        </div>
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="{{ route('login') }}" method="post" role="form">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6 m-auto">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror
              </div>
            </div>
            <div class="form-row my-4">
              <div class="form-group col-md-6 m-auto">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                 @enderror
              </div>
            </div>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            <div class="text-center"><button type="submit">Login</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
</body>

</html>