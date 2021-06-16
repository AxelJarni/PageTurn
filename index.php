<?php
require "model/userManager.php";
$userModel = new userManager();
// $users = $userModel->getUsers();
// var_dump($users);
// echo "lol";
$user_id = "2";
$singleUser = $userModel->getUserById($user_id);
var_dump($singleUser);
// Controlleur qui gérer l'affichage de tous les livres
require "view/indexView.php";

