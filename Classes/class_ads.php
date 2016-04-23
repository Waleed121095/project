<?php

class class_ads {
    private $advID;
    private $content="";
    private $priority;
    private $attachment="";
    private $category="";
    private $viewsNumbers;
 //   private $expirationDate="";
       public  function __construct() {

        } // End of constructor
    public function set_AdvID($advID)
{
 if (is_numeric($advID)) {     
$this -> advID = $advID;
return TRUE;
 } // end of if 
 else  {
     return FALSE;
     
 } // end of else
} // End of function

public function set_Content($content)
{
$this ->  content = $content;
} // End of function

public function set_Priority($priority)
{
 if (is_numeric($priority)) {     
$this -> priority = $priority;
return TRUE;
 } // end of if 
 else  {
     return FALSE;
     
 } // end of else
 } // End of function

public function set_Attachment($attachment)
{
$this -> attachment = $attachment;
} // End of function
   public function set_Category($category)
{
$this -> category = $category;
} // End of function

public function set_ViewsNumbers($viewsNumbers)
{
 if (is_numeric($viewsNumbers)) {     
$this -> viewsNumbers = $viewsNumbers;
return TRUE;
 } // end of if 
 else  {
     return FALSE;
     
 } // end of else
 } // End of function
/*
public function set_ExpirationDate($expirationDate)
{
$this -> expirationDate = $expirationDate;
} // End of function
*/
public function get_AdvID()
{
return $this ->  advID;
} // End of function


public function get_Content()
{
return $this ->  content;
} // End of function


public function get_Priority()
{
return $this -> priority;
} // End of function

public function get_Attachment()
{
return $this -> attachment;
} // End of function

public function get_Category()
{
return $this ->  category;
} // End of function


public function get_ViewsNumbers()
{
return $this ->  viewsNumbers;
} // End of function

/*
public function get_ExipireDate()
{
return $this -> exipireDate;
} // End of function
*/


} //End of class

