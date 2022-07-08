<?php

namespace Database\Seeders;

use App\Models\payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class paymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'payment_name' => 'COD' ],
            [ 'payment_name' => 'M-Banking' ],
            [ 'payment_name' => 'ATM' ],
        ];
        foreach ($data as $payment) {
            payment::create($payment);
        }
    }
}
