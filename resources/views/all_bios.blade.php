@extends('layouts.app')

@section('content')
<main id="main">
        <div class="col-md">
        <a class="text-secondary" href="{{route('home')}}"><i class="fa fa-long-arrow-left f-40 px-3"></i>Create New</a>  
        </div>
    <section id="contact" class=" wow fadeInUp contact1">
        <div class="container">
      
            <div class="section-header">
              <h3>All Staff Bios</h3>
              <div class="row">

                    <div class="col-md-12">
                      <table class="table table-hover table-responsive-sm w-100">
                        <thead>
                          <tr>
                            <th>S/N</th>
                            <th>Staff</th>
                            <th>Name</th>
                            <th>Bio ID</th>
                            <th>Telephone</th>
                            <th>Location</th>
                            <th></th>
                            <th></th>
                            
                          </tr>
                        </thead>
                        <tbody>
                    @isset($bios)
                    @foreach($bios as $bio)
                         <tr>
                          <td>{{++$count}}</td>
                            <td><img class="img-fluid rounded-circle" src="{{$bio->getFirstMedia('passport') ? $bio->getFirstMedia('passport')->getFullUrl() : ""}}" alt="" width="30" height="30">
                            </td>
                          <td> {{$bio->name}}</td> 
                          <td>{{$bio->bio_id}}</td>
                            <td>{{$bio->phone}}</td>
                          <td>
                          <p>{{$bio->dispatchment_location}}</p>
                          </td>
                            <td>
                              <p class="my-0"></p>
                              <p class="my-0"></p>
                            </td>
                        <td><a href="{{route('userBio',['id' => $bio->bio_id])}}" class="btn btn-primary">Details</a></td>
                        <td><a href="{{route('remove',['id' => $bio->id])}}" class="btn btn-danger">remove</a></td>
                          </tr>
                        @endforeach
                        @endisset                          
                        </tbody>                        
                      </table>
                      {{$bios->links()}}
                    </div>           
            </div>     
        </div>
    </div>
    </section>
</main>
@endsection