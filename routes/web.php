<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Models\Admin;
use App\Http\Controllers\EnquireFormController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('user.pages.home');
});

Route::get('/customsoftware', function () {
    return view('user.pages.customsoftware');
})->name('customsoftware');

Route::get('/businesssite', function () {
    return view('user.pages.businesssite');
})->name('businesssite');

Route::get('/brandingsite', function () {
    return view('user.pages.brandingsite');
})->name('brandingsite');

Route::get('/mobileapp', function () {
    return view('user.pages.mobileapp');
})->name('mobileapp');

Route::get('/digitalmarketing', function () {
    return view('user.pages.digitalmarketing');
})->name('digitalmarketing');

Route::get('/graphicdesign', function () {
    return view('user.pages.graphicdesign');
})->name('graphicdesign');

Route::get('/portfolio', function () {
    return view('user.pages.portfolio');
});

Route::get('/pricing', function () {
    return view('user.pages.pricing');
})->name('pricing');

Route::get('/enquire', function () {
    return view('user.pages.enquire');
});

// Route::get('/abu', function () {
//     return view('admin.pages.dashboard');
// });
// Route::get('/login', function () {
//     Admin::create([
//     'name' => 'abu',
//     'email' => 'abu2@gmail.com',
//     'password' => 'abu123',
//     // 'password' => bcrypt('abu123'),
// ]);
// dd("done");
//     return view('admin.pages.login');
// });



Route::post('/enquire', [EnquireFormController::class, 'submit'])->name('enquire.submit');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');



// admin routes

Route::prefix('admin')->group(function () {

    Route::get('login', [AuthController::class, 'loginForm'])->name('admin.login');
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware('admin')->group(function () {
        Route::get('dashboard', function () {
            return view('admin.pages.dashboard');
        })->name('admin.dashboard');

         Route::get('contacts', [ContactController::class, 'index'])->name('admin.contacts');

        Route::get('enquires', [EnquireFormController::class, 'index'])->name('admin.enquires');

        Route::get('newsletters', function () {
            return view('admin.pages.newletter');
        })->name('admin.newsletters');

        Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
    });

});
