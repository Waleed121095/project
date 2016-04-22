<?php
include_once 'Class_Person.php';

class Class_User extends Class_Person{
    
    private $userID ;
    
     public  function __construct() {
        
        } // End of constructor
    
public function Set_userID($userID)
{
$this -> userID = $userID;
} // End of function

public function Get_userID()
{
return $this -> userID;
} // End of function

public function Comment_Article($Comment){

    
    } // End of function
        public function Reguest_Ads($Ads){

            
    } // End of function
        public function Download_Article($Article){

            
    } // End of function
        public function Register($Person){

            
    } // End of function
        public function Pay(){

            
    } // End of function
} // End of class
