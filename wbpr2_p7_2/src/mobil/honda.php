<?php

include 'mobil.php';
namespace Mobil;

class Honda extends Mobil {
   protected $efisiensi = 16;

   function getEfisiensi(){
    return $this->efisiensi;
   }
}