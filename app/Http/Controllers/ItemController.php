<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function all()
    {
        return Item::all();
    }

    public function single(Request $item, $id)
    {
        $item = Item::find($id);
        return $item;
    }

    public function store()
    {
        return Item::create([
            "name" => request("name"),
            "type" => request("type"),
            "rarity" => request("rarity"),
            "max_sockets" => request("max_sockets"),
            "requirements" => request("requirements"),
            "durability" => request("durability"),
            "stats" => request("stats"),
            "set_bonuses" => request("set_bonuses"),
            "quantity" => request("quantity"),
            "price" => request("price"),
            "image_url" => request("image_url"),
        ]);
    }

    public function update($item)
    {
        $success = $item->update([
            "name" => request("name"),
            "type" => request("type"),
            "rarity" => request("rarity"),
            "max_sockets" => request("max_sockets"),
            "requirements" => json_encode(request("requirements")),
            "durability" => request("durability"),
            "stats" => json_encode(request("stats")),
            "set_bonuses" => json_encode(request("set_bonuses")),
            "quantity" => request("quantity"),
            "price" => request("price"),
            "image_url" => request("image_url"),
        ]);

        return [
            "success" => $success,
        ];
    }

    public function delete($item)
    {
        $success = $item->destroy();

        return [
            "success" => $success,
        ];
    }
}
