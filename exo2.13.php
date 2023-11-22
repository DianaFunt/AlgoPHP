<h1>Exercise 13</h1>

<p>Enoncé de l'exercice</p>


<?php
Class Voiture{
    private $_marque;
    private $_modèle;
    private $_nbPortes;
    private $_vitesseActuelle = 0;
    private $_estDemarree = false;



    public function __construct($marque, $modèle, $nbPortes){ 
        $this->_marque =$marque;
        $this->_modèle =$modèle;
        $this->_nbPortes = $nbPortes;
    }
    public function getMarque(){
        return $this->_marque;
    }
    public function getModèle(){
        return $this->_modèle;
    }
    public function getNbPortes(){
        return $this->_nbPortes;
    }
    public function getVitesseActuelle(){
        return $this->_vitesseActuelle;
    }

    public function demarrer(){
        if ($this->_estDemarree == true){
            echo "La voiture ". $this->_modèle . " est déjà démarrée<br>";
        }
        else{
            $this->_estDemarree = true;
            echo "La voiture ". $this->_modèle . " démarre<br>";
        }
    	
    }
    public function stopper(){
            if ($this->_estDemarree == false){
                echo "La voiture ". $this->_modèle . " est déjà arretée<br>";
            }
            else{
                $this->_estDemarree = false;
                echo "La voiture ". $this->_modèle . " areté<br>";
            }

    }

    public function accelerer(int $vitesse){
        if ($this->_estDemarree == true){
            $_vitesseActuelle1 = $_vitesseActuelle + 0;
            echo "Sa vitesse actuelle est de :". $_vitesseActuelle1 . " km/h<br>";
        }
        else{
            $_vitesseActuelle1 = $_vitesseActuelle + 50;
            echo "Sa vitesse actuelle est de :". $_vitesseActuelle1 . " km/h<br>";
        }
    }

    public function __toString(){
        return $this->getMarque()." ".$this->getModèle()." ". $this->getNbPortes()." ". $this->getVitesseActuelle()."<br>";
    }
}


$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "4", 3);


echo $v1;
echo $v2;

$v1->demarrer();
$v2->demarrer();
//$v1->accelerer(50);
$v1->stopper();
$v1->stopper();
$v2->stopper();
?>
