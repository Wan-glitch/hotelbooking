<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H1>WELCOME TO HOTEL BOOKING</H1>
        <div style="border : 4px solid black;">
            <H2>REGISTER NEW USER</H2>
            <form action="/hotels" method="POST">
                @csrf
                <input type="text" placeholder="username">
                <input type="text" placeholder="email">
                <input type="password" placeholder="password">
                <button>Register</button>
            </form>
        </div>

        <div style="border : 4px solid black;">
            <H2>LOG IN</H2>
            <form action="/hotels" method="POST">
                @csrf
                <input type="text" placeholder="username">
                <input type="text" placeholder="email">
                <input type="password" placeholder="password">
                <button>Log in</button>
            </form>
        </div>

       