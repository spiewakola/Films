<?php
class Potwor{
    private $imie;
    private $zycie;
    private $alias;
    
    function __construct($imie,$zycie,$przydomek = null){
        $this->setImie($imie);
        $this->setZycie($zycie);
        $this->setPrzydomek($przydomek);

    }

    function setImie($imiePodanePrzezUzytkownika){
        $this->imie = $imiePodanePrzezUzytkownika;
    }

    function getImie(){
        return $this->imie;
    }

    function setZycie($zycie){
        $this->zycie = $zycie;
    }

    function getZycie(){
        return $this->zycie;
    }

    function setPrzydomek($przydomek){
        $this->przydomek = $przydomek;
    }

    function getPrzydomek(){
        return $this->przydomek;
    }

    
}


$potwor1 = new Potwor("Potwor1",50,"Alias potwora1");
echo  $potwor1->getPrzydomek();
echo "<br/>";
$potwor2 = new Potwor("Potwor2",20);
echo  $potwor2->getPrzydomek();