<?php
//All geter method must take staffId as a prametter and search  result in Database
include_once 'class_person.php'; // for extending 
class class_stuff extends class_person {
	
// Attributes
	private $cutOff;
	private $newSalary;
	private $basicSalary;
	private $bounce;
	private $stuffID;

// Methode 
        
    public function setCutOff ( $fCutOff)
    {
            if (is_numeric($fCutOff))
            {
                $this->cuttOff = $fCutOff;
                return TRUE;
            }// end if
            else
            {
                return FALSE;
            }// end else
        
    }// end of setCuttOff
    public function getCuttOff( )
    {
        return $this->cuttOff;
        
    }// end of getCutOff
    
    public function setBasicSalary ($fBasicSalary)
    {
            if (is_numeric($fBasicSalary) && $fBasicSalary <200000)
            {
                $this->basicSalary = $fBasicSalary;
                return TRUE;
            }// end if
            else 
            {
                return FALSE;
            } // end else
    }// end setBasicSalary 
    
    public function getBasicSalary ( )
    {
            return $this->basicSalary;
    }// end of getBasicSalary
    
     public function setNewSalary ($fNewSalary)
    {
            if (is_numeric($fNewSalary) && $fNewSalary <200000)
            {
                $this->newSalary = $fNewSalary;
                return TRUE;
            }// end if
            else 
            {
                return FALSE;
            } // end else
    }// end setNewSalary 
    
    public function getNewSalary ( )
    {
            return $this->newSalary;
    }// end of getNewSalary
    
    
      public function setBounce ($fBounce)
    {
            if (is_numeric($fBounce) && $fBounce <2000)
            {
                $this->bounce = $fBounce;
                return TRUE;
            }// end if
            else 
            {
                return FALSE;
            } // end else
    }// end setBounce
    
    public function getBounce ( )
    {
            return $this->bounce;
    }// end of getBounce
    
   
} // end class_stuff	

?>
