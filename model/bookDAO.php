<?php
require_once "book.php";

class BookDAO{

  private   $bdd ;
  
  public function __construct(){
    try
    {
    $this->bdd    = new PDO('mysql:host=localhost;dbname=gbook;charset=utf8', 'root', '');

    }catch(Exception $e) {
        die('Erreur : '.$e->getMessage()); }
        
  }

// save // mapping OR 
  public function save($book){

    $req = $this->bdd->prepare('INSERT INTO book(name, auteur, annee ) VALUES(:name, :auteur, :annee)');
  
    $req->execute(array( 'name' => $book->getName(),
    'auteur' => $book->getAuteur(),
    'annee' => $book->getAnnee()
    ));
  }
  public function edit($book){
    $id=$_GET['id'] ;
    $req = $this->bdd->prepare('UPDATE book SET  name=:name, auteur=:auteur, annee=:annee where id_book=:id');
  
    $req->execute(array( 'name' => $book->getName(),
    'auteur' => $book->getAuteur(),
    'annee' => $book->getAnnee(),
    'id' =>$id
    ));
  }
  public function delbook(){
    $id=$_GET['id'] ;
    $req = $this->bdd->prepare('DELETE FROM book where id_book=:id');
    $req->execute(array('id' => $id));
  }

  
public function getAll(){
    $reponse  = $this->bdd->query('select * from book');
    $arrayBooks =  array();
    while ($donnees = $reponse->fetch()) {
      array_push($arrayBooks, new Book ($donnees['name'], $donnees['auteur'] , $donnees['annee'],$donnees['id_book']));
    }
    return $arrayBooks;

}
}
?>
