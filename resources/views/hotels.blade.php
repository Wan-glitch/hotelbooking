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
        <p><strong>Hotel ID:</strong> {{ $hotel->id }}</p>
        <p><strong>Hotel Name:</strong> {{ $hotel->name }}</p>
        <p><strong>Hotel Location:</strong> {{ $hotel->location }}</p>
        <img src="{{URL('/images/image3.jpeg')}}" alt="Page not found"><br>
        <form action="/bookhotel/{{$hotel->id}}" method="POST">
          @csrf
          <button onclick="bookHotel({{ $hotel->id }})">BOOK</button>
        </form>
    </div>
    @endforeach

    <script>
      function bookHotel(hotelId) {
          // Handle booking process for the selected hotel with ID = hotelId
          // You can redirect to a booking page or perform any other action here
          alert('Hello Booking for Hotel ID ' + hotelId);
      }
  </script>

  </div>
  
  
</body>
</html>