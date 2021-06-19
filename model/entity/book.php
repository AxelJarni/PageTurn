<?php
require_once "model/entity/entity.php";

// Classe représetant les livres stockés en base de données
class Book extends Entity {
    protected ?string $title;
    protected ?string $author;
    protected ?string $genre;
    protected ?string $synopsis;
    protected ?string $release_date;
    protected ?int $status;
    protected ?int $user_id;

    public function setTitle(?string $title) {
        $this->title = htmlspecialchars($title);
    }
    public function getTitle() {
        return $this->title;
    }

    public function setAuthor(?string $author) {
        $this->author = htmlspecialchars($author);
    }
    public function getAuthor() {
        return $this->author;
    }

    public function setGenre(?string $genre) {
        $this->genre = htmlspecialchars($genre);
    }
    public function getGenre() {
        return $this->genre;
    }

    public function setSynopsis(?string $synopsis) {
        $this->synopsis = htmlspecialchars($synopsis);
    }
    public function getSynopsis() {
        return $this->synopsis;
    }

    public function setRelease_date(?string $release_date) {
        $this->release_date = htmlspecialchars($release_date);
    }
    public function getRelease_date() {
        return $this->release_date;
    }

    public function setStatus(?int $status) {
        $this->status = htmlspecialchars($status);
    }
    public function getStatus() {
        return $this->status;
    }

    public function setUser_id(?int $user_id) {
        $this->user_id = $user_id;
    }
    public function getUser_id() {
        return $this->user_id;
    }

    public function __construct($data) {
        $this->hydrate($data);
    }


}
