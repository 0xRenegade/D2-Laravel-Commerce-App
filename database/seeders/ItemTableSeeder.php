<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("items")->insert([
            [
                "name" => "Hand Axe",
                "type" => "One-Handed Axe",
                "rarity" => "Normal",
                "max_sockets" => 2,
                "requirements" => json_encode(["none"]),
                "durability" => 56,
                "stats" => json_encode(["Damage: 3-6"]),
                "set_bonuses" => json_encode(["none"]),
                "quantity" => 2,
                "price" => 5.0,
            ],
        ]);
    }
}
