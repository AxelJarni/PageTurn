<?php
include "layout/header.php";
?>

<h3>Existing Books : </h3>
<div class="row my-3">
    <div>
    <table class="table table-striped table-dark">
        <thead class="thead-dark">
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
            <td><?php echo $book->getID(); ?></td>
            <td><a href="singleBook.php?id=<?php echo $book->getId(); ?>"><?php echo $book->getTitle(); ?></a></td>
            <td><?php echo $book->getAuthor(); ?></td>
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