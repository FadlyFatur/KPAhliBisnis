<?php

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new \App\admin([
          'name'=>'Paket 1',
          'kode_pembelian'=>'1',
          'BuktiPembayaran'=>'img/desain-grafis.jpg'
      ]);
      $user->save();
      $user = new \App\admin([
          'name'=>'Paket 2',
          'kode_pembelian'=>'2',
          'BuktiPembayaran'=>'img/desain-grafis.jpg'
      ]);
      $user->save();
    }
}
