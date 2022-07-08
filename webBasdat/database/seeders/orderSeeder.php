<?php

namespace Database\Seeders;

use App\Models\order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        order::create([
            'invoice_id'=> 'hdxl1324',
            'nama'=> 'samidi',
            'Tanggal'=> '03/04/2022',
            'jumlah'=> '2',
            'total_harga'=>'Rp300.000',
            'tipe_bayar'=>'COD'
        ]);
    }
}
