<?php
abstract class Awepon
{
    //PROPRIETE  PRIVEE 
    private  $name;
    private  $apcost;
     private $damage;
      private $melee;
//PUBLIC
public function constructeur ($name,$apcost,$damage,)
{

        if (is_string($name) && is_int($apcost) &&  is_int($damage)) {
            echo "ok" ;
        }
        else {
        echo "cv";
            }
        }
    
        public function getname(){
            return "$this->name";
        }

             public function getapcost(){
            return $this->apcost;
        }

          public function getDamage(){
            return $this->damage;
            
        }
        public function isMelee(){
            return $this->melee;
            
        }

        abstract public function attack(); 
       

}



