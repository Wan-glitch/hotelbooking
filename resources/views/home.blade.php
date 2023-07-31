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


        @foreach ($hotels as $hotel)
        <div class="container p-3 my-3 border">
            <div class="d-grid gap-3">
                <div class="card mb-3" style="max-width: 800px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{$hotel ->img}}" alt="{{ $hotel->name}}" class="img-fluid" class="img-fluid rounded-start"/>
                      </div>

                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$hotel->name}} </h5>
                          <p class="card-text">
                            {{$hotel->location}}
                          </p>
                          <p class="card-text">
                            <div class="position-absolute right">
                                <form action="{{ route('hotel', ['id' => $hotel->id]) }}" method="GET">
                                    @csrf
                                    <button  type="submit" class="btn btn-primary">Reserve</button>
                                </form>
                            </div>
                          </p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
            @endforeach



</body>
</html>



