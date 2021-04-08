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
                "ethereal" => false,
                "max_sockets" => 2,
                "requirements" => json_encode(["none"]),
                "durability" => 56,
                "stats" => json_encode(["Damage: 3-6"]),
                "set_bonuses" => json_encode(["none"]),
                "quantity" => 2,
                "price" => 5.0,
                "image_url" => "images/items/hand-axe.png",
            ],
            [
                "name" => "Harlequin Crest",
                "type" => "Shako",
                "rarity" => "Unique",
                "ethereal" => true,
                "max_sockets" => 2,
                "requirements" => json_encode([
                    "Character Level: 62",
                    "Strength: 50",
                ]),
                "durability" => 12,
                "stats" => json_encode([
                    "Defense: 98-141",
                    "+2 to All Skills",
                    "+2 to Strength",
                    "+2 to Dexterity",
                    "+2 to Vitality",
                    "+2 to Energy",
                    "+1-99 to Life (Based on Character Level)",
                    "+1-99 to Mana (Based on Character Level)",
                    "Physical Damage Taken Reduced by 3-5%",
                    "50% Better Chance of Getting Magic Items",
                ]),
                "set_bonuses" => json_encode(["none"]),
                "quantity" => 1,
                "price" => 50.0,
                "image_url" => "images/items/harlequin-crest.png",
            ],
        ]);
    }
}
