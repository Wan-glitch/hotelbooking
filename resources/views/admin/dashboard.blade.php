<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('header')
    <title>Admin Dashboard</title>
</head>
<body>
    @include('admin.nav-admin')
    <div>
        <p>Create a new Hotel List</p>
        <form action="/createlist" >
            @csrf
            <button>Create a new list</button>
        </form>
      </div>

</body>
</html>
