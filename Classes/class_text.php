<?php
// we should add textId 
// All getter Method must take id as a prammetter 
class class_text {

	private $date;
	private $state;
	private $content;
	private $title;
	private $viewsNumber;
	private $category;
	private $link;

//Methods
    public function setDate( $fDate )
    {
            $this->date = $fDate;
            return TRUE;
    }// end of setDate
    
    public function getDate ()
    {
            return $this->date;
    }// end of getDate
    
    public function setCatagory ( $fCatagory )
    {
        // what are validation here ??
            $this->category= $fCatagory;
            return true;
        
    }// enf of setCatagory
    
    public function getCatagory ( )
    {
            return $this->category ;
    }// end of fetCatagory
    
    public function setContact ( $fContact )
    {
        // what are validation here ??
            $this->content = $fContact;
            return TRUE;
    }// end of setContact
    
    public function getContact ()
    {
            return $this->content;
    } //end of getContact
    
    public function  setLink ( $fLink )
    {
        // what are validations here ??
            $this->link = $fLink ; 
            return TRUE;
            
    }// end of setLink
    
    public function  getLink ()
    {
            return $this->link;
    }// end of getLink
    
    public function setState ( $fState )
    {
          // what are validations here ??
            $this->state = $fState;
            return TRUE;
    } // end of setState
    
    public function getState ()
    {
        return $this->state;
    }// end of getState
    
    public function setTitle ( $fTitle )
    {
        if(strlen($fTitle)>40 )
        {
            $this->title = $fTitle;
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }// end of setTitle
    
    public function getTitle ()
    {
            return $this->title;
    }// end of getTitle
    
    public function setViewsNumber( $fViewsNumber )
    {
            if(is_numeric($fViewsNumber))
            {
                $this->viewsNumber = $fViewsNumber;
                return TRUE;
            }//end if 
            else
            {
                return FALSE;
            }// enf else 
    }// end of setVienaNumber
    
    public function getViewsNumber()
    {
        return $this->viewsNumber;
    }// end of getViewsNumber
    
    

} // end class_text	

?>
