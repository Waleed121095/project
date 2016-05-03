<?php

include_once 'class_stuff.php';
include_once 'class_database.php';
class class_supervisor extends class_stuff {

public function updateText($textID,$content)
	{
            include_once './class_database.php';
            $x = new class_database();
            $query = " update news set content='$content' where ID=$textID ";
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
            $query = " update news set state='0' where ID=$textID ";
            $x->database_query($query);
            if($x){
                return true;
            }
            else {
                return FALSE;
            }
	} // end removeText()	

} // end class_supervisor
	

?>
