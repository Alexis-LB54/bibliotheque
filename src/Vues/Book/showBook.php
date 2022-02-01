<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Book</title>
</head>

<body>
    <?php
    if (empty($Book)) {
        echo "il n'y a aucun resultat";
    }

    foreach ($Book as $key => $value) : ?>

        <div>
            Titre : <?= $value->getTitle(); ?>
        </div>
        <div>
            Résumé : <?= $value->getResume(); ?>
        </div>
        <div>
            Auteur : <?= $value->getAuthor(); ?>
        </div>
        <div>
            Editeur : <?= $value->getEditor(); ?>
        </div>
        <div>
            ISBN : <?= $value->getISBN(); ?>
        </div>
        <div>
            Stock : <?= $value->getStock_number(); ?>
        </div>
        <div>
            Emprunt : <?= $value->getBorrow_number(); ?>
        </div>
    <?php
    endforeach;
    ?>
</body>

</html>