@extends('layouts.main-layout')
@section('content')
  <div class="container text-center">
    <div class="row">
      <div class="col-12">
       {{-- Pilot <-N----M-> Car <-N----1-> Brand --}}
       @foreach ($cars as  $car)
         <h1>Car:
           <a class="icon" href="{{route('edit', $car -> id)}}">
             &#9998;
           </a>
           <a class='icon' href="{{route('destroy', $car -> id)}}">
             &#10060;
           </a>
         </h1>
         <h4>Id -->{{$car -> id}}</h4>
         <h4>Name -->{{$car -> name}}</h4>
         <h4>Model -->{{$car -> model}}</h4>
         <h4>Kw-->{{$car -> kw}}</h4>

         @if ($car -> img)
           <img src="{{ asset('storage/car-img/' . $car -> img) }}" alt="foto">

         @endif

         <h3>Brand</h3>
         <h4>Id -->{{$car -> brand -> id}}</h4>
         <h4>Name -->{{$car -> brand -> name }}</h4>
         <h4>Nationality -->{{$car -> brand -> nationality}}</h4>
         <h3>Pilots:</h3>
         @foreach ($car -> pilots as $pilot)
           <h4>{{$pilot -> name}} {{$pilot -> lastname}} {{$pilot -> nationality}} {{$pilot -> date_of_birth}}</h4>
         @endforeach
         <br>
         <br>
         <p>-----------------------------------------------------------------------------</p>
         <br>
         <br>
       @endforeach
     </div>
   </div>
 </div>

 <h1>Ciaoooo</h1>

 <h2>buonasera</h2>

 <h3>buonanotte</h3>

 <p>
     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 </p>
@endsection
