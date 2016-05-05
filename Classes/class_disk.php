<?php

include_once 'class_stuff.php';
include_once 'class_database.php';
class class_disk extends class_stuff{
    public  $id ;
    public  $content ;
    public  $retouchState ; //  check if Text is retouched
    private $dataBase ; // referance of database class
    public  function __construct() {
        $this->dataBase = new class_database();
        } // End of constructor


        //precondition no select any Quiry
        //postcondition select 3 coloum ID content RetouchState
        function findPostById($postID)
        {
         // $obj = new class_database();
        //  $res = $obj->select_query( "ID , content , retouchState", "news", "ID = $postID" );
        //  $query= $this->dataBase->select_query("ID , content , retouchState", "news" , "ID = $postID");
            $query = "select * from news where ID= $postID";
            $result = mysql_query($query);
            $row = mysql_fetch_row($result);
            $this->id = $row[0];
            $this->content = $row[2];
            $this->retouchState = $row[9] ;
        }// end funtion whitch select 3 column

             
      //pre Condition  no update
      //post Conditoin update the contents of news
       function update($content , $post_id) 
       {
          // $tableName= "news";
          // $ass= array("ID" => $post_id ,"retouchState =1");
          // $db = new class_database();
          // $co= "ID=".$post_id;
          // $db->database_query($query);
        // $query=  $db ->update_query($tableName, $db ,$co);
           $query ="update news set content='$content' , retouchState = 1 where ID=$post_id " ;
           mysql_query($query);
           $this->findPostById($post_id) ;
       }//end of function upadte



        //pre Condition no show any result
       //post Condition show the result in page shownews.php and you can retouch on news
        private function searchGrid($query , $updateOk=false , $editPage="") // $editPage name of page how can edit in it
        {
            $result = $query;
          echo mysql_error(); // to print the error in the quiry
          $colnum = mysql_num_fields($result) ; //to  division the quiry in table
          
          $tdl = "<table align=center> <tr bgcolor=black>";
          
          for($col=0 ; $col <$colnum ; $col++) 
          {
            $tdl .= " <th><font color='white'>" . mysql_field_name($result, $col) ."</font></th>" ;
            $flage = mysql_field_flags($result, $col);
            if (strpos($flage, "primary_key"))
                          $pkcol = $col ;
          } //end for to disply   title column query in table

          if($updateOk)
          {
              $tdl.="<td><font color=#ffffff >Retouched</font></td>" ;
          }//end if

          $tdl .="</tr> ";
          $rownow = 1 ;
          while($row = mysql_fetch_array($result))
          {
              $tdl .="<tr bgcolor=";
              if($rownow%2== 0)
                  {
                      $tdl .="#66ff66>";
                  }
                  else {$tdl .="#ccccff>";}
                  
              for($col=0 ; $col < $colnum ; $col++)
              {
                  $tdl .= "<td>" .$row[$col] . "</td>";
                  
              }
              if($updateOk)
              {
                  $tdl.="<td><a href=$editPage?pkval=$row[$pkcol]> <img src='edit.png' width=15/></a></td>"; //link page shownewss to Retouch the news
              }
              $tdl.="</tr>";
              $rownow++;
          }// end of while to loop all row in my table
          $tdl .= "</table>" ;
          
          return  $tdl;
        }// End of Function searchGrid
        
        
        
        
        
        
        public function retouch( ){
          
            $result = $this->dataBase->select_query("ID , content , retouchState", "news" , "retouchState = 0");
            return $this->searchGrid($result, true , "shownewss.php");
        } // End of function retouch
            
    } //end class
  
    

?>

