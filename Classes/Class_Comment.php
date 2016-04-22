<?php

class Class_Comment {
    private $date="";
    private $content="";
    private $state="";

     public  function __construct() {
 
        
        } // End of constructor
    public function Set_date($date)
{
$this -> date = $date;
} // End of function

public function Set_state($state)
{
$this -> state = $state;
} // End of function

public function Set_content($content)
{
$this -> content = $content;
} // End of function


public function Get_state()
{
return $this -> state;
} // End of function


public function Get_content()
{
return $this -> content;
} // End of function

public function Get_date()
{
return $this -> date;
} // End of function

} // End of class

