<?php

require_once "dbh.class.php";

class Books extends Dbh {
    public function getBooks(){
        $sql = "SELECT id, title, relDate, status, author FROM books";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    public function setBooks($postData){
        $sql = "INSERT INTO books (title, relDate, status, author) VALUES (?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$postData['title'], $postData['year'], $postData['status'], $postData['author']]);
    }

    public function deleteBooks($ids){
        $sql = "DELETE FROM books WHERE id IN ($ids)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
    }

    public function getBook($id){
        $sql = "SELECT * FROM books WHERE id=$id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetch();
        return $result;
    }

    public function setBook($postData){
        $sql = "UPDATE books SET title = ?, relDate = ?, status = ?, author = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$postData['title'], $postData['year'], $postData['status'], $postData['author'], $postData['id']]);
    }

    public function getAuthors(){
        $sql = "SELECT DISTINCT author FROM books";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    public function getTitles(){
        $sql = "SELECT DISTINCT title FROM books";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    public function getBothFilteredBooks($authorFilter, $titleFilter){
        $sql = "SELECT * FROM books WHERE author LIKE '%$authorFilter%' AND title LIKE '%$titleFilter%'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    public function getAuthorFilteredBooks($authorFilter){
        $sql = "SELECT * FROM books WHERE author LIKE '%$authorFilter%'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    public function getTitleFilteredBooks($titleFilter){
        $sql = "SELECT * FROM books WHERE title LIKE '%$titleFilter%'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }
}