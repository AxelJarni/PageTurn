<?php
include "layout/header.php";
// var_dump($book);
// var_dump($book->getUser_id());
?>
<div class="m-5 row justify-content-center">
        <div class="card col-6">
            <!-- <img src="https://toppng.com/uploads/preview/open-book-icon-png-download-book-black-and-white-11563256975aruucvosij.png" class="card-img-top m-1" alt="book"> -->
            <div class="card-body">
            <h4 class="card-title"><strong>Title : </strong><?php echo $book->getTitle(); ?></h4>
            <h4 class="card-text"><strong>Author : </strong><?php echo $book->getAuthor(); ?></h4>
            <p class="card-text"><strong>Genre : </strong><?php echo $book->getGenre(); ?></p>
            <p class="card-text"><strong>Release Date : </strong><?php echo $book->getRelease_date(); ?></p>
            <p class="card-text"><strong>Synopsis : </strong><?php echo $book->getSynopsis(); ?></p>
            <a href="books.php" class="btn btn-outline-dark">Back </a>
        </div>
</div>

<?php if($book->getUser_id() === NULL): ?>
<div class="mt-3 col-4 mb-2 ">
    <form class="card-body" method="POST">
    <div class="form-group my-3">
        <p>ID of the User borrowing the book :</p>
        <label>ID : </label>
        <input name="id" value = "id" type="number" class="form-control" required="required">
    </div>
    <button name="borrow" type="submit" class="btn btn-outline-dark">Borrow Book</button>
    </form>
</div>

<?php else: ?>

<div class="m-3 col-4 row justify-content-end animate__animated animate__bounceInRight">
    <div class="card" >
        <div class="card-body">   
            <h3 class="card-title text-center"><strong>Book is currently borrowed by : </strong></h3>
            <h5 class="card-title"><strong>ID : </strong><?php echo $book->getUser_id(); ?></h5>
            <p class="card-text"><strong>Name : </strong><?php echo $users->getFirstname() . " " . $users->getLastname(); ?></p>
            <form method="POST">
                <button name="return" type="submit" class="btn btn-outline-dark">Return Book</button>
            </form>
        </div>
    </div>
</div>
<?php
// endforeach;
endif;?>
<?php
include "layout/footer.php"; 
?>