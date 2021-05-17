<?php

// entites
class Book{

        // attrs 
        private $id ;
        private  $name ;
        private  $auteur ;
        private  $annee ;




        public function __construct($name ,  $auteur ,$annee ,$id ){

                $this->name = $name;
                $this->auteur = $auteur ;
                $this->annee = $annee ;
                $this->id = $id ;
               

        }


        // get an set 

     
        public function getName(){
                return  $this->name;
        }

        public function getId(){
                return $this->id;
        }

        public function getAuteur(  ){
                return  $this->auteur  ;
        }


 public function getAnnee(  ){

   
    return  $this->annee;
    

}


}

