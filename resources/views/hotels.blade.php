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

  <section>
    <div class="row">
      <div class="col-md-6 gx-5 mb-4">
        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
          <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
      </div>

      <div class="col-md-6 gx-5 mb-4">
        <h4><strong>Facilis consequatur eligendi</strong></h4>
        <p class="text-muted">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
          eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
          sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
        </p>
        <p><strong>Doloremque vero ex debitis veritatis?</strong></p>
        <p class="text-muted">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
          nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
          alias, unde optio accusantium soluta, iusto molestiae adipisci et?
        </p>
      </div>
    </div>
  </section>
  <!--Section: Content-->
</body>
</html>
