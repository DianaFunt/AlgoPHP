<?php
require('Auteur.php');
require('Livre.php');



$auteur = new Auteur('Stephen', 'King');
$livre1 = new Livre('Ca', 1986, 1138, 20, $auteur);
$livre2 = new Livre('Simetierre', 1983, 374, 15, $auteur);
$livre3 = new Livre('Le Fléau', 1978, 823, 14, $auteur);
$livre4 = new Livre('Shining', 1977, 447, 16, $auteur);

echo $auteur->afficherLivres(); // afiicher tous livres dans le table 'books' 


?>