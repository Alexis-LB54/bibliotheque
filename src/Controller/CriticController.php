<?php

namespace App\Controller;

use App\Helpers\EntityManagerHelper;
use App\Entity\Critic;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class CriticController
{
    const CRITIC = [
        "Book", "note", "Comment"
    ];

    function show()
    {
        $em = EntityManagerHelper::getEntityManager();
        $repositoryCritic = new EntityRepository($em, new ClassMetadata("App\Entity\Critic"));
        $Critic = $repositoryCritic->findAll();

        include (__DIR__."/../Vues/Critic/showCritic.php");
    }

    public function add(string $id)
    {
        $em = EntityManagerHelper::getEntityManager();

        $repositoryCritic = new EntityRepository($em, new ClassMetadata("App\Entity\Book"));
        $Critic = $repositoryCritic->find((int) $id);

        if (empty($_POST)) {
            include(__DIR__ . "/../Vues/Critic/addCritic.php");
            die();
        }

        foreach (self::CRITIC as $value) {
            // var_dump($value);
            // die();
            if (!array_key_exists($value, $_POST)) {
                $error = "Le Champs est vide";
                include(__DIR__ . "/../Vues/Critic/addCritic.php");
                echo $error;
                exit;
            }

            $_POST[$value] = trim(htmlentities(strip_tags($_POST[$value])));


            if ($_POST[$value] === "") {
                $error = "Le Champs est vide";
                include(__DIR__ . "/../Vues/Critic/addCritic.php");
                echo $error;
                exit;
            }
        }

        $Critic->getTitle($_POST["Book"]);
        $CriticNote = (int)$_POST["note"];
        $CriticComment = $_POST["Comment"];

        $NewCritic = new Critic($Critic, $CriticNote, $CriticComment);
        $em->persist($NewCritic);
        $em->flush();

        include(__DIR__ . "/../Vues/Critic/addCritic.php");
    }

    public function modify(string $id)
    {
        $em = EntityManagerHelper::getEntityManager();

        $repoCritic = new EntityRepository($em, new ClassMetadata("App\Entity\Critic"));
        $Critic = $repoCritic->find($id);

        var_dump($Critic);
        die();

        if (!empty($_POST)) {
            foreach (self::CRITIC as $value) {
                $existe = array_key_exists($value, $_POST);
                if ($existe === false) {
                    echo "erreur";
                    include(__DIR__ . "/../Vues/Critic/modifyCritic.php");
                    die();
                }
            }
        }

        $_POST[$value] = trim(htmlentities(strip_tags($_POST[$value])));

        // var_dump($_POST[$value]);
        // die();

        if ($_POST[$values] === "") {
            echo "Champs $value vide";
            include(__DIR__ . "/../Vues/Critic/modifyCritic.php");
            die();
        }

        $Critic->getBook((int)$_POST["Book"]);
        $Critic->setNote((int)$_POST["note"]);
        $Critic->setComment($_POST["Comment"]);
        $em->persist($Critic);
        $em->flush();

        include(__DIR__ . "/../Vues/Critic/modifyCritic.php");
    }

    public function delete($id)
    {
        $em = EntityManagerHelper::getEntityManager();

        $RepoCritic = new EntityRepository($em, new ClassMetadata("App\Entity\Critic"));
        $Critic = $RepoCritic->find($id);

        // var_dump($Critic);
        // die();

        if (!empty($_POST)) {
            foreach (self::CRITIC as $value) {
                $existe = array_key_exists($value, $_POST);
                if ($existe === false) {
                    echo "erreur";
                    include(__DIR__ . "/../Vues/Critic/deleteCritic.php");
                    die();
                }
            }
        }

        $_POST[$value] = trim(htmlentities(strip_tags($_POST[$value])));


        if ($_POST[$values] === "") {
            echo "Champs $value vide";
            include(__DIR__ . "/../Vues/Critic/deleteCritic.php");
            die();
        }

        $em->remove($Critic);
        $em->flush();
    }
}
