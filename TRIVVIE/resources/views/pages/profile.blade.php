@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav aria-label="breadcrumb">
            <div class="text-center section-popular-heading">
			        <h2><b>Profile Settings</h2>
              <h5>Hello {{ Auth::user()->username }}</h5>
            <div class="d-flex flex-column align-items-center text-center"><img class="rounded-circle mt-5" width="200px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ Auth::user()->name }}</span><span class="text-black-50">{{ Auth::user()->email }}</span><span> </span></div>
        	</div>
        </div>
        </nav>
        </div>
      </div>

	  <div class="container rounded">
    <div class="row">
            <div class="p-3 py-2">
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name"></div>
                    <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" value="{{ Auth::user()->username }}" name="username"></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email"></div>
                    <div class="col-md-12"><label class="labels">Password</label><input type="password" class="form-control" value="{{ Auth::user()->password }}" name="password"></div>
                    <div class="col-md-12"><label class="labels">Confirm Password</label><input type="password" class="form-control"value="{{ Auth::user()->password }}" name="confirm_pass"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
    </div>
</div>
</div>
</div>

	  </section>
	  
</main>
@endsection

