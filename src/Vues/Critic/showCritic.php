<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Critic</title>
</head>

<body>
    <?php
    if (empty($Critic)) {
        echo "il n'y a aucun resultat";
    }

    foreach ($Critic as $key => $value) : ?>

        <div>
            Id Book : <?= $value->getBook(); ?>
        </div>
        <div>
            Note : <?= $value->getNote(); ?>
        </div>
        <div>
            Commentaire : <?= $value->getComment(); ?>
        </div>
    <?php
    endforeach;
    ?>
</body>

</html>