<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('home');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});




//include csrf token
//Route::post('/register',[UserController::class, 'register']);

Route::post('/home',[HotelController::class, 'index']);

//to call all function
//Route::resource('/hotels',HotelController::class);

Route::get('/home', [HotelController::class, 'index']);




Route::get('/book/hotel/{id}', [HotelController::class, 'showHotelPage']) -> name ('hotel');


// Route::get('/get-hotel-data/{id}', [HotelController::class, 'getHotelData'])->name('get.hotel.data');


Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('update.profile');

//Dropdown Modal
Route::get('/reserve', [HotelController::class, 'getroom']);


//Route::get('/book/{hotelid}', [HotelController::class, 'showBookingPage']);

// Sure! To create an MVC structure for a hotel booking system where users can view and book hotels, you can follow these steps:

//     1. **Model:**
//     The Model will handle interactions with the database and represent the hotel data. It should include methods to fetch a list of available hotels, retrieve specific hotel details, and handle the booking process.

//     2. **View:**
//     The View will be responsible for presenting the hotel information and the booking form to users. It will display a list of available hotels, show individual hotel details, and provide a form for users to book a hotel.

//     3. **Controller:**
//     The Controller will act as an intermediary between the Model and the View. It will handle user requests, process form submissions, and coordinate data flow between the Model and the View. It will have methods to show the list of hotels, display individual hotel details, and process hotel bookings.

//     4. **Database:**
//     You will need to set up a database to store hotel information, such as hotel names, descriptions, images, availability, and booking details.

//     Now, let's break down the steps for each component:

//     1. **Model (`Hotel.php`):**
//        - The `Hotel` model will handle interactions with the database and provide methods to fetch hotel data and handle bookings.

//     2. **View (`hotels/index.blade.php`, `hotels/show.blade.php`, `bookings/create.blade.php`):**
//        - The `index.blade.php` view will show a list of available hotels with their basic information.
//        - The `show.blade.php` view will display detailed information about a specific hotel.
//        - The `create.blade.php` view will provide a form for users to book a hotel.

//     3. **Controller (`HotelController.php`, `BookingController.php`):**
//        - The `HotelController` will have methods to show the list of hotels and display individual hotel details.
//        - The `BookingController` will handle the booking process, including showing the booking form and processing form submissions.

//     4. **Database:**
//        - Set up a database table for hotels with appropriate columns to store hotel information.
//        - Create a table for bookings to store the booking details, such as the user's name, email, check-in date, check-out date, and hotel ID.

//     With this basic structure in place, users will be able to view a list of available hotels, see detailed information about each hotel, and book a hotel by submitting the booking form. The Controller will handle user requests, interact with the Model to fetch and store data, and pass data to the appropriate views for display.

//     Remember that this is a simplified overview, and in a real-world application, you would need to implement additional features such as authentication, validation, error handling, and proper database interactions. Additionally, using a full-featured MVC framework like Laravel can greatly simplify the development process and provide many built-in features to handle various aspects of your hotel booking system.
