<?php

namespace Database\Seeders;

use App\Models\Tenant\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = config('countries.countries');
        foreach ($cities as $city) {
            $param['name'] = $city['name'];
            $param['nice_name'] = $city['nice_name'];
            $param['iso'] = $city['iso'];
            $param['iso3'] = $city['iso3'];
            $param['num_code'] = $city['num_code'];
            $param['phone_code'] = $city['phone_code'];
            $param['status'] = $city['status'];
            if (!Country::where('name', $city['name'])->exists()) {
                Country::create($param);
                dump($param['name'] . ' created');
            }else{
                dump($param['name'] . ' already exists in system');
            }

        }
    }
}
