<?php
try {
    $pdo= new PDO('mysql:host=localhost;dbname=élèves','root',''); 
}
catch(PDOexeption $e){
    echo "<p>Erreur: " .$e->getMessage();
    die();
}