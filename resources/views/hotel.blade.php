<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <script src="{{ asset('css/app.css') }}"></script>
    <title>{{$hotelData->name}}</title>

</head>
<script>
    // Customize Bootstrap modal options
    $(document).ready(function () {
        $.fn.modal.Constructor.DEFAULTS.backdrop = 'static';
    });
</script>

<body>
    @include('layouts.nav')

    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
        <center> <img src="{{$hotelData ->img}}"  class="img-fluid" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>

            <center>
                <br>

            </br>
                <h2><strong>{{ $hotelData->name }}</strong> </h2>
                <h4> {{ $hotelData->location }}</h4>

                @include('infohotel')

        </br>

        @include('layouts.reserve')
            <form action=""{{ route('reserve') }}" method="GET">
                @csrf
                    <button type="button" class="btn btn-primary btn-floating btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">
                        RESERVE NOW
                    </button>
            </form>

        </div>

      </div>
</body>
</html>
