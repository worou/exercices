<?php

require_once('Employe.php');


//construct par defaut
//$employe1= new Employe();

//$employe1->nom="toto";pas possible car attr privé donc faut passer par le SET

//$employe1->setNom("toto");
// $employe1->setPrenom("titi");
// $employe1->setAdresse("melun");
// $employe1->setMatricule("76544");
// $employe1->setSalaire(34678);
// $employe1->setAge(34);
// $employe1->setDescription("dev web");


// //affichage
// echo $employe1->getNom();

// echo"<br/>";
// echo $employe1->getPrenom();

// echo"<br/>";
// echo $employe1->affichage();


// echo"<br/>";
// $employe2= new Employe();
// $employe2->setNom("Lili");
// $employe2->setprenom("truc");
// $employe2->setadresse("Melun");
// $employe2->setMatricule(56465476);
// $employe2->setSalaire(5567);
// $employe2->setDescription("Graphiste");
// $employe2->setAge(22);
// echo $employe2->affichage();


$employe3= new Employe(0.05);
$employe3->setSalaire(2135);
echo $employe3->getSalaire();
echo'</br>';
$employe4= new Employe(0.6);
$employe4->setSalaire(4500);
echo $employe4->getSalaire();

