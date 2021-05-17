<?php 
require_once "bookstore.php";


class BookstoreDAO{

    private $bdd ;
    public function __construct(){
      try
      {
      $this->bdd    = new PDO('mysql:host=localhost;dbname=gbook;charset=utf8', 'root', '');
  
      }catch(Exception $e) {
          die('Erreur : '.$e->getMessage()); }
          
    }
  
  // save // mapping OR 
    public function save($bookstore){
  
      $req = $this->bdd->prepare('INSERT INTO bookstore(name, adresse, email, telephone) VALUES(:name, :adresse, :email,:telephone)');
    
      $req->execute(array( 'name' => $bookstore->getName(),
      'adresse' => $bookstore->getAdresse(),
      'email' => $bookstore->getEmail(),
      'telephone'=>$bookstore->getTelephone()
      ));
    }
    public function edit($bookstore){
      $id=$_GET['id'] ;
      $req = $this->bdd->prepare('UPDATE bookstore SET  name=:name, adresse=:adresse, email=:email,telephone=:telephone where id_bookstore=:id');
      $req->execute(array( 
      'name' => $bookstore->getName(),
      'adresse' => $bookstore->getAdresse(),
      'email' => $bookstore->getEmail(),
      'telephone'=>$bookstore->getTelephone(),
      'id'=>$id
      ));
    }
    public function delbookstore(){
      $id=$_GET['id'] ;
      $req = $this->bdd->prepare('DELETE FROM bookstore where id_bookstore=:id');
      $req->execute(array('id' => $id));
    }

  public function getAll(){
      $reponse  = $this->bdd->query('select * from bookstore');
      $arrayBookstore =  array();
      while ($donnees = $reponse->fetch()) {
        array_push($arrayBookstore, new BookStore($donnees['name'], $donnees['adresse'] , $donnees['email'],$donnees['telephone'],$donnees['id_bookstore']));
      }
      return $arrayBookstore;
  }
}
?>