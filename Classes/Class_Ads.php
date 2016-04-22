<?php

class Class_Ads {
    private $advID;
    private $content="";
    private $priority;
    private $attachment="";
    private $category="";
    private $viewsNumbers;
    private $expirationDate="";
       public  function __construct() {

        } // End of constructor
    public function Set_advID($advID)
{
$this -> advID = $advID;
} // End of function

public function Set_content($content)
{
$this ->  content = $content;
} // End of function

public function Set_priority($priority)
{
$this -> priority = $priority;
} // End of function

public function Set_attachment($attachment)
{
$this -> attachment = $attachment;
} // End of function
   public function Set_category($category)
{
$this -> category = $category;
} // End of function

public function Set_viewsNumbers($viewsNumbers)
{
$this ->  viewsNumbers = $viewsNumbers;
} // End of function

public function Set_expirationDate($expirationDate)
{
$this -> expirationDate = $expirationDate;
} // End of function

public function Get_advID()
{
return $this ->  advID;
} // End of function


public function Get_content()
{
return $this ->  content;
} // End of function


public function Get_priority()
{
return $this -> priority;
} // End of function

public function Get_attachment()
{
return $this -> attachment;
} // End of function

public function Get_category()
{
return $this ->  category;
} // End of function


public function Get_viewsNumbers()
{
return $this ->  viewsNumbers;
} // End of function


public function Get_exipireDate()
{
return $this -> exipireDate;
} // End of function

public function Get_name()
{
return $this -> name;
} // End of function
} //End of class
