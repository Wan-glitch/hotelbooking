<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  @include('header')
</head>
<body>
    @include('admin.nav-admin')
    <hr class="hr hr-blurry"style="height: 100px;"/>
    <center><h1>Admin Dashboard</h1> </center>

  <div class="container p-3 my-3 border">
    <div class="d-grid gap-3">
        <form action="" method="POST">
            <center><label style="margin-left: 0px;"> Create Hotel</label> </center>
            <input type="text" id="form6Example3" class="form-control" name="name" placeholder="Hotel name" style="margin-left: 0px;"><br>

            <input type="text" id="form6Example3" class="form-control" name="location" placeholder="Hotel location"style="margin-left: 0px;"><br>

            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example7" style="margin-left: 0px;">Description</label> <br>
                <textarea class="form-control" id="form6Example7" rows="4"></textarea>

                <label class="form-label" for="customFile" accept="image/*" >Image</label>
                <input type="file" class="form-control" id="customFile" />

                <label class="form-label" for="customFile"  accept="image/*" >Image 1</label>
                <input type="file" class="form-control" id="customFile" /> </br>

            <button  type="submit" class="btn btn-primary" onclick="bookHotel()">Save Hotel</button>
            <script>
                function bookHotel() {
                    // Handle booking process for the selected hotel with ID = hotelId
                    // You can redirect to a booking page or perform any other action here
                    alert('Hotel Added');
                }
            </script>

            @include('admin.list')

        </form>
    </div>
</div>

</body>
</html>

