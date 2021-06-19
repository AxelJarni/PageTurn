<?php
require_once "model.php";
require "model/entity/user.php";

class UserManager extends Model {

    // Récupère tous les utilisateurs
    public function getUsers() {
      $query = $this->db->prepare(
        "SELECT *
        FROM User"
      );
      $query->execute();
      $users = $query->fetchAll(PDO::FETCH_ASSOC);
      foreach ($users as $key=>$user) {
        $users[$key] = new User($user);
      }
      return $users;
    }

    // Récupère un utilisateur par son id
    public function getSingleUser($user_id) {
      $query = $this->db->prepare(
        "SELECT *
        FROM user
        WHERE id = :user_id"
      );
      $query->execute([
        "user_id"=>$user_id
        ]);
      $user = $query->fetch(PDO::FETCH_ASSOC);
      // $user = $users;
      // foreach($users as $key => $user){
      //   $users[$key] = new User($user);
      // }
      return new User($user);
    }

    public function addUser($newUser) {
      $query = $this->db->prepare(
        "INSERT INTO user (firstname, lastname, adress, postcode, city, email, birth_date)
        VALUES (:firstname, :lastname, :adress, :postcode, :city, :email, :birth_date)"
      );
      $query->execute([
        "firstname" => $newUser["firstname"],
        "lastname" => $newUser["lastname"],
        "adress" => $newUser["adress"],
        "postcode" => $newUser["postcode"],
        "city" => $newUser["city"],
        "email" => $newUser["email"],
        "birth_date" => $newUser["birth_date"]
      ]);
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
