@extends('layouts.app')

@section('title', 'Paket Travel')

@section('content')

<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                  Paket Travel
                </li>
              </ol>
            </nav>
          </div>
          

        </div>
    
        <div class="row justify-content-center mb-3">
          <div class="col-md-6">
              <form action="/paket_travel">
                <div class="input-group mb-5">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search')}}">
                <button class="btn btn-info" type="submit" >Search</button>                
        </div> 
</form>
        </div>
        </div>

        <section class="section-popular-content" id="popularContent">
        
        
        <!-- <div class="container"> -->
            <div class="section-popular-travel row justify-content-center">

                @foreach ($items as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url('{{$item->galleries->count() ? Storage::url($item->galleries->first()->image): '' }}');">
                        <div class="travel-country">{{ $item->location}}</div>
                        <div class="travel-location">{{$item->title}}</div>
                        <div class="travel-button mt-auto">
                            <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

@endsection

