<?php
use App\Http\Controllers\Api\CollectionApiController;

Route::get('/collections', [CollectionApiController::class, 'index']);