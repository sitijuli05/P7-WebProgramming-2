<?php
namespace calclu;
class Calculator {
    
    protected $mobil;

    function __construct($mobil){
        $this->mobil=$mobil;
    }

    function hitungjarak(){
        $bbm = $this->mobil->getbbm();
        $efisien = $this->mobil->getEfisiensi();
        $jarakMax = $bbm * $efisien;

        return $jarakMax;
    }
}