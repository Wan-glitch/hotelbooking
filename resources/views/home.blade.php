<!doctype html>
<html lang="en">
<head>
    @include('header')
    <title>Home Page</title>
</head>
<body>
    @include('layouts.nav')

    <div class="container">
       <h1> Welcome, {{ Auth::user()->name }}</h1>
    </div>

        <div class="container p-3 my-3 border">
            @foreach ($hotels as $hotel)
            <div>
                <p><strong>{{ $hotel->name }}</strong> </p>
                <p><strong>{{ $hotel->location }}</strong> </p>
                <img src="{{$hotel ->img}}" alt="{{ $hotel->name}}"><br>

                <div class="position-absolute right">
                    <form action="{{ route('hotel', ['id' => $hotel->id]) }}" method="GET">
                        @csrf
                        <button  type="submit" class="btn btn-primary">Reserve</button>
                    </form>
				</div>
            </div>
            @endforeach

        </div>
</body>
</html>
