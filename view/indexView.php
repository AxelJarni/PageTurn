<?php
include "layout/header.php";
?>

<div class="row d-flex justify-content-around">
    <div class="button_cont text-center col-4 m-4"><a class="indexbtn checkbooks" href="books.php" target="_blank" rel="nofollow noopener">See all<br>Books</a></div>
    <div class="button_cont text-center col-4 m-4"><a class="indexbtn checkusers" href="users.php" target="_blank" rel="nofollow noopener">See all<br>Users</a></div>
    <div class="button_cont text-center col-4 m-4"><a class="indexbtn addbook" href="addBook.php" target="_blank" rel="nofollow noopener">Add a new<br>Book</a></div>
    <div class="button_cont text-center col-4 m-4"><a class="indexbtn adduser" href="addUser.php" target="_blank" rel="nofollow noopener">Add a new<br>User</a></div>
</div>

<?php 
include "layout/footer.php"; 
?>