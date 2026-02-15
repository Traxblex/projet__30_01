<?php

    try{
        $user = "root";
        $pass = "";
        $bdd = new PDO('mysql:host=localhost;dbname=cfa_sport' , $user, $pass);
    } catch(PDOException $e) {
        print "Erreur! :" .$e ->get%message() . 
        "<br/>";
        die();
    }