<?php
include_once 'class_stuff.php';
include 'class_database.php';
class class_uploader extends class_stuff
{
    public  function __construct()
        {
 
        
        } // End of constructor
    public function showAllRetouchedNews (  )
    {        
            $query = 'SELECT news.ID ,news.title , news.content, news.category , news.linkID ,news.viewsNumber,news.retouchState, Links.linksID ,Links.path FROM news JOIN Links ON news.linkID = Links.linksID WHERE news.retouchState = 1';
            $db = new class_database();
            $result = $db->database_query( $query );
            return $result;   
            
    }//end of showAllNews()
    
    public function showNews( $id )
    {
            $columns = 'content,ID';
            $condition  = 'ID='.$id;
            $tableName = 'news';
            $db = new class_database();
            $result = $db->select_query($columns, $tableName, $condition);
            return $result;
    }//end of showNews ()
    
    public function removeNews ( $id )
    {
      $tableName = 'news';
      $data_array_assoc = array("retouchState" => "0");
      $condition = 'ID ='.$id;
      $db= new class_database();
      $db->update_query($tableName, $data_array_assoc, $condition);
      
    }//end of removeNews

    public function addAttachment($newsID,$fileName,$content,$fileType,$size)
    {
      
        $tableName = 'NewsAttachment';
        $data_aray_assoc = array ('id' =>$newsID, 'attachmentName'=>$fileName, 'attachmentType'=>$fileType, 'attachmentSize'=>$size, 'content'=>$content);
        $db= new class_database();
        $db->insert_query($tableName, $data_aray_assoc);
        
    }// end of addAttachment

    public function publish( $NewsId , $uploderID ) //
    {
        $tableName = 'UploaderPublishNews';
        $data_array_assoc = array ("uploaderID"=> $uploderID , "uploadedNewsID" => $NewsId);
        $db= new class_database();
        $result=  $db->insert_query($tableName, $data_array_assoc);
        echo $result;
        
        
    } // end of publish()
    
   
} // End of class 


