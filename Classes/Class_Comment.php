<?php

class class_comment {
    private $date="";
    private $content="";
    private $state="";

     public  function __construct() {
 
        
        } // End of constructor
    public function set_Date($date)
{
$this -> date = $date;
} // End of function

public function set_State($state)
{
$this -> state = $state;
} // End of function

public function set_Content($content)
{
$this -> content = $content;
} // End of function


public function get_State()
{
return $this -> state;
} // End of function


public function get_Content()
{
return $this -> content;
} // End of function

public function get_Date()
{
return $this -> date;
} // End of function

} // End of class


