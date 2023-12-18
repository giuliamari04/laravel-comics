@extends('layouts.app')

@section('title','Home')

@section('content')
<section>
    <div class=" text-center py-2 my-tag" >current series</div>
<main class="my-bg-primary d-flex  align-items-center "  id="card-content" >
   <div class="container" >
    <div class="row py-5">
        @foreach ( $comics as $comic )
             <div class="col-12 col-md-4 col-lg-2 mt-2">
            <div class="card border-0 bg-trasparent text-light ">
                <img src="{{ $comic['thumb']}}" alt="{{$comic['title'] }}">
                <h5>{{$comic['title']}}</h5>
            </div>
         </div>
        @endforeach

    </div>
   </div>
  </main>
</section>

@endsection
