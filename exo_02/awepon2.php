<?php
abstract  class Awepon
{
    //PROPRIETE  PRIVEE 
    private  $name;
    private  $apcost;
    private $damage;
    private $melee;
    //PUBLIC
    public function constructeur($name, $apcost, $damage, $melee)
    {
        if (is_string($name) && is_int($apcost) &&  is_int($damage)) {

            echo 'yann';
        } else {
            return "Error in AWeapon constructor. Bad parameters";
        }
    }

    public function getname()
    {
        return $this->name;
    }

    public function getapcost()
    {
        return $this->apcost;
    }

    public function getDamage()
    {
        return $this->damage;
    }
    public function isMelee()
    {
        return $this->melee;
    }

    abstract public function attack();
}
