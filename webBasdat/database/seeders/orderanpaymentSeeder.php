<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class orderanpaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'order_id' => 1,
                'payment_id' => 1,
            ],
            [
                'order_id' => 1,
                'payment_id' => 2,
            ],
            [
                'order_id' => 1,
                'payment_id' => 3,
            ],
        ];
        foreach ($data as $orderan_payments) {
         DB::table('orderan_payments')->insert($orderan_payments);
    }
    }
}
