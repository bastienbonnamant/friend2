<?php
include'./connec.php';
include'./navbar.php';



if(isset($_POST['submit']) && $_POST['submit']<>''){
    $sql = "INSERT INTO FRIEND VALUES(null, '".$_POST['firstname']."', '".$_POST['lastname']."')";
    $result = $pdo->exec($sql);
    if($result){
        echo'<h2>Bienvenu mon ami</h2>';
    }else{
        echo"<h2>Tu n'es pas mon ami</h2>";

    }
}
?>


<form method="post">
    <input type="text" name="firstname" placeholder="firstname" /><br/> <!-- je fais référence au champ title de la table story -->
    <textarea name="lastname" placeholder="lastname"></textarea><br/><br/> <!-- je fais référence au champ content de la table story -->
    <button type="submit" name="submit" value="submit">Créer</button>  <!-- je met en place le bouton de soumission du formulaire -->
</form>

<p>
<a href="/friend.php">Voir tout mes amis</a>

</p>
