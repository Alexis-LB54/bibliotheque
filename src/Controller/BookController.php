<?php

namespace App\Controller;

use App\Helpers\EntityManagerHelper;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use App\Entity\Book;

class BookController
{
    const BOOK = [
        "title", "resume", "author", "editor", "ISBN", "stock", "borrow"
    ];

    public function add()
    {
        $em = EntityManagerHelper::getEntityManager();

        if (empty($_POST)) {
            include(__DIR__ . "/../Vues/Book/addBook.php");
            die();
        }

        foreach (self::BOOK as $value) {

            if (!array_key_exists($value, $_POST)) {
                $error = "Le Champs est vide";
                include(__DIR__ . "/../Vues/Book/addBook.php");
                echo $error;
                exit;
            }

            $_POST[$value] = trim(htmlentities(strip_tags($_POST[$value])));

            
            if ($_POST[$value] === "") {
                $error = "Le Champs est vide";
                include(__DIR__ . "/../Vues/Book/addBook.php");
                echo $error;
                exit;
            }
        }
        
        $BookTitle = $_POST["title"];
        $BookResume = $_POST["resume"];
        $BookAuthor = $_POST["author"];
        $BookEditor = $_POST["editor"];
        $BookISBN = (int)$_POST["ISBN"];
        $BookStock = (int)$_POST["stock"];
        $BookBorrow = (int)$_POST["borrow"];

        // var_dump($BookISBN);
        // die();

        $NewBook = new Book($BookTitle, $BookResume, $BookAuthor, $BookEditor, $BookISBN, $BookStock, $BookBorrow);
        //var_dump($NewBook);
        $em->persist($NewBook);
        $em->flush();

        include(__DIR__ . "/../Vues/Book/addBook.php");
    }

    public function modify(string $id)
    {
        $em = EntityManagerHelper::getEntityManager();

        $repositoryArticle = new EntityRepository($em, new ClassMetadata("App\Entity\Book"));
        $Article = $repositoryArticle->find($id);

        if (!empty($_POST)) {
            foreach (self::BOOK as $value) {
                $existe = array_key_exists($value, $_POST);
                if ($existe === false) {
                    echo "erreur";
                    include(__DIR__ . "/../Vues/manager/modifyArticle.php");
                    die();
                }

                $_POST[$value] = trim(htmlentities(strip_tags($_POST[$value])));
                if ($_POST[$values] === "") {
                    echo "Champs $value vide";
                    include(__DIR__ . "/../Vues/manager/modifyArticle.php");
                    die();
                }
            }
        }

        $Article->setTitle($_POST["Title"]);
        $Article->setResume($_POST["resume"]);
        $Article->setAuthor($_POST["author"]);
        $Article->setEditor($_POST["editor"]);
        $Article->setISBN($_POST["ISBN"]);
        $Article->setNote($_POST["note"]);
        $Article->setComment($_POST["Comment"]);
        $em->persist($Article);
        $em->flush();

        include(__DIR__ . "/../Vues/manager/modifyArticle.php");
    }
}
