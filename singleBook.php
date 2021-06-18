<?php

require "model/bookManager.php";
require "model/UserManager.php";
$bookModel = new BookManager();
$userModel = new UserManager();
$book = $bookModel->getSingleBook($_GET["id"]);
$users = $userModel->getUsers();
$user_id = $book->getUser_id();

if($book->getUser_id() !== NULL) {
    $users = $userModel->getSingleUser($user_id);
    var_dump($users);
};

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

$whohaveit = $bookModel->whoBorrowed($_GET["id"]);


require "view/singleBookView.php";