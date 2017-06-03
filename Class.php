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
        $message = "name: $this->name /n
                   tel: $this->tel /n
                   email: $this->email /n
                   pet: $this->pet /n
                   reason: $this->why_adopt";          
        if (mail("noamavisrur@gmail.com", "new potential adopter", $message, "From: $this->email")){
            echo 'sent';
        }else{
            echo 'didnt sent';
        }
    }
}