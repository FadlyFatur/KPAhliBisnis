<?php

use Illuminate\Database\Seeder;

class ProdukTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     * fdly
     * @return void
     */
    public function run()
    {
        $produk = new \App\Produk([
          'imagePath'=>'img/foto_produk/paket1(foto-produk).png',
          'nama'=>'Paket 1 (Foto Produk)',
          'harga'=>100000,
          'jenis'=>'fp'
        ]);
        $produk->save();

        $produk = new \App\Produk([
          'imagePath'=>'img/foto_produk/paket2(foto-produk).png',
          'nama'=>'Paket 2 (Foto Produk)',
          'harga'=>250000,
          'jenis'=>'fp'
        ]);
        $produk->save();

        $produk = new \App\Produk([
          'imagePath'=>'img/foto_produk/studio1(foto-produk).png',
          'nama'=>'Studio 1 (Foto Produk)',
          'harga'=>60000,
          'jenis'=>'fp'
        ]);
        $produk->save();

        $produk = new \App\Produk([
          'imagePath'=>'img/foto_produk/studio2(foto-produk).png',
          'nama'=>'studio 2 (Foto Produk)',
          'harga'=>50000,
          'jenis'=>'fp'
        ]);
        $produk->save();

        $produk = new \App\Produk([
          'imagePath'=>'img/foto_produk/outdoor(foto-produk).png',
          'nama'=>'Outdoor Foto Produk',
          'harga'=>100000,
          'jenis'=>'fp'
        ]);
        $produk->save();

        $produk = new \App\Produk([
          'imagePath'=>'img/foto_produk/paket1-makanan(foto-produk).png',
          'nama'=>'Konsep Foto Paket 1',
          'harga'=>130000,
          'jenis'=>'fp'
        ]);
        $produk->save();

        $produk = new \App\Produk([
          'imagePath'=>'img/foto_produk/paket2-makanan(foto-produk).png',
          'nama'=>'Konsep Foto Paket 2',
          'harga'=>215000,
          'jenis'=>'fp'
        ]);
        $produk->save();

        $produk = new \App\Produk([
          'imagePath'=>'img/foto_produk/paket3-makanan(foto-produk).png',
          'nama'=>'Konsep Foto Paket 3',
          'harga'=>295000,
          'jenis'=>'fp'
        ]);
        $produk->save();

        $produk = new \App\Produk([
          'imagePath'=>'img/desain_grafis/paket1(jasa-desain).png',
          'nama'=>'Paket 1 (Jasa Desain)',
          'harga'=>60000,
          'jenis'=>'jd'
        ]);
        $produk->save();

        $produk = new \App\Produk([
          'imagePath'=>'img/desain_grafis/paket2(jasa-desain).png',
          'nama'=>'Paket 2 (Jasa Desain)',
          'harga'=>45000,
          'jenis'=>'jd'
        ]);
        $produk->save();

        $produk = new \App\Produk([
          'imagePath'=>'img/desain_grafis/paketStory(jasa-desain).png',
          'nama'=>'Paket InstaStory',
          'harga'=>25000,
          'jenis'=>'jd'
        ]);
        $produk->save();

        $produk = new \App\Produk([
          'imagePath'=>'img/desain_grafis/paket1-logo.png',
          'nama'=>'Desain Logo (Exclusive)',
          'harga'=>250000,
          'jenis'=>'jd'
        ]);
        $produk->save();

        $produk = new \App\Produk([
          'imagePath'=>'img/desain_grafis/paket2-logo.png',
          'nama'=>'Desain logo (Handdrawing)',
          'harga'=>400000,
          'jenis'=>'jd'
        ]);
        $produk->save();

        $produk = new \App\Produk([
          'imagePath'=>'img/desain_grafis/video-animasi.png',
          'nama'=>'Animasi',
          'harga'=>2000000,
          'jenis'=>'jd'
        ]);
        $produk->save();

    }
}
