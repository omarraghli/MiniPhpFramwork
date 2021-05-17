<?php

require_once "controleurbook.php";
require_once "view/view.php";

class Routeur {
    private $ctrlBook;
    public function __construct() {
        $this->ctrlBook = new ControleurBook();
    
    }
    // Traite une requête entrante
    
    public function routerRequete() { 
        
    try {
    if (isset($_GET['action'])) {
        
    if ($_GET['action'] == 'book') {

             $this->ctrlBook->getBooks(); 
            
    }
    else if($_GET['action'] == 'addbook'){

                $this->ctrlBook->addbook(); 

    }
    else if($_GET['action'] == 'editbook'){

        $this->ctrlBook->editbook(); 

    }
    else if($_GET['action'] == 'delbook'){
        $this->ctrlBook->delbook(); 
    }
    else if($_GET['action'] == 'addbookstore'){

        $this->ctrlBook->addbookstore(); 

    }
    else if($_GET['action'] == 'editbookstore'){
        $this->ctrlBook->editbookstore(); 
    }
    else if($_GET['action'] == 'delbookstore'){
        $this->ctrlBook->delbookstore();
    }
    else if($_GET['action'] == 'bookstore'){
        $this->ctrlBook->getBookstore();
    }
    
    else{

    throw new Exception("Action non valide");
    } 

}
    }
    catch (Exception $e) {
    $this->erreur($e->getMessage()); }
    }
     
    private function erreur($msgErreur) {

         $vue = new Vue("Erreur"); 
         
         $vue->generer(array('msgErreur' => $msgErreur));
    } }
     