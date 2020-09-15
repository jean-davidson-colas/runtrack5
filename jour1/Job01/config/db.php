<?php
$host = 'localhost';
$dbname ='runtrack5';
$user = 'root';
$pass ='';


try
{
    //$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


?>
