<?php

namespace Dummy\MobilNamespace; // Change the namespace to avoid conflicts

abstract class Mobil {
    protected $merk = '';
    protected $bbm = '';

    function __construct(string $merk, string $bbm)
    {
        $this->merk = $merk;
        $this->bbm = $bbm;
    }

    function getMerk() {
        return $this->merk;
    }

    function getBbm() {
        return $this->bbm;
    }

    abstract public function getEfisiensi();
}
