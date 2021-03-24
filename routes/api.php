<?php

use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/item/all", [ItemController::class, "all"]);
Route::get("/item/{id}", [ItemController::class, "single"]);

Route::post("/item/add", [ItemController::class, "store"]);

Route::put("/item/update/{id}", [ItemController::class, "update"]);

Route::delete("/item/delete/{id}", [ItemController::class, "delete"]);
