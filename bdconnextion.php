<?php
// connection à la base de donnees
function connextion(){
    try
    {
    
        global $bdd ;
        $bdd = new pdo('mysql:host=localhost;dbname=dbyaha;','root','');

    }
    catch (exception $e)
    {
        die('Erreur :' .$e->getMessage());

    }
}
?>