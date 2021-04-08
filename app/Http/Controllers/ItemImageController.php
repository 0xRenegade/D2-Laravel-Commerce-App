<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Storage;

class ItemImageController extends Controller
{
    public function getImage($path)
    {
        if (Storage::disk("local")->exists($path)) {
            $image = Storage::get($path);
            return $image;
        }
    }
}
