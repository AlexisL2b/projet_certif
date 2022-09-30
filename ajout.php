<?php
require_once 'Database.php';
$db = new Database();
$GLOBALS['database'] = $db->connexion();

switch($_POST['request'])
{
    case 'ajout':

        $name_site=$_POST['name'];
        $msg = 'coucou';
        $requete="INSERT INTO site_geographique (nom) VALUES('".mysqli_real_escape_string($GLOBALS['database'],$name_site)."')";
        mysqli_query($GLOBALS['database'], $requete) or die;
        echo json_encode(array('msg' => $msg));
        break;

};



?>