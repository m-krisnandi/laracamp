@extends('components.sidebar')
@extends('layouts.app')



@section('sidebar')

<section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn" >
    <div class="container">
      <div class="row">

        <div
          class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated"
          data-wow-duration="900ms"
          style="
            visibility: visible;
            animation-duration: 900ms;
            animation-name: fadeInUp;
          "
        >
          <i class="fa fa-anchor medium-icon"></i>
          <span
            class="timer counter alt-font appear"
            data-to="810"
            data-speed="7000"
            >{{$countCheckout}}</span
          >
          <span class="counter-title">Bootcamp Ordered</span>
        </div>

        <div
          class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated"
          data-wow-duration="1200ms"
          style="
            visibility: visible;
            animation-duration: 1200ms;
            animation-name: fadeInUp;
          "
        >
          <i class="fa fa-users medium-icon"></i>
          <span
            class="timer counter alt-font appear"
            data-to="600"
            data-speed="7000"
            >{{$countUser}}</span
          >
          <span class="counter-title">Users</span>
        </div>

        <div
          class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated"
          data-wow-duration="1200ms"
          style="
            visibility: visible;
            animation-duration: 1200ms;
            animation-name: fadeInUp;
          "
        >
          <i class="fa fa-user medium-icon"></i>
          <span
            class="timer counter alt-font appear"
            data-to="600"
            data-speed="7000"
            >{{$countAdmin}}</span
          >
          <span class="counter-title">Admin</span>
        </div>

      </div>
    </div>
  </section>
@endsection


