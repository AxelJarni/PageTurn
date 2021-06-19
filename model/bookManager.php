<?php
require_once "model.php";
require "model/entity/book.php";

class BookManager extends Model{

  // Récupère tous les livres
  public function getBooks() {
    $query = $this->db->prepare(
      "SELECT *
      FROM Book"
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
      FROM Book
      WHERE id = :book_id"
    );
    $query->execute([
      "book_id"=>$book_id
      ]);
    $book = $query->fetch(PDO::FETCH_ASSOC);
    return new Book($book);
  }

  // Ajoute un nouveau livre
  public function addBook($newBook) {
    $query = $this->db->prepare(
      "INSERT INTO Book (title, author, genre, synopsis, release_date, status)
      VALUES (:title, :author, :genre, :synopsis, :release_date, 1)"
    );
    $query->execute([
      "title" => $newBook["title"],
      "author" => $newBook["author"],
      "genre" => $newBook["genre"],
      "synopsis" => $newBook["synopsis"],
      "release_date" => $newBook["release_date"]
    ]);
    $book = $query->fetchall(PDO::FETCH_ASSOC);
    return $book;
  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus($status, $user_id, $book_id) {
    $query = $this->db->prepare(
      "UPDATE Book
      SET status = :status, 
          user_id = :user_id
      WHERE id = :id"
    );
    $result = $query->execute([
      "status" => $status,
      "user_id" => $user_id,
      "id" => $book_id
    ]);
    return $result;
  }

  // public function whoBorrowed($book_id) {
  //   $query = $this->db->prepare(
  //     "SELECT u.id, u.firstname, u.lastname, b.user_id, b.id, b.title, b.author, b.synopsis, b.release_date, b.genre
  //     FROM User AS u
  //     LEFT JOIN Book AS b
  //     ON u.id = b.user_id
  //     WHERE b.id = :book_id"
  //   );
  //   $result = $query->execute([
  //     "book_id" => $book_id
  //   ]);
  //   return $result;
  // }

  public function deleteBook($book_id) {
    $query = $this->db->prepare(
      "DELETE FROM Book
      WHERE id = :id"
    );
    $result = $query->execute([
      "id" => $book_id
    ]);
    return $result;
  }
}
