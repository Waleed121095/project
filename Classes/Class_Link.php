<?php
    
class Class_Link {
    private $linkID;
    private $title="";
    private $path="";
    private $permission="";
    public  function __construct() {
 
        
        } // End of constructor
        
 public function Set_linkID($linkID)
{
$this -> linkID = $linkID;
} // End of function

public function Set_path($path)
{
$this ->  path = $path;
} // End of function

public function Set_title($title)
{
$this -> title = $title;
} // End of function

public function Set_permission($permission)
{
$this -> permission = $permission;
} // End of function


public function Get_permission()
{
return $this ->  permission;
} // End of function


public function Get_path()
{
return $this ->  path;
} // End of function


public function Get_title()
{
return $this -> title;
} // End of function

public function Get_linkID()
{
return $this -> linkID;
} // End of function
        
        
        
        
 } // End of class
        
        
        
        
        
        
