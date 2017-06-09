<?php

class Lead {
    protected $name;
    protected $tel;
    protected $email;
    protected $pet;
    protected $why_adopt;
    
    public function __construct($name, $tel, $email, $pet, $why_adopt) {
        $this->name = $name;
        $this->tel = $tel;
        $this->email = $email;
        $this->pet = $pet;
        $this->why_adopt = $why_adopt;
        $this->sendLeadToMail();
    }
    
    private function sendLeadToMail(){
        $message = "name: $this->name\r\n
                   tel: $this->tel\r\n
                   email: $this->email\r\n
                   pet: $this->pet\r\n
                   reason: $this->why_adopt\r\n";
        echo $message;
        include 'phpmailer.php';
    }
}

