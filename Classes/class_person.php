<?php

class class_person {
	
// Attributes
	private $ID;
	private $userName;
	private $passwd;
	private $firstName;
	private $secondName;
	private $lastName;
	private $age;
	private $email;
	private $gender;
	private $SSN;
	private $phone;
	private $street;
	private $city;
	private $country;
	private $day;// what is this ?
	private $month;//what is this ?
	private $year;//what is this ?
        private $birthDate ; // new added by me 
        private $joinDate;

// Methods
 public function setSSN ( $fSSN )
        {
                        if(!ctype_digit($ssn)|| strlen($ssn)<10)
                        {
                            return FALSE;  
                        }//end if 
                        else {
                            $this->$SSN = $fSSN;
                            return TRUE;
                        }// end else
    
        }//end setSSN($ssn)
 public function getSSN ( )
        {
                    return $this-> $SSN;
        }

 public function setUserName ( $fUserName )
        {
                        $this->$userName = $fUserName;
                        return TRUE;
        }
 public function getUserName ( )
        {
                    return $this->$userName;
        }
 public function setAge ( $fAge )  
        {
                    
                        if($fAge>60 || $fAge<18)
                        {
                            return FALSE;
                        }
                        else
                        {
                            $this->$age = $fAge;
                            return TRUE;
                        }
        }//end of setAge
 public function getAge ( )
        {
                    return $this->$age;
        }  // end of getAge  
 public function  setStreet ( $fStreet )
        {
                        $this->$street = $fStreet;
                        return TRUE;
        }// end of setStreet()
 public function getStreet ( )
        {
                    return $this->$street ;
        }
 public function  setCity ( $fCity )
        {
                        $this->$city =$fCity;
                        return TRUE;
        }//end of setCity
 public function getCity ( )
        {
                    return $this->$city ;
        }//end of getCity
        
 public function setCountry ( $fCountry )
        {
                        $this->$country = $fCountry;
                        return True;
        }//end of setCountry
        
 public function getCountry ( )
        {
                    return $this-> $country;
        }  // end of getCountry
        
 public function setEmail ( $fEmail )
        {
                        if(!filter_var($fEmail,FILTER_VALIDATE_EMAIL))
                        {
                            return FALSE;
                        }
                        else
                        {
                            $this->$email = $fEmail ; 
                            return TRUE;
                        }// end else
        }// end of setEmail
 public function getEmail ( )
        {
                    return $this->$email ;
        }      
 public function  setFirstName ( $fFirstName )
        {
                        if(!ctype_alpha($fFirstName))
                        {
                            return FALSE;
                        }
                        else 
                        {
                            $this->$firstName = $fFirstName;
                            return TRUE;
                        }    
        }// end of setFirstName
        
 public function getFirstName ( )
        {
                    return $this->$firstName ;
        } //end of getFirstName
        
 public function  setSecondName ( $fSecondName )
        {
                        if(!ctype_alpha($fSecondName))
                        {
                            return FALSE;
                        }
                        else 
                        {
                            $this->$secondName = $fSecondName;
                            return TRUE;
                        }    
        }// end of setSecondName
        
 public function getSecondName ( )
        {
                    return $this->$secondName ;
        } // end of getSecondName
             
 public function  setLastName ( $fLastName )
        {
                         if(!ctype_alpha($fLastName))
                        {
                            return FALSE;
                        }
                        else 
                        {
                            $this->$lastName = $fLastName;
                            return TRUE;
                        }    
        }// end of setLastName
  public function getLastName ( )
        {
                    return $this->$lastName ;
        }  // end of getLastName    
        
 public function  setGender ( $fGender )
        {
                        $this->$gender = $fGender ; 
                        return True ;
        }//end of setGender ** the gender type is enum type in HTML form
        
 public function getGender ( )
        {
                    return $this->$gender;
        }// end of getGender
        
 public function setJoinDate ( $fJoinDate )
        {
                        $this->$joinDate= $fJoinDate; 
                        return TRUE;
        } // end of setJoinDate
        
  public function getJoinDate ( )
        {
                    return $this->$joinDate ;
        }//end of getJoinDate
        
 public function  setPasswd ( $fPasswd )
        {
                        if(!strlen($fPasswd)> 8 )
                        {
                            return FALSE;
                        } 
                        else
                        {
                            $this ->$passwd = $fPasswd;
                            return TRUE;
                        }// end else 
        }// end of setPasswd()
   
public function getPasswd ( )
        {
                    return $this->$passwd;
        }//end of getPasswd
        
public function  setPhone ( $fPhone )
        {
                        if(is_numeric($fPhone))
                        {
                            $this-> $phone = $fPhone;
                            return TRUE;
                        }
                        else
                        {
                            return FALSE;
                        } //end else   
        }// end of setPhone
public function getPhone ( )
        {
                    return $this->$phone ;
        }// end of getPhone
        
public function  setBirthDate ( $fBirthDate )
        {
                        $this->$birthDate = $fBirthDate;
                        return TRUE;
        }// end of setBirthDate ()
        
public function getBirthDate ( )
        {
                    return $this-> $birthDate;
        }// end of getBirhDate
        
public function login ()
	{
                        // Writen you code here!

	} // end login()



public function logout ( )
	{
		
	} // end logout()	


} // end class_person


?>
