<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/result', function (Request $req) {
    $quiz = $req->quiz;
    $tugas = $req->tugas;
    $praktek = $req->praktek;
    $absensi = $req->absensi;
    $uas = $req->uas;

    $sum = ($quiz + $tugas + $praktek + $absensi + $uas) / 5;
    $grade = "";
    if ($sum <= 65) {
        $grade = "D";
    } else if ($sum <= 75) {
        $grade = "C";
    } else if ($sum <= 85) {
        $grade = "B";
    } else {
        $grade = "A";
    }

    return view('result', [
        "grade" => $grade
    ]);
});
