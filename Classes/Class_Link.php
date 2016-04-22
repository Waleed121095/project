<?php
    
class class_link {
    private $linkID;
    private $title="";
    private $path="";
    private $permission="";
    public  function __construct() {
 
        
        } // End of constructor
        
 public function set_LinkID($linkID)
{
 if (is_numeric($linkID)) {     
$this -> linkID = $linkID;
return TRUE;
 } // end of if 
 else  {
     return FALSE;
     
 } // end of else
 } // End of function

public function set_Path($path)
{
$this ->  path = $path;
} // End of function

public function set_Title($title)
{
$this -> title = $title;
} // End of function

public function set_Permission($permission)
{
$this -> permission = $permission;
} // End of function


public function get_Permission()
{
return $this ->  permission;
} // End of function


public function get_Path()
{
return $this ->  path;
} // End of function


public function get_Title()
{
return $this -> title;
} // End of function

public function get_LinkID()
{
return $this -> linkID;
} // End of function
        
        
        
        
 } // End of class
        
        
        
        
        
        

