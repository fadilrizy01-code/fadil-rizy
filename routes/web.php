<?php

use App\Http\Controllers\DestinationController;
use Illuminate\Support\Facades\Route;
use App\Models\destination;

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

Route::get("/destinations", function() {

    $destinations = Destination::all();
    return view('pages.indexDestinasi', compact("destinations"));
});

Route::get("/destination/{id}", function($id) {

    $destination = Destination::find($id);
    return view('pages.detaildestinasi', compact("destination"));
});

Route::get(
    uri:"/destinations",
    action:[DestinationController::class,'index']
);

Route::get("/detaildestinasi/{id}",[DestinationController::class,'show']);

Route::get("/destinations/create", [DestinationController::class,'create']);
Route::post("/destinations",[DestinationController::class,'store']);

Route::delete('/destination/{id}', [DestinationController::class,'delete']);

Route::get("/destinations/{id}/edit", [DestinationController::class,'edit']);
Route::put("/destinations/{id}/update",[DestinationController::class,'update']);
