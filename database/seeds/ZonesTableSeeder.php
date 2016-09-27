<?php

use Illuminate\Database\Seeder;

class GaragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zones')->insert([
            [
                'owner_id' => 2,
                'garage_name' => "Tampere Rautatientori",
                'hourly_price' => 2.00,
                'currency'=>'€',
                'country'=>'Finland',
                'center_coordinate'=>'60.168607847624095 24.932371066131623',
                'created_at'=>date('Y-m-d h:i:s',time()),
                'updated_at'=>date('Y-m-d h:i:s',time())
            ],
            [
                'owner_id' => 2,
                'garage_name' => "Punavuori Garage",
                'hourly_price' => 1.50,
                'currency'=>'€',
                'country'=>'Finland',
                'center_coordinate'=>'60.162562 24.939453',
                'created_at'=>date('Y-m-d h:i:s',time()),
                'updated_at'=>date('Y-m-d h:i:s',time())
            ],
            [
                'owner_id' => 2,
                'garage_name' => "Unknown",
                'hourly_price' => 3.00,
                'currency'=>'€',
                'country'=>'Finland',
                'center_coordinate'=>'60.16444996645511 24.938178168200714',
                'created_at'=>date('Y-m-d h:i:s',time()),
                'updated_at'=>date('Y-m-d h:i:s',time())
            ],
            [
                'owner_id' => 2,
                'garage_name' => "Fitnesstukku",
                'hourly_price' => 2,
                'currency'=>'€',
                'country'=>'Finland',
                'center_coordinate'=>'60.165219358852795 24.93537425994873',
                'created_at'=>date('Y-m-d h:i:s',time()),
                'updated_at'=>date('Y-m-d h:i:s',time())
            ],
            [
                'owner_id' => 2,
                'garage_name' => "Kauppis",
                'hourly_price' => 3,
                'currency'=>'€',
                'country'=>'Finland',
                'center_coordinate'=>'60.17167429490068 24.921585662024363',
                'created_at'=>date('Y-m-d h:i:s',time()),
                'updated_at'=>date('Y-m-d h:i:s',time())
            ],
            [
                'owner_id' => 3,
                'garage_name' => "Q-Park1",
                'hourly_price' => 2,
                'currency'=>'€',
                'country'=>'Finland',
                'center_coordinate'=>'60.16867390148751 24.930162952045407',
                'created_at'=>date('Y-m-d h:i:s',time()),
                'updated_at'=>date('Y-m-d h:i:s',time())
            ]
        ]);
    }
}
