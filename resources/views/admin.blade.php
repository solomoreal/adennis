@extends('layouts.app')

@section('content')

<main id="main">
    <div class="col-md">
        <a class="text-secondary" href="{{route('bios')}}"><i class="fa fa-long-arrow-left f-40 px-3"></i>Back To List</a>
    </div>
   
    <div>
        <a class="btn btn-secondary" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
  <section id="contact" class=" wow fadeInUp contact1">
    <div class="container">

      <div class="section-header">
        <h3>Upload Staff Bio</h3>
      </div>
      <div class="form">
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
      <form action="{{route('storeBio')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
               />
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
               />
            
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="number" name="age" class="form-control" id="name" placeholder="Age"
                     />
                  
                </div>
                <div class="form-group col-md-6">
                  <select type="text" name="sex" class="form-control" placeholder="Sex">
                    <option disabled selected>Sex</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="nationality" placeholder="Nationality">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" name="address" class="form-control"  placeholder="Residential Address"/>
            </div>
            <div class="form-group col-md-6">
              <input type="text" class="form-control" name="phone"  placeholder="Enter phone"
                />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="">Upload passport</label><br>
              <input type="file" name="passport" class="form-contro" />
            </div>
            <div class="form-group col-md-6">
              <label for="">Upload ID card</label><br>
              <input type="file" name="id_card" class="form-contro"/>
            </div>
          </div>

          <h5 class="text-center mt-3">Personal Company Statistics</h5>
          
          <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" name="employment_year" class="form-control" id="name" placeholder="Employmen year">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="dispatchment_location" class="form-control" id="name" placeholder="Dispatchment location" />
                </div>           
          </div>
          <div class="form-ro">
            <div class="form-group col-md-8">
              <input type="text" name="position" class="form-control" placeholder="position">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                <textarea class="form-control" name="completed_contracts" rows="5" data-rule="required"
                data-msg="Please write something for us" placeholder="Completed Contracts"></textarea>
            </div>
            <div class="form-group col-md-6">
                <textarea class="form-control" name="ongoing_contracts" rows="5" data-rule="required"
                data-msg="Please write something for us" placeholder="Ongoing Contracts"></textarea>
            </div>
          </div>

          
          <div class="text-center"><button type="submit">Upload user bio</button></div>
        </form>
      </div>

    </div>
  </section><!-- #contact -->

</main>
@endsection