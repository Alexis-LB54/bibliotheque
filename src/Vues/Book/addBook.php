<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
<form method="POST" action="http://127.0.0.1/forum/BookA">
        <label for="title">Title:</label>
        <input name="title" type="text" required />

        <label for="resume">resume:</label>
        <input name="resume" type="text" required />

        <label for="author">author:</label>
        <input name="author" type="text" required />

        <label for="editor">editor:</label>
        <input name="editor" type="text" required />

        <label for="ISBN">ISBN:</label>
        <input name="ISBN" type="number" required />

        <label for="stock">stock:</label>
        <input name="stock" type="number" required />

        <label for="borrow">borrow:</label>
        <input name="borrow" type="number" required />

        <input type="submit" value="Add" />
</form>
</body>
</html>