<?php
include "layout/header.php";
var_dump($book);
// var_dump($book->getUser_id());
?>
<div class="m-5 row justify-content-center">
        <div class="card col-8">
            <!-- <img src="https://toppng.com/uploads/preview/open-book-icon-png-download-book-black-and-white-11563256975aruucvosij.png" class="card-img-top m-1" alt="book"> -->
            <div class="card-body">
            <h4 class="card-title"><strong>Title : </strong><?php echo $book->getTitle(); ?></h4>
            <h4 class="card-text"><strong>Author : </strong><?php echo $book->getAuthor(); ?></h4>
            <p class="card-text"><strong>Genre : </strong><?php echo $book->getGenre(); ?></p>
            <p class="card-text"><strong>Release Date : </strong><?php echo $book->getRelease_date(); ?></p>
            <p class="card-text"><strong>Synopsis : </strong><?php echo $book->getSynopsis(); ?></p>
            <p class="card-text"><strong>STATUS : </strong><?php echo $book->getStatus(); ?></p>
            <p class="card-text"><strong>USER ID : </strong><?php echo $book->getUser_id(); ?></p>
            <a href="index.php" class="btn btn-outline-dark">Retour </a>
        </div>
</div>



<?php 
include "layout/footer.php"; 
?>