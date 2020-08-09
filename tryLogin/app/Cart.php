<?php

namespace App;

class Cart
{
  public $items=null; //grup produk
  public $totalQty = 0;
  public $totalHarga = 0;

  public function __construct($oldCart){
    if ($oldCart){
      $this->items = $oldCart->items;
      $this->totalQty = $oldCart->totalQty;
      $this->totalHarga=$oldCart->totalHarga;
    }
  }

  public function add($item, $id){
    $storedItem = ['qty'=>0, 'harga'=>$item->harga,'item'=>$item]; //assosiative array untuk menyimpan qty harga dan itemnya
    //pengecekan apakah item sudah ada dicart | jika sudah maka overwrite item yg ada jadi tidak item double
    if ($this->items){
      if(array_key_exists($id, $this->items)){
        $storedItem = $this->items[$id];
      }
    }
    //menambah jumlah qty
    $storedItem['qty']++;
    //menjumlah harga
    $storedItem['harga']=$item->harga*$storedItem['qty'];
    //memasukan data item ke __construct
    $this->items[$id]=$storedItem;
    $this->totalQty++;
    $this->totalHarga += $item->harga;
  }
}
