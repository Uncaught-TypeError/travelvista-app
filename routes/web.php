<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\Offers\OffersController;
use App\Http\Controllers\Frontend\ContactsController;
use App\Http\Controllers\Frontend\Booking\BookingsController;
use App\Http\Controllers\Frontend\Offers\TourOffersController;
use App\Http\Controllers\Frontend\Offers\PackageOffersController;
use App\Http\Controllers\Frontend\Gallery\GalleryController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Frontend\Booking\PackagebookingsController;
use App\Http\Controllers\frontend\Booking\UserbookingController;
use App\Http\Controllers\Frontend\Complain\ComplaintController;
use App\Http\Controllers\Frontend\Review\ReviewController as ReviewReviewController;
use App\Http\Controllers\Frontend\SuccessController;
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
    $tours = Tour::inRandomOrder()->take(2)->get();
    $packages = Package::inRandomOrder()->take(2)->get();

    // $review = Review::where('rating', '5')
    //             ->whereNotNull('comment')
    //             ->first();

    $user_comment = null;
    $user_name = null;

    $reviews = Review::all();

    foreach ($reviews as $review) {
        if ($review->rating == 5 && !is_null($review->comment)) {
            $user_name = $review->user->name;
            $user_comment = $review->comment;
            break;
        }
        else{
            $user_name = null;
            $user_comment = null;
        }
    }
    return view('welcome', compact('tours', 'packages', 'user_name', 'user_comment'));

    // dd($review);

})->name('home');

//FrontEnd
Route::resource('/abouts', AboutController::class);

Route::resource('/offers', OffersController::class);
Route::get('/offers/viewTourDetail/{tour}', [OffersController::class, 'viewTourDetail'])->name('offers.view.TourDetail');
Route::get('/offers/viewPackageDetail/{package}', [OffersController::class, 'viewPackageDetail'])->name('offers.view.PackageDetail');
Route::post('/offers/search', [OffersController::class, 'searchTour'])->name('offers.search');
Route::post('/offers/search2', [OffersController::class, 'searchTour2'])->name('offers.search2');

Route::post('/reviews/store2', [ReviewController::class, 'store2'])->name('reviews.store2');
Route::get('/reviews/tour/{tour}', [ReviewReviewController::class, 'createReview'])->name('reviews.tour.create');

Route::resource('/reviews', ReviewReviewController::class);
Route::resource('/contacts', ContactsController::class);

//Careful with the similar controller name
Route::middleware(['auth'])->group(function () {
    Route::get('/bookings/tours', [BookingsController::class, 'tourIndex'])->name('bookings.tour.index');
    Route::get('/pbookings/packages', [PackagebookingsController::class, 'packageIndex'])->name('pbookings.package.index');
    Route::get('/pbookings/packages/sort', [PackagebookingsController::class, 'sort'])->name('pbookings.packages.sort');
    Route::get('/bookings/tours/sort', [BookingsController::class, 'sort'])->name('bookings.tours.sort');

    Route::get('/reviews/tour/{tour}', [ReviewReviewController::class, 'createReview'])->name('reviews.tour.create');
    Route::get('/reviews/package/{package}', [ReviewReviewController::class, 'createReview2'])->name('reviews.package.create');

    Route::post('/reviews/tour/store', [ReviewReviewController::class, 'storeReview'])->name('reviews.tour.store');
    Route::post('/reviews/package/store', [ReviewReviewController::class, 'storeReview2'])->name('reviews.package.store');

    Route::resource('/reviews', ReviewReviewController::class);

    Route::resource('/bookings', BookingsController::class);
    Route::resource('/pbookings', PackagebookingsController::class);

    Route::post('/bookings/tourSearch', [BookingsController::class, 'searchTour'])->name('tours.search');
    Route::post('/bookings/tour/map', [BookingsController::class, 'searchMap'])->name('bookings.map.search');

    Route::post('/pbookings/packageSearch', [PackagebookingsController::class, 'searchPackage'])->name('packages.search');
    Route::post('/pbookings/package/map', [PackagebookingsController::class, 'searchMap'])->name('pbookings.map.search');

    Route::get('/bookings/tour/createOne/{tour}', [BookingsController::class, 'createOne'])->name('bookings.tour.createOne');
    Route::post('/bookings/tour/store/createOne', [BookingsController::class, 'storecreateOne'])->name('bookings.tour.store.createOne');


    Route::get('/pbookings/package/stepOne/{package}', [PackagebookingsController::class, 'stepOne'])->name('pbookings.stepOne');
    Route::get('/pbookings/package/stepTwo', [PackagebookingsController::class, 'stepTwo'])->name('pbookings.stepTwo');
    Route::post('/pbookings/package/store/stepOne', [PackagebookingsController::class, 'storestepOne'])->name('pbookings.store.stepOne');
    Route::post('/pbookings/package/store/stepTwo', [PackagebookingsController::class, 'storestepTwo'])->name('pbookings.store.stepTwo');
    Route::post('/pbookings/package/store/stepThree', [PackagebookingsController::class, 'storestepThree'])->name('pbookings.store.stepThree');

    Route::get('/bookings/tour/createTwo', [BookingsController::class, 'createTwo'])->name('bookings.tour.createTwo');
    Route::post('/bookings/tour/store/createTwo', [BookingsController::class, 'storecreateTwo'])->name('bookings.tour.store.createTwo');

    Route::post('/bookings/tour/store/createThree', [BookingsController::class, 'storecreateThree'])->name('bookings.tour.store.createThree');


    Route::resource('/userbookings', UserbookingController::class);

    Route::resource('/complaint', ComplaintController::class);
});


// Route::resource('/success', SuccessController::class);
// Route::get('/bookings/tour/createThree', [BookingsController::class, 'createThree'])->name('bookings.tour.createThree');

Route::resource('/touroffers', TourOffersController::class);
Route::resource('/packageoffers', PackageOffersController::class);

Route::get('/gallery/viewAllTourImage', [GalleryController::class, 'viewAllTourImage'])->name('gallery.viewAllTourImage');
Route::get('/gallery/viewAllPackageImage', [GalleryController::class, 'viewAllPackageImage'])->name('gallery.viewAllPackageImage');
Route::resource('/gallery', GalleryController::class);
Route::get('/gallery/tour/{tour}', [GalleryController::class, 'galleryTourIndex'])->name('gallery.tour.index');
Route::get('/gallery/package/{package}', [GalleryController::class, 'galleryPackageIndex'])->name('gallery.package.index');


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
})->middleware(['admin.check','auth', 'verified'])->name('userprofile');

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
