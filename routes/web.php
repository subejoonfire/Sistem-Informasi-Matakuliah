<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('admin/login');
});
Route::get('pdf/nilai/download', function () {
    echo 'halo';
    // return redirect('admin/login');
})->name('pdf.nilai.download');
