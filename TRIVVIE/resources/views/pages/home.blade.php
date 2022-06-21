@extends('layouts.app')

@section('title')
Trivvie
@endsection

@section('content')

<header class="text-center">
    <h1>
        Explore The Beautiful World
        <br />
        As Easy One Click
    </h1>
    <p class="mt-3">
        You will see beautiful
        <br />
        moment you never see before
    </p>
    <a href="#popular" class="btn btn-primary px-4 mt-4">
        Get Started
    </a>
</header>

<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail text-center">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail text-center">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail text-center">
                <h2>3K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail text-center">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata Popular</h2>
                    <p>
                        Something that you never try
                        <br />
                        before in this world
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="popularContent">
        <div class="container">
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
        <!-- <div class="col-12 text-center">
                    <a href="{{route('paket_travel')}}" class="btn btn-warning">
                        <b>Show All</b>
                    </a>
                </div> -->
    </section>


    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>
                        Companies are trusted us
                        <br />
                        more than just a trip
                    </p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="frontend/images/partner.png" alt="Logo Partner" class="img-partner" />
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>
                        Moments were giving them
                        <br />
                        the best experience
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center match-height">
            @foreach ($data as $item) 
            <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                    
                        <div class="testimonial-content">
<<<<<<< HEAD
                            <h3 class="mb-4">{{ $item->username}}</h3>
=======
                            <img src="frontend/images/man.png" alt="" class="mb-4 rounded-circle"
                                style="width: 150px; height: 150px;" />
                            <h3 class="mb-4">John Doe</h3>
                            <p class="testimonial">
                                “ It was glorious and I could not stop to say wohooo for
                                every single moment Dankeeeeee “
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">Trip to Ubud</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/woman (1).png" alt="" class="mb-4 rounded-circle"
                                style="width: 150px; height: 150px;" />
                            <h3 class="mb-4">Grace anne</h3>
                            <p class="testimonial">
                                “ The trip was amazing and I saw something beautiful in that
                                Island that makes me want to learn more “
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">Trip to Nusa Penida</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content mb-auto">
                            <img src="frontend/images/woman.png" alt="" class="mb-4 rounded-circle"
                                style="width: 150px; height: 150px;" />
                            <h3 class="mb-4">Jane Wine</h3>
>>>>>>> aafee4abafced9ba7e710e29f35a518d2a292c7e
                            <p class="testimonial">
                                “{{ $item->testimoni}}“
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">{{ $item->trip}}</p>
                    </div>
                </div>
                @endforeach 
            </div>
            
        </div>
    </section>
</main>

@endsection