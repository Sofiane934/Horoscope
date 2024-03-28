<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php?action=administrer" method="post">
        <?php foreach ($signe as $cle => $valeur): ?>
            <label for="<?= $cle ?> "><?= $cle ?> </label>
            <input type="text" id="<?= $cle ?>" name="<?= $cle ?>" value="<?= $valeur ?>"> <br>
        <?php endforeach ?>
        <input type="submit" value="OK">
    </form>
</body>
</html>











