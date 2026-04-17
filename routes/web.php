<?php

use App\Http\Controllers\AttractionController;
use App\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Route;
use App\Models\destination;
use App\Http\Controllers\UserController;
use App\Models\Attraction;
use App\Models\User;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});
route::get( '/halo',  function () {
    $name = "M FADIL RIZY";
    $hobis = ["BERMAIN"];
    return view( 'hallo',  compact('name','hobis'));
});
route::get( "/switch",function (){
    $role = "penulis";
    return view( 'switch', compact('role'));
});

route::get( "/master", function() {
    return view ( 'pages.home');
});

route::get( "/about", function() {
    return view ( 'pages.about');
});

route::get( "/destinasi", function() {
    $destinasi = [
        "nama" => "Bali",
        "harga" => 5000000,
        "lokasi" => "Denpasar, Bali",
        "durasi" => "4 Hari 3 Malam",
        "transportasi" => "Pesawat",
        "hotel" => "Bintang 4",
        "rating" => 4.8,
        "fasilitas" => ["Hotel", "Sarapan", "Tour Guide", "Transport Lokal"],
    ];
    return view ( 'pages.destinasi',compact("destinasi"));
});

Route::get("/destinationsall", function() {

    $destinations = Destination::all();
    return view('pages.indexDestinasi', compact("destinations"));
});

Route::get("/destination/{id}", function($id) {

    $destination = Destination::find($id);
    return view('pages.detaildestinasi', compact("destination"));
});


Route::prefix('destinations')->name('destinations.')->group(function() {
    Route::get("/",[DestinationController::class,'index'])->name('index');
    Route::get("/create", [DestinationController::class,'create'])->name('create');
    Route::get("/{id}",[DestinationController::class,'show'])->name('show');
    Route::post("/",[DestinationController::class,'store'])->name('store');
    Route::delete('/{id}', [DestinationController::class,'delete'])->name('delete');
    Route::get("/{id}/edit", [DestinationController::class,'edit'])->name('edit');
    Route::put("/{id}/update",[DestinationController::class,'update'])->name('update');
});




Route::prefix('users')->name('users.')->group(function() {
    Route::get("/",[UserController::class, 'index'])->name('index');
    Route::get("/create", [UserController::class, 'create'])->name('create');
    Route::post("/", [UserController::class, 'store' ])->name('store');
    Route::delete('/{id}', [UserController::class, 'delete'])->name('delete');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('update');
    Route::get("/{id}/show", [UserController::class,'show'])->name('show');
});


Route::prefix('Attraction')->name('Attraction.')->group(function() {
    Route::get('/attraction',[AttractionController::class,'index'])->name('index');
    Route::get('/attraction/create',[AttractionController::class,'create'])->name('create');
    Route::post('/attraction/store',[AttractionController::class,'store'])->name('store');
    Route::get('/attraction/{id}/edit',[AttractionController::class,'edit'])->name('edit');
    Route::put('/attraction/{id}/update',[AttractionController::class,'update'])->name('update');
    Route::delete('/attraction/{id}/delete',[AttractionController::class,'delete'])->name('delete');
    Route::get('/{id}/detail',[AttractionController::class,'detail'])->name('detail');
});

Route::prefix('Review')->name('Review.')->group(function() {
    Route::get('/',[ReviewController::class,'index'])->name('index');
    Route::get('/create',[ReviewController::class,'create'])->name('create');
    Route::post('/store',[ReviewController::class,'store'])->name('store');
    Route::get('/{id}/edit',[ReviewController::class,'edit'])->name('edit');
    Route::put('/{id}/update',[ReviewController::class,'update'])->name('update');
    Route::delete('/{id}/delete',[ReviewController::class,'delete'])->name('delete');
    Route::get('/{id}/detail',[ReviewController::class,'detail'])->name('detail');
});


