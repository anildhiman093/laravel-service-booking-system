Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('bookings', \App\Http\Controllers\BookingController::class);
});
