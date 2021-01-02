<?php
namespace App\Models;

class Product
{
    public $first_name;
    public $last_name;
    
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
        
    }
    
    public function getFirstName()
    {
        //return 'Nazmur';
        return $this->first_name;
        
    }
    
    
    
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
        
    }
    
    public function getLastName()
    {
        //return 'Sakib';
        return $this->last_name;
        
    }
}