<?php
require_once('IUnit.php');
abstract class AMonster  implements IUnit
{
    private $name;
    private $hp = 0;
    private  $ap = 0;
    private $damage = 0;
    private $apcost = 0;

    public function getName()
    {
        return $this->name;
    }
    public function getHp()
    {
        return $this->hp;
    }
    public function getAp()
    {
        return $this->ap;
    }
    public function getDamage()
    {
        return $this->damage;
    }
    public function equip()
    {
        echo "Monsters are proud and fight with their own bodies.";
    }
    public function attack()
    {
        echo "Vérifie si la cible implémente IUnit, gère le combat rapproché";
    }
    public function receiveDamage()
    {
        echo "Réduit les HP, gère la mort ";
    }
    public function moveCloseTo()
    {
        echo " Se approche de la cible";
    }
    public function  recoverAP()
    {
        echo " Régénère jusqu'à 7 AP (max 50)";
    }
}
