<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <div>
    <h1>HOTELS LIST</h1>

  <div>
    @foreach ($hotels as $hotel)
    <div>
        <p><strong>{{ $hotel->name }}</strong> </p>
        <p><strong>{{ $hotel->location }}</strong> </p>
        <img src="{{URL($hotel->image)}}" alt="{{ $hotel->name}}"><br>

        <form action="{{ route('hotel', ['id' => $hotel->id]) }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-primary">Reserve</button>
        </form>

    </div>
    @endforeach

  </div>


</body>
</html>
