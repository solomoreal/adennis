@extends('layouts.app')

@section('content')
  <main id="main">
    <section id="contact" class=" wow fadeInUp contact1">
      <div class="container ">

        <div class="section-header">
          <h3>Register as admin</h3>
        </div>
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="{{ route('register') }}" method="post" >
            @csrf
            <div class="form-row my-4">
              <div class="form-group col-md-6 m-auto">
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6 m-auto">
                <input type="email" name="email" class="form-control" id="name" placeholder="Enter email" >
                
              </div>
            </div>
            <div class="form-row my-4">
              <div class="form-group col-md-6 m-auto">
                <input type="password" name="password" class="form-control" id="name" placeholder="Enter password"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                
              </div>
            </div>
            <div class="text-center"><button type="submit">Sign Up</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
@endsection