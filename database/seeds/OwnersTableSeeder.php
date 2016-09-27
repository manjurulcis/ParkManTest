<?php

use Illuminate\Database\Seeder;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'owner_name' => "AutoPark",
                'contact_email' => "testemail@testautopark.fi",
                'created_at'=>date('Y-m-d h:i:s',time()),
                'updated_at'=>date('Y-m-d h:i:s',time())
            ],
            [
                'owner_name' => "Q-Park",
                'contact_email' => "qpark@testautopark.fi",
                'created_at'=>date('Y-m-d h:i:s',time()),
                'updated_at'=>date('Y-m-d h:i:s',time())
            ]
        ]);

    }
}
