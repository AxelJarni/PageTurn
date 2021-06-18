<?php
require "model/bookManager.php";
$bookModel = new BookManager();

if(isset($_POST["submit"])) {
    $error = "";
    $success ="";
    $newBook = array_map("htmlspecialchars", $_POST);
    // If the account type is not in the authorized list add error message
    if(empty($newBook["title"])) {
        $error .= "<li>You forgot to add a Title</li>";
    }
    if (empty($newBook["author"])) {
        $error .= "<li>You forgot to add an Author</li>";
    }
    if (empty($error)){
        $book = $bookModel->addBook($newBook);
        $success .= "This Book have been added !";
    }
}


require "view/addBookView.php";