<?php
include'./connec.php';
include'./navbar.php';

// j'execute ma requete SELECT de ma table friend
$allFriends = $pdo->query("SELECT * FROM FRIEND")->fetchAll();

// boucler sur le tableau allFriends
foreach($allFriends as $pote)
{
    echo $pote['firstname'].' --- '.$pote['lastname'].'<br/>';

}

?>
