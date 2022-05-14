<?php

use Src\Route;

Route::add('GET', '/', [Controller\Site::class, 'main']);
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/recording', [Controller\Site::class, 'recording']);
Route::add(['GET', 'POST'], '/ReceptionHistory', [Controller\Site::class, 'ReceptionHistory']);
Route::add(['GET', 'POST'], '/Search', [Controller\Site::class, 'Search']);
Route::add(['GET', 'POST'], '/DiagnosisByPatient', [Controller\Site::class, 'DiagnosisByPatient']);
Route::add(['GET', 'POST'], '/PatientToDoctor', [Controller\Site::class, 'PatientToDoctor']);
Route::add(['GET', 'POST'], '/DoctorChoice', [Controller\Site::class, 'DoctorChoice']);