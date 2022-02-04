<!DOCTYPE html>
<html lang="en">

<head>
    <title>Show Book</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <div class="mabox overflow-scroll" style="overflow: scroll;">

        <div class="container">

            <div>
                Livre : <?= $book->getTitle(); ?>
            </div>

            <div class="col-md-12 m" id="container">
                <table class="table table-info table-hover table-sm">
                    <thead>
                        <th class="table-warning">
                            <div class="text-center">Titre :</div>
                        </th>
                        <!-- <th>
                        <div class="text-center">Description:</div>
                    </th> -->
                        <th class="table-warning">
                            <div class="text-center">Stock:</div>
                        </th>
                        <th class="table-warning">
                            <div class="text-center">Action </div>
                        </th>
                    </thead>
                    <?php

                    if (empty($Book)) {
                        echo "il n'y a aucun resultat";
                    }

                    foreach ($Book as $key => $value) : ?>


                        <tr>

                            <td>
                                <div class="text-center">
                                    <a href="#" title="<?= $value->getAuthor(); ?>" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="<?= $value->getEditor(); ?>">
                                    <?= $value->getTitle(); ?></a>
                                </div>

                                <script>
                                    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                                    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                                        return new bootstrap.Popover(popoverTriggerEl)
                                    })
                                </script>


                            </td>
            </div>

            <!-- <td>
                        <div class="text-center"> <?= $value->getResume() ?> </div>
                    </td> -->

            <td class="table-danger">
                <div class="text-center"> <?= $value->getISBN() ?> </div>
            </td>

            <td class="table-success">
                <div class="d-flex justify-content-evenly">

                    <button type="button" class="btn btn-light edition" data-id="<?= $value->getTitle(); ?>" data-bs-toggle="modal" data-bs-target='<?= "#chat" . $cat->getTitle() ?>'>
                        <span><i class="far fa-edit"></i></span>
                    </button>

                    <button type="button" class="btn btn-light suppression" data-id="<?= $value->getTitle(); ?>" data-NAME="<?= $cat->getNAME(); ?>">
                        <span><i class="far fa-trash-alt"></i></span>
                    </button>

                </div>
            </td>

            <!-- Modal -->
            <div class="modal fade" id='<?= "chat" . $value->getTitle() ?>' tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editer un chat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="form_controller">

                                <form action='<?= "/cat/$sId" ?>' method="POST" class="d-flex flex-column align-items-center">
                                    <!--pour -->

                                    <div class="form-group">
                                        <label for="name">Titre: </label>
                                        <input class="form-control" type="text" name="name" id="name" value="<?= $value->getTitle(); ?>">
                                    </div><br>

                                    <div class="form-group">
                                        <label for="description">DESCRIPTION: </label>
                                        <input class="form-control" type="text" name="description" id="description" value="<?= $value->getResume(); ?>">
                                    </div><br>

                                    <div class="input-group mb-3">
                                        <label class="form-control" for="bar">Livre</label>
                                        <select name="bar" id="bar">
                                            <?php foreach ($Book as $key => $value) : ?>
                                                <?php if ($value->getBar()->getTitle() === $value->getTitle()) : ?>
                                                    <option value="<?= $value->getTitle() ?>" selected="selected"><?= $value->getSign(); ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $value->getTitle() ?>"><?= $value->getSign(); ?></option>
                                                <?php endif; ?>

                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

                <!--/Modal-->
                </tr>
            <?php
                    endforeach;
            ?>
            </table>
            </div>
        </div>


        <!-- Carousel -->
        <div class="d-flex justify-content-center">
            <div id="demo" class="carousel slide" style="width:350px" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/best-girl-cat-names-1606245046.jpg" alt="mew" class="d-block" style="width:350px; height:250px;">
                    </div>
                    <div class="carousel-item">
                        <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/kitten-playing-with-toy-mouse-royalty-free-image-590055188-1542816918.jpg" alt="mew" class="d-block" style="width:350px; height:250px;">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images3.alphacoders.com/737/thumb-350-73759.jpg" alt="miaou" class="d-block" style="width:350px; height:250px;">
                    </div>
                    <div class="carousel-item">
                        <img src="https://idsb.tmgrup.com.tr/ly/uploads/images/2021/09/08/thumbs/800x531/142774.jpg" alt="miaou" class="d-block" style="width:350px; height:250px;">
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


        </div>
    </div>

    <script>
        // $(".edition").on("click", function(e) {
        //     // window.location.href = "/cat/" + $(this).attr("data-id");
        // });

        $(".suppression").on("click", function(e) {

            if (confirm("Êtes vous sur de vouloir supprimer " + $(this).attr("data-name")) == true) {
                window.location.href = "/removecat/" + $(this).attr("data-id");
            }

        });
    </script>

</body>

</html>