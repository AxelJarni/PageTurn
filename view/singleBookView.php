<?php
include "layout/header.php";
// var_dump($book);
?>
<div class="mt-3 mb-2 row justify-content-center animate__animated animate__bounceInLeft">
        <div class="card col-8">
            <!-- <img src="https://toppng.com/uploads/preview/open-book-icon-png-download-book-black-and-white-11563256975aruucvosij.png" class="card-img-top m-1" alt="book"> -->
            <div class="card-body">
            <h4 class="card-title"><strong>Title : </strong><?php echo $book->getTitle(); ?></h4>
            <h4 class="card-text"><strong>Author : </strong><?php echo $book->getAuthor(); ?></h4>
            <p class="card-text"><strong>Genre : </strong><?php echo $book->getGenre(); ?></p>
            <p class="card-text"><strong>Release Date : </strong><?php echo $book->getRelease_date(); ?></p>
            <p class="card-text"><strong>Synopsis : </strong><?php echo $book->getSynopsis(); ?></p>
            <a href="index.php" class="btn btn-outline-dark">Retour</a>
        </div>
</div>

<?php 
include "layout/footer.php"; 
?>