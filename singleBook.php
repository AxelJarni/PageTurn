<?php

require "model/bookManager.php";
require "model/UserManager.php";
$bookModel = new BookManager();
$userModel = new UserManager();
$book = $bookModel->getSingleBook($_GET["id"]);
$users = $userModel->getUsers();
if(!$book) {
    $error = "Nous avons rencontré un problème, veuillez retourner à l'accueil.";
}

if(isset($_POST["borrow"])){
    if($_POST["id"]){
    $status = 0;
    $borrowBook = $bookModel->updateBookStatus($status, $_POST["id"], $_GET["id"]);
    header("location: books.php");
    }
}

if(isset($_POST["return"])){
    $status = 1;
    $user_id = NULL;
    $returnBook = $bookModel->updateBookStatus($status, $user_id, $_GET["id"]);
    header("location: books.php");
}

require "view/singleBookView.php";