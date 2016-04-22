<?php

class class_category {
    private $name="";
    private $ads="";
    private $text="";
    private $stuff="";
    
    public  function __construct() {
 
        } // End of constructor
    
public function set_Name($name)
{
$this -> name = $name;
} // End of function

public function set_Text($text)
{
$this ->  text = $text;
} // End of function

public function set_Ads($ads)
{
$this -> ads = $ads;
} // End of function

public function set_Stuff($stuff)
{
$this -> stuff = $stuff;
} // End of function


public function get_Stuff()
{
return $this ->  stuff;
} // End of function


public function get_Text()
{
return $this ->  text;
} // End of function


public function get_Ads()
{
return $this -> ads;
} // End of function

public function get_Name()
{
return $this -> name;
} // End of function

} // End of class

