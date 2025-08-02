<?php
include("awepon2.php");

class PlasmaRifle extends Awepon
{
    public function attack()
    {
        return "PIOU";
    }
}

$plasmaRifle = new PlasmaRifle;
echo $plasmaRifle->attack();
echo $plasmaRifle->constructeur('eddy', 21, 5, false);
