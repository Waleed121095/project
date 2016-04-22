<?php
include_once 'class_person.php';

class class_user extends class_person{
    
    private $userID ;
    
     public  function __construct() {
        
        } // End of constructor
    
public function set_UserID($userID)
{
 if (is_numeric($userID)) {     
$this -> userID = $userID;
return TRUE;
 } // end of if 
 else  {
     return FALSE;
     
 } // end of else
 } // End of function

public function get_UserID()
{
return $this -> userID;
} // End of function

public function comment_Article($comment){

    
    } // End of function
        public function reguest_Ads($ads){

            
    } // End of function
        public function download_Article($article){

            
    } // End of function
        public function register($person){

            
    } // End of function
        public function pay(){

            
    } // End of function
} // End of class

