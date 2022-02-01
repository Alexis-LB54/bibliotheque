<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action=<?= "http://127.0.0.1/bibliotheque/CriticM/$id" ?>>

        <label for="Book">Book:</label>
        <input name="Book" type="number" value="<?php echo $Critic->getBook() ?>" required />

        <label for="note">note:</label>
        <input name="note" type="number" value="<?php echo $Critic->getNote() ?>" required />

        <label for="Comment">Comment:</label>
        <input name="Comment" type="textarea" value="<?php echo $Critic->getComment() ?>" required />

        <input type="submit" value="Modify" />
    </form>
</body>

</html>