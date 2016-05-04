<?php

include_once 'class_stuff.php';
include_once 'class_database.php';
class class_supervisor extends class_stuff {

public function updateText($textID,$content)
	{
            include_once './class_database.php';
            $x = new class_database();
            $arr = array ( "content" => " '$content' " );
            $query = $x->update_query( "news" , $arr, "ID = $textID" );
            $x->database_query($query);
            if($x){
                return true;
            }
            else {
                return FALSE;
            }
        }//end updateText
	

public function removeText ($textID)
	{
            include_once './class_database.php';
            $x = new class_database();
            $arr = array ( "appearState" => "0" );
            $query = $x->update_query( "news" , $arr, "ID = $textID" );
            $x->database_query($query);
            if($x){
                return true;
            }
            else {
                return FALSE;
            }
	} // end removeText()	

//////////////////////////
} // end class_supervisor
//////////////////////////


// This is just for testing;

/*
$obj = new class_supervisor();

$obj->setUserName ( "taha" );
$obj->setPasswd   ( "passwd");

if ( $obj->login() )
{
	echo "YES, Supervisor loged in!! <BR>";
	echo "It's hashPasswd is " . $obj->getPasswd() ."<BE>";
}

$obj->removeText( 1 );
$obj->updateText( 1, "Hi, My name is Ahmed Alaa ^_^" );
*/
