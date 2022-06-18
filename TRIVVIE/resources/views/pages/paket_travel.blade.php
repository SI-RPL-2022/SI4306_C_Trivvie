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
            <div class="col text-center section-popular-heading">
                    <h2><br><b>Paket Travel</h2><br>
                    <h5>
                    Bersama Trivvie, maka perjalanan Anda akan aman serta nyaman
                        <br />
                    Tunggu apalagi... Booking sekarang dan nikmati perjalananmu !!!
                    </h5>
                </div>
            </nav>
        </div>
      </div>
      <br><br><br><br>
    
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
  </section>
</main>

@endsection

