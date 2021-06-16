<?php
require_once "model.php";
require "model/entity/book.php";

class BookManager extends Model{

  // Récupère tous les livres
  public function getBooks() {
    $query = $this->db->prepare(
      "SELECT *
      FROM book"
    );
    $query->execute();
    $books = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($books as $key=>$book) {
      $books[$key] = new Book($book);
    }
    return $books;
  }

  // Récupère un livre
  public function getSingleBook($book_id):Book {
    $query = $this->db->prepare(
      "SELECT *
      FROM book
      WHERE id = :book_id"
    );
    $query->execute([
      "book_id"=>$book_id
      ]);
    $book = $query->fetchAll(PDO::FETCH_ASSOC);
    $book = new Book($book[0]);
    return $book;
  }

  // Ajoute un nouveau livre
  public function addBook($title, $author, $genre, $synopsis, $release_date) {
    $query = $this->db->prepare(
      "INSERT INTO book (title, author, genre, synopsis, release_date, status)
      VALUES (:title, :author, :genre, :synopsis, :release_date, 1)"
    );
    $query->execute([
      "title" => $title,
      "author" => $author,
      "genre" => $genre,
      "synopsis" => $synopsis,
      "release_date" => $release_date
    ]);
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus($status, $book_id) {
    $query = $this->db->prepare(
      "UPDATE Book
      SET status = :status
      where id = :id"
    );
    $result = $query->execute([
      "status" => $status,
      "id" => $book_id
    ]);
    return $result;
  }

}
