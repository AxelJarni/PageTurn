<?php

require "model/bookManager.php";
$bookModel = new BookManager();
$book = $bookModel->getSingleBook($_GET["id"]);
if(!$book) {
    $error = "Nous avons rencontré un problème, veuillez retourner à l'accueil.";
}

require "view/singleBookView.php";