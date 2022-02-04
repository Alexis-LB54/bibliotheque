<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- <link rel="stylesheet" href="/./style/comicswhite.jpg" /> -->

    <title>Add Book</title>
</head>


<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class="container">
        <h1>Ajout d'un livre</h1>
        <form method="POST" action="http://127.0.0.1/bibliotheque/BookA">
            <fieldset>
                <legend>Remplissez le formulaire d'ajout</legend>

                <div class="form-group">
                    <label for="nom">Title :</label>
                    <input type="text" class="form-control" id="nom" placeholder="Star Wars">
                </div>

                <div class="form-group">
                    <label for="bio">Resume :</label>
                    <textarea class="form-control" id="bio" rows="3" placeholder="il y a bien longtemps, dans une galaxie lointaine, très lointaine..."></textarea>
                </div>

                <div class="form-group">
                    <label for="nom">Author :</label>
                    <input type="text" class="form-control" id="nom" placeholder="Georges Lucas">
                </div>

                <div class="form-group">
                    <label for="nom">Editor :</label>
                    <input type="text" class="form-control" id="nom" placeholder="Lucasfilm">
                </div>

                <div class="form-group">
                    <label for="nom">ISBN :</label>
                    <input type="number" class="form-control" id="nom" placeholder="1234567891234">
                </div>

                <div class="form-group">
                    <label for="nom">Stock :</label>
                    <input type="number" class="form-control" id="nom" placeholder="2005">
                </div>
                <div class="form-group">
                    <label for="nom">Borrow :</label>
                    <input type="number" class="form-control" id="nom" placeholder="1977">
                </div>

                <div>
                    <input type="submit" value="Add" />
                </div>

            </fieldset>
        </form>
    </div>
</body>

</html>