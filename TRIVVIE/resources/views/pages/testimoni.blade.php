@extends('layouts.success')

@section('title', 'Testimoni')

@section('content')

<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav aria-label="breadcrumb">
            <div class="text-center section-popular-heading">
			        <br><br><h2><b>TESTIMONI</h2><br>
              <h5>Hello !! {{ Auth::user()->name }}...</h5><br>
              	</div><br>
        </div>
        </nav>
        </div>
      </div>

      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach (errors->all() as $error)
            <li>{{ $errors }}<li>
                @endforeach
            </ul>
        </div>
        @endif

	  <div class="container rounded">
            <div class="p-3 py-5">
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('testimoni') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="staticUsername">Username</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticUsername" class="form-control" name="username" placeholder="Username"
                        value="{{ Auth::user()->username }}">
                </div>
                <div class="form-group">
                    <label for="trip">Your Trip</label>
                    <input type="text" class="form-control" name="trip" placeholder="Pantai Nusa Dua Bali"
                       >
                </div>
                <div class="form-group">
                    <label for="testimoni">Testimoni</label>
                    <textarea name="testimoni" placeholder="Testimonial Your Trip....." class="d-block w-100 form-control" rows="10">{{ old('testimoni') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Submit
                </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


</div>
</div>
</div>
</div>

	  </section>
	  
</main>
@endsection

