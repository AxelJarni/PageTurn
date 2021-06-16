<?php
require "model/userManager.php";
$userModel = new userManager();
// $users = $userModel->getUsers();
// var_dump($users);
// echo "lol";
// $user_id = "2";
// $singleUser = $userModel->getSingleUser($user_id);
// var_dump($singleUser);
$userModel->addUser("Hugo", "Lloris", "34 rue du bouchon", "69000", "Lyon", "thefrenchwall@gmail.com", "1986-12-26");
// Controlleur qui gérer l'affichage de tous les livres
require "view/indexView.php";

