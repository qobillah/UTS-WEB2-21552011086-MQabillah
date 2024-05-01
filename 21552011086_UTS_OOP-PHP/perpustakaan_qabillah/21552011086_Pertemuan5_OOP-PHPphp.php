<?php

/* Nama  : M.Qabillah.F.H
   NIM   : 21552011086
   Tugas : Web 2
   Judul : Aplikasi Perpustakaan PHP OOP */

class MyBook{
    public $title;
    public $author;
    public $year;
    public $isBorrowed;

    public function __construct($title, $author, $year, $isBorrowed) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->isBorrowed = $isBorrowed;
    }

    public function getInformations(){
        echo '⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪' . PHP_EOL;
        echo "Title: " . $this->title . PHP_EOL;
        echo "Author: " . $this->author . PHP_EOL;
        echo "Year: " . $this->year . PHP_EOL;
        echo "Status: " . ($this->isBorrowed ? 'Borrowed' : 'Avaible') . PHP_EOL;
        echo PHP_EOL;
    }
}

class MyLibrary{
    public $bookCollection = array();
    public function addBook($title, $author, $year, $isBorrowed){
        $this->bookCollection[] = new MyBook($title, $author, $year, $isBorrowed);
        echo "↠ Successfull add book $title √" . PHP_EOL;
    }
    public function listAvailableBooks(){
        echo "Available books: " . PHP_EOL;
        foreach($this->bookCollection as $book){
            if(!$book->isBorrowed){
                $book->getInformations();
                echo '⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪' . PHP_EOL;
            }
        }
    }
    public function listNoAvailableBooks() {
        echo "No Available books: " . PHP_EOL;
        foreach($this->bookCollection as $book){
            if($book->isBorrowed){
                $book->getInformations();
                echo '⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪⨪' . PHP_EOL;
            }
        }
    }
    public function borrowBook($title){
        foreach($this->bookCollection as $book){
            if($book->title == $title && !$book->isBorrowed){
                $book->isBorrowed = true;
                echo "↠ Successfull borrow book $title √" . PHP_EOL;
            }
        }
        echo "↠ Failed borrow book $title ⨱" . PHP_EOL;
    }
    public function returnBook($title){
        foreach($this->bookCollection as $book){
            if($book->title == $title && $book->isBorrowed){
                $book->isBorrowed = false;
                echo "↠ Successfull return book $title √" . PHP_EOL;
            }
        }
        echo "↠ Failed return book $title ⨱" . PHP_EOL;
    }
}

$myLibrary = new MyLibrary();

$bookData = [
    ["title"=> "The Sea Speaks His name", "author"=> "Leila Chudori", "year"=> 2017, "isBorrowed"=> false],
    ["title"=> "Gone with the wind", "author"=> "Margaret mitchell", "year"=> 1936, "isBorrowed"=> false],
    ["title"=> "All The Light We cannot See", "author"=> "Anthony Doen", "year"=> 2014, "isBorrowed"=> true],
    ["title"=> "Sophie's World", "author"=> "Jostein Gaarder", "year"=> 1991, "isBorrowed"=> false],
    ["title"=> "Sang Pemimpi", "author"=> "Andrea Hirata", "year"=> 2006, "isBorrowed"=> true],
    ["title"=> "Perahu Kertas", "author"=> "Dewi Lestari", "year"=> 2009, "isBorrowed"=> false],
    ["title"=> "Cantik Itu Luka", "author"=> "Eka Kurniawan", "year"=> 2002, "isBorrowed"=> true],
    ["title"=> "Laut Bercerita", "author"=> "Leila S. Chudori", "year"=> 2017, "isBorrowed"=> false],
    ["title"=> "Senyap", "author"=> "Eka Kurniawan", "year"=> 2006, "isBorrowed"=> false],
    ["title"=> "Lelaki Harimau", "author"=> "Eka Kurniawan", "year"=> 2004, "isBorrowed"=> false],
];

foreach($bookData as $book){
    $myLibrary->addBook($book["title"], $book["author"], $book["year"], $book["isBorrowed"]);
}

$myLibrary->listAvailableBooks();

$myLibrary->listNoAvailableBooks();

$myLibrary->borrowBook("Laut Bercerita");

$myLibrary->returnBook("Laut Bercerita");

$myLibrary->returnBook("Laut Bercerita");

$myLibrary->borrowBook("The Sea Speaks His name");