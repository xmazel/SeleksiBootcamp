<?php

class Produk {
   private $rating = array();
   private $itemId, $itemName, $price, $freeshiping, $color;


   function rating($itemId, $itemName, $price, $freeshiping, $color, $rater1, $rater2) {
      $this->item[] = array('itemId' => $itemId,
       		'itemName'=> $itemName,
        	'price' => $price,
         	'freeshiping' => $freeshiping,
          	'color' => $color,
           	'rating'=> array('1' => $rater1, 
           					'2' => $rater2));

      return $this;
   }

   function get_all() {
      return json_encode($this->item);
   }
}


$produk = new Produk();

$produk->rating('12341822','desk','700000','true','black',array('akmal','4'),array('andi','5') );

echo $produk->get_all();

?>