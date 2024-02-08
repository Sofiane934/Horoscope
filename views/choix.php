<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?action=reponse" method="post">
        <select name="horoscope" size="1">
            <?php foreach($signe as $cle => $valeur):?>
                <option value="<?= $cle ?>"> <?= $cle ?> </option>
            <?php endforeach ?>
        </select>
    <input type="submit" value="Envoyer">
    </form>
</body>
</html>