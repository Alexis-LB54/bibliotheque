<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Book</title>
</head>
<body>
<form method="POST" action=<?="http://127.0.0.1/bibliotheque/BookD/$id"?>>
        <label for="title">Title:</label>
        <input name="title" type="text" value="<?php echo $Book->getTitle() ?>" required />

        <label for="resume">resume:</label>
        <input name="resume" type="text" value="<?php echo $Book->getResume() ?>" required />

        <label for="author">author:</label>
        <input name="author" type="text" value="<?php echo $Book->getAuthor() ?>" required />

        <label for="editor">editor:</label>
        <input name="editor" type="text" value="<?php echo $Book->getEditor() ?>" required />

        <label for="ISBN">ISBN:</label>
        <input name="ISBN" type="number" value="<?php echo $Book->getISBN() ?>" required />

        <label for="stock">stock:</label>
        <input name="stock" type="number" value="<?php echo $Book->getStock_number() ?>" required />

        <label for="borrow">borrow:</label>
        <input name="borrow" type="number" value="<?php echo $Book->getBorrow_number() ?>" required />

        <input type="submit" value="DELETE" />
</form>
</body>
</html>