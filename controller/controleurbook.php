<?php
// importer les deux classes model entity et DAO
require_once "model/book.php";
require_once "model/bookDao.php";
require_once 'model/bookstore.php';
require_once 'model/bookstoredao.php';
require_once 'view/view.php';

class ControleurBook {
    private $book , $bookdao,$bookstore,$bookstoredao;

    public function __construct() { 
    $this->bookDao = new BookDAO();
    $this->bookstoredao = new BookstoreDAO();
    }


// action get all 
public function getBooks() {
    $books = $this->bookDao->getAll(); 
    $vue = new Vue("book");     
    $vue->generer(array('books' => $books));
}

public function getBookstore(){
    $bookstore=$this->bookstoredao->getALL();
    $vue=new Vue("bookstore");
    $vue->generer(array('books' => $bookstore));
}
    
/////////////////////////////////////////////////////////////////
public function addbookstore(){
    $vue = new Vue("addbookstore");
    $vue->generer(array());
    if(isset($_POST['save'])){
        $bookstore = $this->bookstore = new BookStore($_POST["name"], $_POST["adresse"] , $_POST["email"],$_POST["telephone"],"") ;
        $this->bookstoredao->save($bookstore); 
    }
}

public function editbookstore(){
    $vue = new Vue("editbookstore"); 
    $vue->generer(array());
    if(isset($_POST['save'])){
         $this->bookstore = new BookStore($_POST["name"], $_POST["adresse"] , $_POST["email"],$_POST["telephone"],"") ;
        $this->bookstoredao->edit($this->bookstore);
    }
}

public function delbookstore(){
    $vue = new Vue("delbook"); 
    $vue->generer(array());
    $this->bookstoredao->delbookstore(); 
}
/////////////////////////////////////////////////////////////////
public function addbook() {
    $vue = new Vue("addbook"); 
    $vue->generer(array());
    if(isset($_POST['save'])){
        $book = $this->book = new Book($_POST["name"], $_POST["auteur"] , $_POST["annee"],"") ;
        $this->bookDao->save($book); 
    }
}
public function delbook(){
    $vue = new Vue("delbook"); 
    $vue->generer(array());
    $this->bookDao->delbook(); 
}

public function editbook() {
    $vue = new Vue("editbook"); 
    $vue->generer(array());
    if(isset($_POST['save'])){
        $book = $this->book = new Book($_POST["name"], $_POST["auteur"] , $_POST["annee"],"") ;
        $this->bookDao->edit($book);
    }
}

}

?>