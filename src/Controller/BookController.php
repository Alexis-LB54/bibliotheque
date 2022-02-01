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

    public function show()
    {
        $em = EntityManagerHelper::getEntityManager();
        $repositoryBook = new EntityRepository($em, new ClassMetadata("App\Entity\Book"));
        $Book = $repositoryBook->findAll();

        include (__DIR__."/../Vues/Book/showBook.php");
    }

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


        $NewBook = new Book($BookTitle, $BookResume, $BookAuthor, $BookEditor, $BookISBN, $BookStock, $BookBorrow);
        $em->persist($NewBook);
        $em->flush();

        include(__DIR__ . "/../Vues/Book/addBook.php");
    }

    public function modify(string $id)
    {
        $em = EntityManagerHelper::getEntityManager();

        $repositoryBook = new EntityRepository($em, new ClassMetadata("App\Entity\Book"));
        $Book = $repositoryBook->find($id);


        if (!empty($_POST)) {
            foreach (self::BOOK as $value) {
                $existe = array_key_exists($value, $_POST);
                if ($existe === false) {
                    echo "erreur";
                    include(__DIR__ . "/../Vues/Book/modifyBook.php");
                    die();
                }
            }
        }

        $_POST[$value] = trim(htmlentities(strip_tags($_POST[$value])));

        // var_dump($_POST[$value]);
        // die();

        if ($_POST[$values] === "") {
            echo "Champs $value vide";
            include(__DIR__ . "/../Vues/Book/modifyBook.php");
            die();
        }

        $Book->setTitle($_POST["title"]);
        $Book->setResume($_POST["resume"]);
        $Book->setAuthor($_POST["author"]);
        $Book->setEditor($_POST["editor"]);
        $Book->setISBN((int)$_POST["ISBN"]);
        $Book->setStock_number((int)$_POST["stock"]);
        $Book->setBorrow_number((int)$_POST["borrow"]);
        $em->persist($Book);
        $em->flush();

        include(__DIR__ . "/../Vues/manager/modifyArticle.php");
    }

    public function delete($id)
    {
        $em = EntityManagerHelper::getEntityManager();

        $repositoryBook = new EntityRepository($em, new ClassMetadata("App\Entity\Book"));
        $Book = $repositoryBook->find($id);

        
        if (!empty($_POST)) {
            foreach (self::BOOK as $value) {
                $existe = array_key_exists($value, $_POST);
                if ($existe === false) {
                    echo "erreur";
                    include(__DIR__ . "/../Vues/Book/deleteBook.php");
                    die();
                }
            }
        }
        
        $_POST[$value] = trim(htmlentities(strip_tags($_POST[$value])));
        
        
        if ($_POST[$values] === "") {
            echo "Champs $value vide";
            include(__DIR__ . "/../Vues/Book/deleteBook.php");
            die();
        }
        
        $em->remove($Book);
        $em->flush();
    }
}
