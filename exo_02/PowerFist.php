<?php
include("awepon2.php");
class PowerFist extends Awepon
{
    public function attack()
    {
        return "SBAM";
    }
}
$powerfist = new PowerFist;
echo $powerfist->attack();
