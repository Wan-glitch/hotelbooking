<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
            <a class="navbar-brand" href="/home">Hotel Booking</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"> <!-- Use me-auto to push items to the left -->
                <li class="nav-item active"> <!-- 'Home' button is on the left -->
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <!-- Other navigation items here -->
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger ms-auto" type="submit">Logout</button> <!-- 'Logout' button is on the right -->
            </form>
        </div>
    </div>
</nav>
