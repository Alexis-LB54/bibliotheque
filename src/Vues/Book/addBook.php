<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add Book</title>
</head>


<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <form method="POST" action="http://127.0.0.1/bibliotheque/BookA">
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

        <input type="submit" value="Add" class="bi bi-book"/>
        <i class="bi bi-book"></i>
    </form>
</body>

</html>