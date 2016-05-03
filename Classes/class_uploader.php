<?php
include_once 'class_stuff.php';
include 'class_database.php';
class class_uploader extends class_stuff
{
    public  function __construct()
        {
 
        
        } // End of constructor
    public function showAllRetouchedNews ( )
    {        
            $query = 'SELECT news.appearState, news.ID ,news.title , news.content, news.category , news.linkID ,news.viewsNumber,news.retouchState, Links.linksID ,Links.path FROM news JOIN Links ON news.linkID = Links.linksID WHERE news.retouchState = 1';
            $db = new class_database();
            $result = $db->database_query( $query );
            return $result;   
            
    }//end of showAllNews(),Abdulrahman
    
    public function showNews( $id )
    {
            $columns = 'content,ID,title';
            $condition  = 'ID='.$id;
            $tableName = 'news';
            $db = new class_database();
            $result = $db->select_query($columns, $tableName, $condition);
            return $result;
    }//end of showNews (),Abdulrahman
    
    public function removeNews ( $id )
    {       // change apeare state to be 0 
            $tableName = 'news';
            $data_array_assoc = array("appearState" => "0");
            $condition = 'ID ='.$id;
            $db= new class_database();
            $db->update_query($tableName, $data_array_assoc, $condition);
     
    }//end of removeNews,,Abdulrahman

    public function addAttachment($newsID,$fileName,$content,$fileType,$size)
    {
              
            $tableName = 'NewsAttachment';
            $data_aray_assoc = array ('id' =>$newsID, 'attachmentName'=>$fileName, 'attachmentType'=>$fileType, 'attachmentSize'=>$size, 'content'=>$content);
            $db= new class_database();
            $db->insert_query($tableName, $data_aray_assoc);
        
    }// end of addAttachment,,Abdulrahman

    public function publish( $NewsId , $uploderID ) //
    {
            //first insert into  UploaderPublishNews the news ID and uploader ID
            $tableName = 'UploaderPublishNews';
            $data_array_assoc = array ("uploaderID"=> $uploderID , "uploadedNewsID" => $NewsId);
            $db= new class_database();
            $result=  $db->insert_query($tableName, $data_array_assoc);
            // second chenge the appeareState to be 1
            $tableName2 = 'news';
            $data_array_assoc2 = array ("appearState" => 1 );
            $condition2 = 'ID='.$NewsId;
            $db->update_query($tableName2, $data_array_assoc2, $condition2);
        
        
    } // end of publish(),,Abdulrahman
    
   
} // End of class 


