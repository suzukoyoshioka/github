<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class JuiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'm_id' => 1,
            'name' => 'ドクターペッパー',
            'price' => 120,
            'stock' => 5,
            'ju_image' =>base64_encode(Storage::get('DrPepper.jpg')),
        ];
        DB::table('juice')->insert($param);
        $param = [
            'm_id' => 1,
            'name' => 'モンスターエナジー',
            'price' => 210,
            'stock' => 3,
            'ju_image' =>base64_encode(Storage::get('MonsterEnergy.jpg')),
        ];
        DB::table('juice')->insert($param);
        $param = [
            'm_id' => 1,
            'name' => 'モンスターエナジー',
            'price' => 210,
            'stock' => 2,
            'ju_image' =>base64_encode(Storage::get('MonsterEnergy2.jpg')),
        ];
        DB::table('juice')->insert($param);
        $param = [
            'm_id' => 1,
            'name' => 'モンスターエナジーセット',
            'price' => 900,
            'stock' => 3,
            'ju_image' =>base64_encode(Storage::get('MonsterEnergySet.jpg')),
        ];
        DB::table('juice')->insert($param);
    }
}