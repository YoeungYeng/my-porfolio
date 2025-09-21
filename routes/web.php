<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('porfolio.index');
});

Route::get('/certificate/download', function () {
    $path = public_path('myen.docx'); // file inside /public
    return Response::download($path, 'myen.docx');
});

