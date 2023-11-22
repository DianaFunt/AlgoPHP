<?php
class Livre
{
  private $titre;
  private $anee;
  private $pages;
  private $prix;
  private $auteur;

  public function __construct($titre, $anee, $pages, $prix, $auteur)
    {
        $this->titre = $titre;
        $this->anee = $anee;
        $this->pages = $pages;
        $this->prix= $prix;
        $this->auteur= $auteur;
        $this->auteur->addBook($this); // ajouter un livre dans tableau 'books' pour un auteur 


    }

  public function getTitre()
  {
    return $this->titre;
  }
  public function getAnee()
  {
    return $this->anee;
  }
  public function getPages()
  {
    return $this->pages;
  }
  public function getPrix()
  {
    return $this->prix;
  }
  public function getAuteur()
  {
    return $this->auteur;
  }

  public function setTitre($titre)
  {
    $this->titre = $titre;
  }
  public function setAnee($anee)
  {
    $this->anee = $anee;
  }
  public function setPages($pages)
  {
    $this->pages = $pages;
  }
  public function setPrix($prix)
  {
    $this->prix = $prix;
  }
  public function setAuteur($auteur)
  {
    $this->auteur = $auteur;
  }

  public function __toString(){
    return $this->getTitre()." (".$this->getAnee().") : ".$this->getPages()." pages / ".$this->getprix()." €<br>";
    }
}

//$auteur = new Auteur();
//$auteur->setName('Stephen');
//$auteur->setLastName('King');
//echo $auteur;
?>