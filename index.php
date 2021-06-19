<?php
require "model/userManager.php";
require "model/bookManager.php";

$userModel = new UserManager();
$bookModel = new BookManager();
// GET USERS
// $users = $userModel->getUsers();
// var_dump($users);

// GET SINGLE USER
// $user_id = "2";
// $singleUser = $userModel->getSingleUser($user_id);
// var_dump($singleUser);

// ADD USER
// $userModel->addUser("Hugo", "Lloris", "34 rue du bouchon", "69000", "Lyon", "thefrenchwall@gmail.com", "1986-12-26");



// GET BOOKS
// $books = $bookModel->getBooks();
// var_dump($books);

// GET SINGLE BOOK
// $book_id = "3";
// $singleBook = $bookModel->getSingleBook($book_id);
// var_dump($singleBook);

// ADD BOOK
// $title = "Caste: The Origins of Our Discontents";
// $author = "Isabel Wilkerson";
// $genre = "Biography";
// $synopsis = "From Isabel Wilkerson, winner of the Pulitzer Prize in journalism, Caste: The Origins of Our Discontents continues a discernible theme in this year’s awards: books that take a long, hard look at America itself. Wilkerson argues, persuasively, that Americans are mired in an outdated and dangerous hierarchy system that goes even deeper than race and class. The silver lining: It’s not too late for meaningful change. ";
// $release_date = "2020-08-04";
// $bookModel->addBook($title, $author, $genre, $synopsis, $release_date);

// CHANGE BOOK STATUS
// $status = 0;
// $book_id = 1;
// $user_id = 2;
// $bookModel->updateBookStatus($status, $user_id, $book_id);

require "view/indexView.php";

