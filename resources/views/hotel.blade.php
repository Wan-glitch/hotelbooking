<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

{{-- pakai for each loop --}}
<body>
  <header>
    <h1>Hotel Booking </h1>
  </header>

  <main>
    <section>
      <div>
        <h1>hotel 1</h1>
        <img src="{{URL('/images/hotel5.jpeg')}}" alt="">
        <form action="/bookhotel" method="POST">
          @csrf
          <button>BOOK</button>
        </form>

      </div>
      <div>
        <h1>hotel2</h1>
        <img src="{{URL('/images/hotel2.jpeg')}}" alt="">
        <button>Book</button>
      </div>
      <div>
        <h1>hotel3</h1>
        <img src="{{URL('/images/hotel3.jpeg')}}" alt="">
        <button>Book</button>
      </div>
      <div>
        <h1>hotel4</h1>
        <img src="{{URL('/images/hotel4.jpeg')}}" alt="">
        <button>Book</button>
      </div>
    </section>









  </main>










</body>
</html>