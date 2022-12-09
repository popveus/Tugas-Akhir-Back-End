<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            'nama_pengirim' => 'hans',
            'telepon' => '085351565720',
            'alamat_pengirim' => 'sumedang tanjungkerta rt 08 rw 03',
            'nama_penerima' => 'yoga',
            'alamat_penerima' => 'bandung rt 01 rw 03',
            'nama_barang' => 'redmi note 9',
            'berat' => '10',
            'total' => '100000',
            'pembayaran' => 'cash',
        ]);
    }
}
