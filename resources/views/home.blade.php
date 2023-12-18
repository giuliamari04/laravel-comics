@extends('layouts.app')

@section('title','Home')

@section('content')
<section>
    <div class=" text-center py-2 my-tag position-absolute " >current series</div>
<div  id="card-content" >
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
   <div class="text-center">
<button class=" text-center my-tag py-2 border-0 mb-3" >load more</button>
   </div>

  </div>

</section>
<section id="buy-comics">
    <div class="container text-center py-4">
    <div class="d-inline-flex flex-row my-w d-flex justify-content-center align-items-center">
      <div class="d-flex align-items-baseline text-uppercase text-light  px-3">
        <div  class="icon ">
          <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="icon" class="w-100" />
        </div>
        <div class="w-75 fw-light">
          <span>digital comics</span>
        </div>
      </div>

      <div class="d-flex align-items-baseline text-uppercase text-light  px-3">
        <div  class="icon ">
          <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="icon" class="w-100" />
        </div>
        <div class="w-75 fw-light">
          <span>dc merchandise</span>
        </div>
      </div>

      <div class="d-flex align-items-baseline text-uppercase text-light  px-3">
        <div  class="icon ">
          <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="icon" class="w-100" />
        </div>
        <div class="w-75 fw-light">
          <span>subscribtion</span>
        </div>
      </div>

      <div class="d-flex align-items-baseline text-uppercase text-light  px-3">
        <div  class="icon ">
          <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="icon" class="w-100" />
        </div>
        <div class="w-75 fw-light">
          <span>comic shop locator</span>
        </div>
      </div>

      <div class="d-flex align-items-baseline text-uppercase text-light  px-3">
        <div  class="icon ">
          <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="icon" class="w-100" />
        </div>
        <div class="w-75 fw-light">
          <span>dc power visa</span>
        </div>
      </div>
    </div>
</div>
  </section>

@endsection
