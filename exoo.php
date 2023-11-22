<h1>Exercise 14</h1>

<p>Enoncé de l'exercice</p>


<?php
Class Voiture{
    private $_marque;
    private $_modèle;
   
public function __construct($marque, $modèle){ 
    $this->_marque =$marque;
    $this->_modèle =$modèle;
    }

public function getMarque(){
    return $this->_marque;
    }

public function getModèle(){
     return $this->_modèle;
    }


public function __toString(){
    return $this->getMarque()." ".$this->getModèle();
    }
}

class VoitureElic extends Voiture{
    private $_autonomie;
    public function __construct($marque, $modèle, $autonomie){
    parent::__construct($marque, $modèle);
    $this->_autonomie = $autonomie;
    }
}
    

/*class VoitureElic{
    private $_autonomie;
    private $_voiture;

public function __construct()
	{
	    $this->_voiture = new Voiture;
	}
	
public function add($autonomie)
	{
		$this->_autonomie = $autonomie;
	}
}*/


$v1 = new Voiture("Peugeot", "408");
$v2 = new VoitureElic("BMW", "I3", 100);

echo $v1."<br>";
echo $v2;
?>