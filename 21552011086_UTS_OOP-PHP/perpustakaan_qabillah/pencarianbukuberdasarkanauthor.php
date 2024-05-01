<?php
class Library {
    public $books = [];

    public function searchByCoverArt($coverArt) {
        foreach ($this->books as $book) {
            if ($book->coverArt == $coverArt) {
                return $book;
            }
        }
        return null;
    }
}
