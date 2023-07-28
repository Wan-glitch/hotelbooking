<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
    <script src="{{ asset('css/app.css') }}"></script>
    <title>{{$hotelData->name}}</title>

</head>

<body>
    @include('layouts.nav')

    <div class="image-container" >
        <center>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-mdb-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{$hotelData ->img}}" class="d-block w-40" alt="Wild Landscape"/>
                  </div>
                </div>
              </div>
        </center>


            <center>
                <br>

            </br>
                <h2><strong>{{ $hotelData->name }}</strong> </h2>
                <h4><strong>Location</strong> </br> {{ $hotelData->location }}</h4>


                <img src="{{$hotelData ->img}}" /> <br>



                <form action="{{ route('hotel', ['id' => $hotelData->id]) }}" method="GET">
                @csrf
                    <button type="submit" class="btn btn-primary">Reserve</button>
                </form>

            </center>

        </div>

      </div>
</body>
</html>
