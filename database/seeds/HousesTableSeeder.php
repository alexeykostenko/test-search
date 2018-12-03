<?php

use App\House;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pathToCsv = storage_path('app/csv/houses.csv');
        $houses = csv_to_array($pathToCsv);

        foreach ($houses as $house) {
            $house = array_change_key_case($house);
            (new House)->fill($house)->save();
        }
    }
}
