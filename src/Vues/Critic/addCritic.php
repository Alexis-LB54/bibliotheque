<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Critic</title>
</head>

<body>
    <form method="POST" action=<?="http://127.0.0.1/bibliotheque/CriticA/$id"?>>

        <label for="Book">Book:</label>
        <input name="Book" type="text" value="<?php echo $Critic->getTitle() ?>" required />

        <label for="note">note:</label>
        <input name="note" type="number" required />

        <label for="Comment">Comment:</label>
        <input name="Comment" type="textarea" required />

        <input type="submit" value="Add Critic" />
    </form>
</body>

</html>