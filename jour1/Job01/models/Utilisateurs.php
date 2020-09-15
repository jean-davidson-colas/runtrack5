<?php
require('config/db.php');
require('controllers/Utilisateurs.php');




class Utilisateurs_model 
{

    function getUser(){
        //$bdd = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        
        
        try
        {
            $bdd = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        $reponse = $bdd->query('SELECT * FROM utilisateurs');
        $donnees = $reponse->fetchALL();
    
        
    }

    function addUser($firstname, $lastname,$email){

        try
        {
            $bdd = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    
        $req = $bdd->query(' utilisateurs');

    }

}

?>

