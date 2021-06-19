<?php
require "model/userManager.php";
$userModel = new UserManager();
$users = $userModel->getUsers();
if(!$users) {
    $error = "Nous avons rencontré un problème, veuillez retourner à l'accueil.";
}



// Controleur qui gère l'affichage du détail d'un livre
require "view/usersView.php";