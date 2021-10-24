<?php

namespace Database\Seeders;

use App\Models\Point;
use Illuminate\Database\Seeder;

class POISeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pois = [
          [
              'name' => 'Λιανοκλάδι #1',
              'latitude' => '38.893078905462374',
              'longitude' => '22.37091150423377',
              'description' => 'Σημείο στο λιανοκλάδι #1'
          ],
            [
                'name' => 'Λιανοκλάδι #2',
                'latitude' => '38.872093824023835',
                'longitude' => '22.419043527594834',
                'description' => 'Σημείο στο λιανοκλάδι #2'
            ],
        ];

        Point::insert($pois);
    }
}
