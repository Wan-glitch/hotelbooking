<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$hotelData->name}}</title>
</head>

<body>
    <div>
      <!--  <h1>{{$hotelData->name}} </h1>
      -->

      <div>
        <div>
            <center>
                <p><strong>{{ $hotelData->name }}</strong> </p>
                <p><strong>Location</strong> </br> {{ $hotelData->location }}</p>


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
