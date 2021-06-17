<?php
require_once "model.php";
require "model/entity/user.php";

class UserManager extends Model {

    // Récupère tous les utilisateurs
    public function getUsers() {
      $query = $this->db->prepare(
        "SELECT *
        FROM user"
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
      $users = $query->fetchAll(PDO::FETCH_ASSOC);
      foreach($users as $key => $user){
        $users[$key] = new User($user);
      }
      return $users;
    }

    public function addUser($firstname, $lastname, $adress, $postcode, $city, $email, $birth_date) {
      $query = $this->db->prepare(
        "INSERT INTO user (firstname, lastname, adress, postcode, city, email, birth_date)
        VALUES (:firstname, :lastname, :adress, :postcode, :city, :email, :birth_date)"
      );
      $query->execute([
        "firstname" => $firstname,
        "lastname" => $lastname,
        "adress" => $adress,
        "postcode" => $postcode,
        "city" => $city,
        "email" => $email,
        "birth_date" => $birth_date
      ]);
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
