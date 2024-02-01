<?php
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
?>

<form method='GET'action="passageRecupG.php">
    <input type="hidden" name="nom" value="<?=$nom?>">
    <input type="hidden" name="prenom" value="<?=$prenom?>">
    <label for="age">Age:</label>
    <input type="text" id="age" name="age"> <br>
    <input type="submit" value="Valider">
</form>

