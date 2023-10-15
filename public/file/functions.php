<?php 
    class Functions{
        public $name ;
        public $email;
        public $batch;
        public $image;
        public $price;

        public function __construct($name,$email,$batch,$image,$price){
            $this->name = $name;
            $this->email =$email;
            $this->batch = $batch;
            $this->image = $image;
            $this->price = $price;
        }
        public function getName(){
            return $this->name."</br>";
        }
        public function getEmail(){
            return $this->email."</br>";
        }
        public function getBatch(){
            return $this->batch."</br>";
        }
        public function getImage(){
            return $this->image."</br>";
        }
    }

  

?>