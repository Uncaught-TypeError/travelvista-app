<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\Offers\OffersController;
use App\Http\Controllers\Frontend\ContactsController;
use App\Http\Controllers\Frontend\BookingsController;
use App\Http\Controllers\Frontend\Offers\TourOffersController;
use App\Http\Controllers\Frontend\Offers\PackageOffersController;
use App\Http\Controllers\Frontend\Gallery\GalleryController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PackageBookingController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\TourBookingController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UserProfileController;
use App\Models\Booking;
use App\Models\Package;
use App\Models\PackageBooking;
use App\Models\Preview;
use App\Models\Review;
use App\Models\Tour;
use App\Models\TourBooking;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
    $tours = Tour::take(2)->get();
    $packages = Package::take(2)->get();
    return view('welcome', compact('tours', 'packages'));
})->name('home');

//FrontEnd
Route::resource('/abouts', AboutController::class);

Route::resource('/offers', OffersController::class);
Route::get('/offers/viewTourDetail/{tour}', [OffersController::class, 'viewTourDetail'])->name('offers.view.TourDetail');
Route::get('/offers/viewPackageDetail/{package}', [OffersController::class, 'viewPackageDetail'])->name('offers.view.PackageDetail');

Route::resource('/contacts', ContactsController::class);
Route::resource('/bookings', BookingsController::class);
Route::resource('/touroffers', TourOffersController::class);
Route::resource('/packageoffers', PackageOffersController::class);
Route::resource('/gallery', GalleryController::class);
Route::get('/gallery/tour', [GalleryController::class, 'galleryTourIndex'])->name('gallery.tour.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/userprofile', function () {
    $userEmail = Auth::user()->email;
    $userId = Auth::user()->id;

    $tourBeenCount = Booking::where('email', $userEmail)->where('status', 'accepted')->count();
    $packagesBeenCount = PackageBooking::where('email', $userEmail)->where('status', 'accepted')->count();
    $totalReviews = Review::where('user_id', $userId)->count() + Preview::where('user_id', $userId)->count();

    $userProfile = UserProfile::where('user_id', $userId)->first();
    return view('userprofile', compact('userProfile', 'tourBeenCount', 'totalReviews', 'packagesBeenCount'));
})->middleware(['auth', 'verified'])->name('userprofile');

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function() {


    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::post('/bookings/{booking}/accept', [BookingController::class, 'acceptBooking'])->name('bookings.accept');
    Route::post('/bookings/{booking}/cancel', [BookingController::class, 'cancelBooking'])->name('bookings.cancel');

    Route::post('/packagebookings/{packagebooking}/accept', [PackageBookingController::class, 'acceptBooking'])->name('packagebookings.accept');
    Route::post('/packagebookings/{packagebooking}/cancel', [PackageBookingController::class, 'cancelBooking'])->name('packagebookings.cancel');

    Route::get('/packages/sort', [PackageController::class, 'sort'])->name('packages.sort');

    Route::resource('/tours', TourController::class);
    Route::resource('/packages', PackageController::class);
    Route::get('/tours/viewImg/{tour}', [TourController::class, 'viewImage'])->name('tours.viewImage');
    Route::get('/packages/viewImg/{package}', [PackageController::class, 'viewImage'])->name('packages.viewImage');

    Route::get('/tours/desMap/{tour}', [TourController::class, 'desMap'])->name('tours.desMap');
    Route::get('/packages/desMap/{package}', [PackageController::class, 'desMap'])->name('packages.desMap');

    Route::get('/viewAllTourImages', [AdminController::class, 'viewAllTourImages'])->name('viewAllTourImages');
    Route::get('/viewAllPackageImages', [AdminController::class, 'viewAllPackageImages'])->name('viewAllPackageImages');

    Route::get('bookings/createOne', [BookingController::class, 'createOne'])->name('bookings.createOne');
    Route::get('bookings/createTwo', [BookingController::class, 'createTwo'])->name('bookings.createTwo');
    Route::post('/bookings/createOne', [BookingController::class, 'storecreateOne'])->name('bookings.store.createOne');
    Route::post('/bookings/createTwo', [BookingController::class, 'storecreateTwo'])->name('bookings.store.createTwo');

    // Route::get('/packagebookings/showPBooking/{packagebooking}', [PackageBookingController::class, 'showPBooking'])->name('packagebookings.showPBooking');
    Route::get('/packagebookings/stepOne', [PackageBookingController::class, 'stepOne'])->name('packagebookings.stepOne');
    Route::get('/packagebookings/stepTwo', [PackageBookingController::class, 'stepTwo'])->name('packagebookings.stepTwo');
    Route::post('/packagebookings/stepOne', [PackageBookingController::class, 'storestepOne'])->name('packagebookings.store.stepOne');
    Route::post('/packagebookings/stepTwo', [PackageBookingController::class, 'storestepTwo'])->name('packagebookings.store.stepTwo');

    Route::get('/admin/tours/filter', [TourController::class, 'index'])->name('tours.filter');
    Route::get('/admin/bookings/filter', [BookingController::class, 'index'])->name('bookings.filter');

    Route::get('/admin/packagebookings/filter', [PackageBookingController::class, 'index'])->name('packagebookings.filter');
    Route::get('/admin/reviews/filter', [ReviewController::class, 'index'])->name('reviews.filter');


    Route::get('/read/support/{support}', [SupportController::class, 'readSupport'])->name('read.support');
    Route::get('/read/support/{replies}/{senderId}', [SupportController::class, 'writeSupport'])->name('write.support');
    Route::post('/store/support', [SupportController::class, 'storeSupport'])->name('store.support');

    Route::resource('/bookings',BookingController::class);
    Route::resource('/packagebookings',PackageBookingController::class);

    Route::get('/reviews/manage', [ReviewController::class, 'manageReview'])->name('reviews.manage');
    Route::get('/reviews/create2', [ReviewController::class, 'create2'])->name('reviews.create2');
    Route::post('/reviews/store2', [ReviewController::class, 'store2'])->name('reviews.store2');
    Route::post('/reviews/submitReply', [ReviewController::class, 'submitReply'])->name('reviews.submitReply');
    Route::post('/previews/submitReply2', [ReviewController::class, 'submitReply2'])->name('reviews.submitReply2');
    Route::resource('/reviews',ReviewController::class);

    Route::get('/reviews/reply/{reviews}', [ReviewController::class, 'replyReview'])->name('reviews.reply');
    Route::get('/previews/reply/{previews}', [ReviewController::class, 'replyPreview'])->name('previews.reply');

});

// Route::get('/downloadFile', [AdminController::class, 'downloadPdf'])->name('downloadFile');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/userprofile/edit', [UserProfileController::class, 'profileEdit'])->name('userProfile.edit');
    Route::patch('/userprofile/update', [UserProfileController::class, 'profileUpdate'])->name('userProfile.update');
    Route::patch('/userprofile/update2', [UserProfileController::class, 'profileUpdate2'])->name('userProfile.update2');
    Route::patch('/userprofile/update3', [UserProfileController::class, 'profileUpdate3'])->name('userProfile.update3');
});

require __DIR__.'/auth.php';
