<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="/../bibliotheque/style/style.css" /> -->
    <title>Show Book</title>
</head>

<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class="container">
        <h1>Nos Livres en bibliothèque :</h1>
        <table class="table">
            <?php
            if (empty($Book)) {
                echo "il n'y a aucun resultat";
            }

            foreach ($Book as $key => $value) : ?>
                <thead class="thead-light">
                    <tr>
                        <th>Titre</th>
                        <th>Résumé</th>
                        <th>ISBN</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="#" title="<?= $value->getAuthor(); ?>" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="<?= $value->getEditor(); ?>"><?= $value->getTitle(); ?></a>
                        </td>
                        <td><?= $value->getResume(); ?></td>
                        <td><?= $value->getISBN(); ?></td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#c<?= $value->getId(); ?>">
                                Status
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="c<?= $value->getId(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Status du Livre</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                Stock : <?= $value->getStock_number(); ?>
                                            </div>
                                            <div>
                                                Emprunt : <?= $value->getBorrow_number(); ?>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <script>
                    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                        return new bootstrap.Popover(popoverTriggerEl)
                    })
                </script>
            <?php
            endforeach;
            ?>
        </table>
    </div>

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/style/star-wars.jpg" alt="Star Wars" class="d-block" style="width:50%">
            </div>
            <div class="carousel-item">
                <img src="/style/dc-universe.jpg" alt="DC Univers" class="d-block" style="width:50%">
            </div>
            <div class="carousel-item">
                <img src="/style/moliere.jpeg" alt="Molière : Le Malade Imaginaire" class="d-block" style="width:50%">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container-fluid mt-3">
        <h3>Aperçu de nos exclus !</h3>
        <p>De Star Wars à Molière en passant par Batman, on a absolument tout !</p>
    </div>

</body>

</html>