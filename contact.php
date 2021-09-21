<?php
 
 

if(isset($_GET['nom'])){

   $nom=$_GET['nom'];
   $prenom=$_GET['prenom'];
   $adresse=$_GET['adresse'];
   $email=$_GET['email'];
   $telephone=$_GET['telephone'];
   $envoyer=$_GET["envoyer"];
   $erreur="";

}


if(isset($envoyer))
{  
    if(empty($nom)) $erreur= "<li> Champ manquant! Entrez votre nom !</li>";
    if(empty($prenom)) $erreur.= "<li> Saisir votre prenom svp !</li>";
    if(empty($email)) $erreur.= "<li>Veuillez remplir votre email svp !</li>";
    if(empty($adresse)) $erreur.= "<li>Champ obligatoire saisir votre adresse!</li>";
    if(empty($telephone)) $erreur.= "<li>Entrez votre numéro de telephone svp !</li>";

  }
       
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>