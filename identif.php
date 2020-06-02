<?php

$conn=mysqli_connect('localhost','root','','hanen') or die(mysqli_error());
$NOM=$_POST['nom'] ;
$PRE=$_POST['pre'] ;
$ADD=$_POST['add'] ;
$MAIL=$_POST['mail'] ;
$NUM=$_POST['num'] ;

$req="INSERT INTO beji(nom,prenom,adresse,e_mail,numero)values('$NOM','$PRE','$ADD','$MAIL','$NUM',)";

$res=mysqli_query($conn,$req);


 ?>
