<?php
class Auteur
{
    private $name;
    private $lastName;
    private $books; //un tableau pour collecter tous les livres d'un auteur

    public function __construct($name, $lastName)
    {
        $this->name = $name;
        $this->lastName= $lastName;
        $this->books = []; // un tableau pour les livres

    }
    public function afficherLivres(){
        echo "Livres de " . $this->getName() . " " . $this->getLastName().'<br>'; // afficher tous livres pour d'un auteur

        foreach($this->books as $book){  //trie les livres par auteur
            echo $book;
        }
    }


    // ajouter un livre depuis fichier Livre.php dans tableau 'books'
    public function addBook(Livre $book){
        $this->books []= $book;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setLastName($LastName)
    {
        $this->lastName = $LastName;
    }
    public function __toString()
    {
        return "Livres de " . $this->getName() . " " . $this->getLastName();
    }
}


