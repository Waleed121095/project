<?php
// all getter method  must take id as parameter 
include_once 'class_text.php';
class class_news extends class_text {
	
// Attributes

	private $id;
	private $attachment;
	private $firstComingDate;
	private $publishDate;
	private $removeDate;
//Methods 
    public function setAttachment ( $fAtthavhment )
    {
            $this->attachment = $fAtthavhment ;
            return TRUE;
                    
    }// end of setAttachment
    public function  getAttachment ()
    {
            return $this->attachment ; 
            
    }// end of getAttachment
    
    public function  setFirstComingDate( $fFirstComingDate)
    {
            $this->firstComingDate = $fFirstComingDate;
            return TRUE;
            
    }   // end of setfirstComingDate    
    
    public function getFirstComingDate ( )
    {
            return $this->firstComingDate;
    }  // end of getfirstComingDate
    
    public function setPublichDate ( $fPublichDate )
    {
            $this->publishDate = $fPublichDate ; 
            return TRUE;
            
    }// end of setPublishDate
    
    public function getPublishDate ( )
    {
            return $this->publishDate;
        
    }//end of getPublishDate 
    
    public function setRemoveDate ( $fRemoveDate )
    {
            $this->removeDate = $fRemoveDate;
            return TRUE; 
            
    }// end of setRemoveDate 
    
    public function  getRemoveDate ()
    {
            return $this->removeDate;
    }
} // end class_news



?>
