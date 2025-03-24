<?php

namespace Database\Seeders;

use App\Models\Tenant\Airlines;
use Illuminate\Database\Seeder;

class AirlinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airlines = config('airlines.airlines');
        foreach ($airlines as $airline) {
            $param['name'] = $airline['name'];
            $param['thumbnail'] = $airline['thumbnail'];
            $param['iata_desi'] = $airline['iata_desi'];
            $param['iata_code'] = $airline['iata_code'];
            $param['icao_code'] = $airline['icao_code'];
            $param['status'] = $airline['status'];
            $param['country_id'] = $airline['country_id'];
            $param['issuing_pcc'] = $airline['issuing_pcc'];
            $param['reserving_pcc'] = $airline['reserving_pcc'];
            $param['tour_code'] = $airline['tour_code'];
            $param['supplier_id'] = $airline['supplier_id'];
            $param['preferred_airlines'] = $airline['preferred_airlines'];
            if (!Airlines::where('name', $airline['name'])->exists()) {
                Airlines::create($param);
                dump($param['name'] . ' created');
            }else{
                dump($param['name'] . ' already exists in system');
            }

        }
    }
}
