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
            <br><h2><b>Your Profile</h2><br><br>
            <h3>Hello {{ Auth::user()->username }}...</h3>
            <p>
              thank you for being  a great loyal customer. It was a pleasure to always give you the best service that we can.
            </p>
        	</div>
        </div>
        </nav>
        </div>
       
      </div>
      

      <div class="container rounded">
            <div class="p-3 py-3">

    <div class="card shadow">
        <div class="card-body">

        <form action="{{ route('profile') }}" method="POST">
          <!-- Menampilkan Jam (Aktif) -->
	<div id="clock"></div>
  
  <script type="text/javascript">
  <!--
  function showTime() {
      var a_p = "";
      var today = new Date();
      var curr_hour = today.getHours();
      var curr_minute = today.getMinutes();
      var curr_second = today.getSeconds();
      if (curr_hour < 12) {
          a_p = "AM";
      } else {
          a_p = "PM";
      }
      if (curr_hour == 0) {
          curr_hour = 12;
      }
      if (curr_hour > 12) {
          curr_hour = curr_hour - 12;
      }
      curr_hour = checkTime(curr_hour);
      curr_minute = checkTime(curr_minute);
      curr_second = checkTime(curr_second);
   document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
      }

  function checkTime(i) {
      if (i < 10) {
          i = "0" + i;
      }
      return i;
  }
  setInterval(showTime, 500);
  //-->
  </script>

  <!-- Menampilkan Hari, Bulan dan Tahun -->
  <script type='text/javascript'>
    <!--
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var thisDay = date.getDay(),
        thisDay = myDays[thisDay];
    var yy = date.getYear();
    var year = (yy < 1000) ? yy + 1900 : yy;
    document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
    //-->
  </script>
                <br><br><br>
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" name="username" class="form-control" name="username" 
                        value="{{ Auth::user()->username }}" readonly>
                </div>
                <div class="form-group">
                    <label for="trip">Email</label>
                    <input type="text" class="form-control" name="trip" value="{{ Auth::user()->email }}" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" value="{{ Auth::user()->password }}" readonly>
                </div>
                
            </form>
        </div>
    </div>

    
    
</div>

</section>

</main>
@endsection

