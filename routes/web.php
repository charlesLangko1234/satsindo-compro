<?php

use App\Http\Controllers\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Halaman Home
Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        "heroTitle" => 'SATSINDO',
        "caption" => 'System Integrator'
    ]);
});
// Halaman Home



// Halaman Product
Route::get('/industrialRobot', function () {
    return view('industrialRobot', [
        'title' => 'Product',
    ]);
});

Route::get('/plcscada', function () {
    return view('plcscada', [
        'title' => 'Product',
    ]);
});

Route::get('/costumpurposemachine', function () {
    return view('costumpurposemachine', [
        'title' => 'Product',
    ]);
});

Route::get('/software', function () {
    return view('software', [
        'title' => 'Product',
    ]);
});

Route::get('/smartvision', function () {
    return view('smartvision', [
        'title' => 'Product',
    ]);
});

Route::get('/generalSupplier', function () {
    return view('generalSupplier', [
        'title' => 'Product',
    ]);
});

Route::get('/serviceContract', function () {
    return view('serviceContract', [
        'title' => 'Product',
    ]);
});

Route::get('/education', function () {
    return view('education', [
        'title' => 'Product',
    ]);
});
// Halaman Product




// Halaman Company
Route::get('/company', function () {
    return view('company', [
        'title' => 'Company',
    ]);
});
// Halaman Company



// Halaman Portofolio
Route::get('/portofolio', function () {
    return view('portofolio', [
        'title' => 'Portofolio',
    ]);
});
// Halaman Portofolio

Route::post('/contact', [Contact::class, 'email']);