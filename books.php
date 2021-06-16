<?php
require "model/bookManager.php";
$bookModel = new BookManager();
$books = $bookModel->getBooks();
if(!$books) {
    $error = "Nous avons rencontré un problème, veuillez retourner à l'accueil.";
}



// Controleur qui gère l'affichage du détail d'un livre
require "view/booksView.php";