<?php
include_once 'Class_Text.php';
class Class_Article extends Class_Text{
   
    private $articleID;
    private $subject="";
    
        public  function __construct() {

        } // End of constructor
        
public function Set_articleID($articleID)
{
$this -> articleID = $articleID;
} // End of function

public function Set_subject($subject)
{
$this -> subject = $subject;
} // End of function


public function Get_articleID()
{
return $this -> articleID;
} // End of function


public function Get_subject()
{
return $this -> subject;
} // End of function

        
} // End of class
