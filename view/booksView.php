<?php
include "layout/header.php";
?>
<div class="button_cont text-center float-end col-3 mb-2"><a class="listbtn addbook" href="addBook.php" target="_blank" rel="nofollow noopener">Add a new Book</a></div>
<h3 class="mt-5">Existing Books : </h3>
<div class="row my-3">
    <div>
    <table class="table table-striped table-light">
        <thead class="thead-light">
        <tr>
            <th scope="col">Book's ID</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Genre</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($books as $book) : ?>
            <tr>
            <td><a href="singleBook.php?id=<?php echo $book->getId(); ?>"><?php echo $book->getID(); ?></a></td>
            <td><a href="singleBook.php?id=<?php echo $book->getId(); ?>"><?php echo $book->getTitle(); ?></a></td>
            <td><a href="singleBook.php?id=<?php echo $book->getId(); ?>"><?php echo $book->getAuthor(); ?></a></td>
            <td><?php echo $book->getGenre(); ?></td>
            <td><?php echo $book->getStatus(); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>

<?php 
include "layout/footer.php"; 
?>