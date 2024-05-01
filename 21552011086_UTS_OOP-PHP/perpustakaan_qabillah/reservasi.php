<?php
class Book {
    public $title;
    public $author;
    public $status;

    public function __construct($title, $author, $status="Available") {
        $this->title = $title;
        $this->author = $author;
        $this->status = $status;
    }
}

class Library {
    public $books = [];

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function reserveBook($bookTitle) {
        foreach ($this->books as $book) {
            if ($book->title == $bookTitle && $book->status == "Available") {
                $book->status = "Reserved";
                return "Book '{$bookTitle}' has been reserved.";
            }
        }
        return "Book is not available for reservation.";
    }
}
