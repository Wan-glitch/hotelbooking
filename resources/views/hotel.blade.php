<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <script src="{{ asset('css/app.css') }}"></script>
    <title>{{$hotelData->name}}</title>

</head>

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

                <form action="{{ route('hotel', ['id' => $hotelData->id]) }}" method="GET">
                @csrf
                    <button
                        type="button"
                        class="btn btn-primary btn-lg m-2"
                        onclick="window.open('https://mdbootstrap.com/docs/standard/', '_blank')">
                        RESERVE NOW
                  </button>

                </form>

            </center>

        </div>

      </div>
</body>
</html>
