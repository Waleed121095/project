<?php
include_once 'class_text.php';
class class_article extends class_text{
   
    private $articleID;
    private $subject="";
    
        public  function __construct() {

        } // End of constructor
        
public function set_ArticleID($articleID)
{
    if (is_numeric($articleID)) {     
$this -> articleID = $articleID;
return TRUE;
 } // end of if 
 else  {
     return FALSE;
    
 } // end of else
} // End of function

public function set_Subject($subject)
{
$this -> subject = $subject;
} // End of function


public function get_ArticleID()
{
return $this -> articleID;
} // End of function


public function get_Subject()
{
return $this -> subject;
} // End of function

        
} // End of class

