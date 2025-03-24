<?php

namespace Database\Seeders;

use App\Models\Tenant\Airport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airlines = config('airports.airports');
        foreach ($airlines as $airline) {
            $param['ident'] = $airline['ident'];
            $param['name'] = $airline['name'];
            $param['coordinates'] = $airline['coordinates'];
            $param['continent'] = $airline['continent'];
            $param['iso_country'] = $airline['iso_country'];
            $param['country'] = $airline['country'];
            $param['iso_region'] = $airline['iso_region'];
            $param['municipality'] = $airline['municipality'];
            $param['gps_code'] = $airline['gps_code'];
            $param['iata_code'] = $airline['iata_code'];
            $param['local_code'] = $airline['local_code'];
            if (!Airport::where('name', $airline['name'])->exists()) {
                Airport::create($param);
                dump($param['name'] . ' created');
            } else {
                dump($param['name'] . ' already exists in system');
            }
        }
    }
}
