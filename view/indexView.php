<?php
include "layout/header.php";
?>

<div class="row d-flex justify-content-around">
    <div class="button_cont text-center col-4 m-4"><a class="indexbtn checkbooks" href="books.php" target="_blank" rel="nofollow noopener">Voir les<br>livres</a></div>
    <div class="button_cont text-center col-4 m-4"><a class="indexbtn checkusers" href="users.php" target="_blank" rel="nofollow noopener">Voir les utilisateurs</a></div>
    <div class="button_cont text-center col-4 m-4"><a class="indexbtn addbook" href="addBook.php" target="_blank" rel="nofollow noopener">Ajouter un<br>livre</a></div>
    <div class="button_cont text-center col-4 m-4"><a class="indexbtn adduser" href="addUser.php" target="_blank" rel="nofollow noopener">Ajouter un utilisateur</a></div>
</div>

<?php 
include "layout/footer.php"; 
?>