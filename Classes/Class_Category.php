<?php

class Class_Category {
    private $name="";
    private $ads="";
    private $text="";
    private $stuff="";
    
    public  function __construct() {
 
        } // End of constructor
    
public function Set_name($name)
{
$this -> name = $name;
} // End of function

public function Set_text($text)
{
$this ->  text = $text;
} // End of function

public function Set_ads($ads)
{
$this -> ads = $ads;
} // End of function

public function Set_stuff($stuff)
{
$this -> stuff = $stuff;
} // End of function


public function Get_stuff()
{
return $this ->  stuff;
} // End of function


public function Get_text()
{
return $this ->  text;
} // End of function


public function Get_ads()
{
return $this -> ads;
} // End of function

public function Get_name()
{
return $this -> name;
} // End of function

} // End of class
