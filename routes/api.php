<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/login", [LoginController::class, "login"]);
Route::delete("/logout", [LoginController::class, "logout"]);

Route::get("/item/all", [ItemController::class, "all"]);
Route::get("/item/{id}", [ItemController::class, "single"]);

Route::post("/item/add", [ItemController::class, "store"])->middleware(
    "auth:sanctum"
);

Route::put("/item/update/{id}", [ItemController::class, "update"])->middleware(
    "auth:sanctum"
);

Route::delete("/item/delete/{id}", [
    ItemController::class,
    "delete",
])->middleware("auth:sanctum");
