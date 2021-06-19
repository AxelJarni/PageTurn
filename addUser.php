<?php
require "model/userManager.php";
$userModel = new userManager();

if(isset($_POST["submit"])) {
    $error = "";
    $success ="";
    $newUser = array_map("htmlspecialchars", $_POST);
    // If the account type is not in the authorized list add error message
    if(empty($newUser["firstname"])) {
        $error .= "<li>You forgot to add a Firstname</li>";
    }
    if (empty($newUser["lastname"])) {
        $error .= "<li>You forgot to add a Lastname</li>";
    }
    if (empty($newUser["adress"])) {
        $error .= "<li>You forgot to add an Adress</li>";
    }
    if (empty($newUser["postcode"])) {
        $error .= "<li>You forgot to add a Postcode</li>";
    }
    if (empty($newUser["city"])) {
        $error .= "<li>You forgot to add a City</li>";
    }
    if (empty($newUser["email"])) {
        $error .= "<li>You forgot to add an Email</li>";
    }
    if (empty($newUser["birth_date"])) {
        $error .= "<li>You forgot to add a Date of Birth</li>";
    }
    if (empty($error)){
        $user = $userModel->adduser($newUser);
        $success .= "This User have been added !";
    }
}


require "view/addUserView.php";