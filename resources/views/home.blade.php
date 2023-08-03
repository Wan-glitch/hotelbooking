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



<!-- The Modal -->
@foreach ($loclist as $l)


<div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="locationModalLabel">Location Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Placeholders for location details -->
                <p><strong>Location Name:</strong> <span id="locationName">{{ $l->location_name}}</span></p>
                <p><strong>Project Name:</strong> <span id="projectName">{{ $l->project_name }}</span></p>
                <p><strong>Status:</strong> <span id="locationStatus">
                    @if($l->location_status == 1)
                    <span class="badge bg-label-success me-1">Active</span>
                    @elseif($l->location_status == 0)
                    <span class="badge bg-label-secondary me-1">Not Active</span>
                    @endif</span></p>
            </div>
        </div>
    </div>
</div>
@endforeach



