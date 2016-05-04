<?php
include_once 'class_text.php';
class class_article extends class_text{
   
    private $articleID;
    private $subject="";
    
        
public function setArticleID($articleID)
{
    if (is_numeric($articleID)) {     
$this -> articleID = $articleID;
return TRUE;
 } // end of if 
 else  {
     return FALSE;
    
 } // end of else
} // End of function

public function setSubject($subject)
{
$this -> subject = $subject;
} // End of function


public function getArticleID()
{
return $this -> articleID;
} // End of function


public function getSubject()
{
return $this -> subject;
} // End of function

        
} // End of class

