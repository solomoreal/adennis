@extends('layouts.app')

@section('content')
<div class="container">
  @auth
    <div class="col-md">
        <a class="text-secondary" href="{{route('bios')}}"><i class="fa fa-long-arrow-left f-40 px-3"></i>Back To List</a>
    </div>
  @endauth
  <div class="user-bio mt-4">
      
    <h4 class="text-danger bold">ExxonMobil</h4>
    <h2>Staff Bio Data</h2>
  </div>

  <section class="user-ids row">
    <div class="passport">
      <div class="staff-img">
      <img src="{{$bio->getFirstMedia('passport')->getFullUrl()}}" alt="staff passport" class="img-fluid">
      </div>
      <ul class="staff-details">
        <li>
          <span class="name">Name:</span>
          {{$bio->name}}
        </li>
        <li>
          <span class="name">Age:</span>
          {{$bio->age}}
        </li>
        <li>
          <span class="name">Sex:</span>
          {{$bio->sex}}
        </li>
      </ul>
    </div>
    <div class="user-identity">
      <div class="identity-img">
      <img src="{{$bio->getFirstMedia('id_card')->getFullUrl()}}" alt="staff passport" class="img-fluid">
      </div>
      <ul class="staff-details">
        <li>
          <span class="name">Nationality:</span>
          {{$bio->nationality}}
        </li>
        <li>
          <span class="name">Residential Address:</span>
          {{$bio->address}}
        </li>
        <li>
          <span class="name">Phone:</span>
          {{$bio->phone}}
        </li>
        <li>
          <span class="name">Mail:</span>
          {{$bio->email}}
        </li>
      </ul>
    </div>
  </section>

  <section class="company">
    <div class="staff-info">
      <ul class="staff-details">
        <li>
          <span class="name">Position:</span>
          {{$bio->position}}
        </li>
        <li>
          <span class="name">Employment Year:</span>
          {{$bio->employment_year}}
        </li>
        <li>
          <span class="name">Succesfully Completed Contract:</span>
        </li>
      </ul>
    </div>
    <div class="display-info">
      <h5>Succesfully Completed Contract</h5>
    <p>{{$bio->completed_contracts}}</p>
    </div>

    <div class="deployment">
      <span class="name">Contract deployment status </span>
      <select name="" id="">
        <option value="">Active</option>
      </select>
    </div>

    <h4>Onging awarded Contract; or Contract description</h4>
    <div class="display-info">
      <h5>Contract description</h5>
    <p>{{$bio->ongoing_contracts}}</p>
    </div>
  <h5 class="location my-3">Dispatchment location: {{$bio->dispatchment_location}}</h5>
  </section>
</div>

<footer>
  <div class="company-remark bg-danger text-white">
    <p>EXXonMobil &copy; 2019</p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection