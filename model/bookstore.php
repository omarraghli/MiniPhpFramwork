<?php

// entites
class BookStore{

        // attrs 
        private $id ;
        private  $name ;
        private  $adresse;
        private  $email;
        private  $telephone;

        public function __construct($name ,  $adresse ,$email ,$telephone,$id ){
                $this->name = $name;
                $this->adresse = $adresse ;
                $this->email = $email ;
                $this->telephone = $telephone ;
                $this->id = $id ;
        }


        // get an set 

     
        public function getName(){
                return  $this->name;
        }

        public function getId(){
                return $this->id;
        }

        public function getEmail(){
                return  $this->email  ;
        }

        public function getAdresse(){
                return  $this->adresse;
        }
        public function getTelephone(){
            return  $this->telephone;
        }




}

