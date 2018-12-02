<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourierChargeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $courierCharges = [
                    ['min_weight' => 0,'max_weight' => 200, 'charge' => 5,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
                    ['min_weight' => 200,'max_weight' => 500, 'charge' => 10,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
                    ['min_weight' => 500,'max_weight' => 1000, 'charge' => 15,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
                    ['min_weight' => 1000,'max_weight' => 5000, 'charge' => 20,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
                ];
              DB::table('courier_charges')->insert($courierCharges);
    }
}
