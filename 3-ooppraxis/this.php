<?php

class This {

    const KEYPATH = "de.coding";

    public $name;

    public function getName() {
        return $this->name;
    }

    public function getKeypath() {
        return self::KEYPATH;
    }
}

$objekt = new This();
$objekt->name = "Ralf";
echo $objekt->getName() . "<br>";
