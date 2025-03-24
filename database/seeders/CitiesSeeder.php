<?php

namespace Database\Seeders;

use App\Models\Tenant\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = config('cities.cities');
        foreach ($cities as $city) {
            $param['name'] = $city['name'];
            $param['city_code'] = $city['city_code'];
            $param['municipality'] = $city['municipality'];
            $param['latitude'] = $city['latitude'];
            $param['longitude'] = $city['longitude'];
            $param['status'] = $city['status'];
            $param['country_id'] = $city['country_id'];
            if (!City::where('name', $city['name'])->exists()) {
                City::create($param);
                dump($param['name'] . ' created');
            }else{
                dump($param['name'] . ' already exists in system');
            }

        }
    }
}
