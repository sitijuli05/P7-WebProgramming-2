<?php

namespace Mobil;

include 'mobil.php';

class Toyota extends Mobil {
   protected $efisiensi = 10;

   function getEfisiensi(){
      return $this->efisiensi;
   }
}
