<?php
require_once "model/entity/entity.php";

// Classe représetant les utilisateurs stockés en base de données
class User extends Entity {

    protected string $firstname;
    protected string $lastname;
    protected string $adress;
    protected string $postcode;
    protected string $city;
    protected string $email;
    protected string $birth_date;

    

    public function setFirstname(string $firstname) {
        $this->firstname = htmlspecialchars($firstname);
    }
    public function getFirstname() {
        return $this->firstname;
    }

    public function setLastname(string $lastname) {
        $this->lastname = htmlspecialchars($lastname);
    }
    public function getLastname() {
        return $this->lastname;
    }

    public function setAdress(string $adress) {
        $this->adress = htmlspecialchars($adress);
    }
    public function getAdress() {
        return $this->adress;
    }

    public function setPostcode(int $postcode) {
        $this->postcode = htmlspecialchars($postcode);
    }
    public function getPostcode() {
        return $this->postcode;
    }

    public function setCity(string $city) {
        $this->city = htmlspecialchars($city);
    }
    public function getCity() {
        return $this->city;
    }

    public function setEmail(string $email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
            return $this;
        }
        throw new Exception("Format d'email incorrect");
    }
    public function getEmail() {
        return $this->email;
    }

    public function __construct($data) {
        $this->hydrate($data);
    }
}
