<?php

class class_person {
 
// Attributes
	protected $ID;
	protected $userName;
	protected $password;
	protected $firstName;
	protected $secondName;
	protected $lastName;
	protected $age;
	protected $email;
	protected $gender;
	protected $SSN;
	protected $birthDay;
	protected $birthMonth;
	protected $birthYear;
	protected $joinDate;
	protected $personTypeID;
        

///////// Setters and Getters
		 public function setPersonTypeID ( $personTypeID )
			{

				$this->personTypeID = $personTypeID;
				
			} // end setPersonTypeID()	

		 public function getPersonTypeID ( )
			{
				return $this->personTypeID;
			} // end getPersonTypeID()	
			
		 public function setSSN ( $fSSN )
				{
								if(!ctype_digit($fSSN)|| strlen($fSSN)<10)
								{
									return FALSE;  
								}//end if 
								else {
									$this->SSN = $fSSN;
									return TRUE;
								}// end else
			
				}//end setSSN($ssn)
		 public function getSSN ( )
				{
							return $this->SSN;
				}

		 public function setUserName ( $fUserName )
				{
								$this->userName = $fUserName;
								return TRUE;
				}
		 public function getUserName ( )
				{
							return $this->userName;
				}
		 public function setAge ( $fAge )  
				{
							
								if($fAge>60 || $fAge<18)
								{
									return FALSE;
								}
								else
								{
									$this->age = $fAge;
									return TRUE;
								}
				}//end of setAge
		 public function getAge ( )
				{
							return $this->age;
				}  // end of getAge  
				
		 public function setEmail ( $fEmail )
				{
								if(!filter_var($fEmail,FILTER_VALIDATE_EMAIL))
								{
									return FALSE;
								}
								else
								{
									$this->email = $fEmail ; 
									return TRUE;
								}// end else
				}// end of setEmail
		 public function getEmail ( )
				{
							return $this->email ;
				}      
		 public function  setFirstName ( $fFirstName )
				{
								if(!ctype_alpha($fFirstName))
								{
									return FALSE;
								}
								else 
								{
									$this->firstName = $fFirstName;
									return TRUE;
								}    
				}// end of setFirstName
				
		 public function getFirstName ( )
				{
							return $this->firstName ;
				} //end of getFirstName
				
		 public function  setSecondName ( $fSecondName )
				{
								if(!ctype_alpha($fSecondName))
								{
									return FALSE;
								}
								else 
								{
									$this->secondName = $fSecondName;
									return TRUE;
								}    
				}// end of setSecondName
				
		 public function getSecondName ( )
				{
							return $this->secondName ;
				} // end of getSecondName
					 
		 public function  setLastName ( $fLastName )
				{
								 if(!ctype_alpha($fLastName))
								{
									return FALSE;
								}
								else 
								{
									$this->lastName = $fLastName;
									return TRUE;
								}    
				}// end of setLastName
		  public function getLastName ( )
				{
							return $this->lastName ;
				}  // end of getLastName    
				
		 public function  setGender ( $fGender )
				{
								$this->gender = $fGender ; 
								return True ;
				}//end of setGender ** the gender type is enum type in HTML form
				
		 public function getGender ( )
				{
							return $this->gender;
				}// end of getGender
				
		 public function setJoinDate ( $fJoinDate )
				{
								$this->joinDate= $fJoinDate; 
								return TRUE;
				} // end of setJoinDate
				
		  public function getJoinDate ( )
				{
							return $this->joinDate ;
				}//end of getJoinDate
				

		 public function  setPasswd ( $password )
				{
								if(!strlen( $password) >= 8 )
								{
									return FALSE;
								} 
								else
								{
									
									$this ->password = sha1 ( $password); // Hashing the password
									return TRUE;
								}// end else 
				}// end of setPasswd()
		   
		public function getPasswd ( )
				{
							return $this->password;
				}//end of getPasswd


				
				
		public function  setBirthDay ( $fBirthDay )
				{
								$this->birthDay = $fBirthDay;
								return TRUE;
				}// end of setBirthDay ()
				
		public function getBirthDay ( )
				{
							return $this->birthDay;
				}// end of getBirhDay
				
		public function  setBirthMonth ( $fBirthMonth )
				{
								$this->month = $fBirthMonth;
								return TRUE;
				}// end of setBirthMonth ()
				
		public function getBirthMonth ( )
				{
							return $this->birthMonth;
				}// end of getBirhMontn

		public function  setBirthYear ( $fBirthYear )
				{
								$this->year = $fBirthYear;
								return TRUE;
				}// end of setBirthYear ()
				
		public function getBirthYear ( )
				{
							return $this->year;
				}// end of getBirhDate        
        
///////// end Setters and Getters
        


// Used after True login, To fill its object with the login data.
private function retrieveObjectData ( )
	{
				include_once 'class_database.php';
				$database = new class_database();
				$selectQuery = "SELECT * FROM person WHERE ID  = $this->ID ;";


// testing
//echo "retrieveObjectData() => $selectQuery <BR>";
				$result = $database->getRow( $selectQuery );

		// Filling the object after login
				$this->ID 				= $result['ID'];
				$this->firstNam			= $result['firstName'];
				$this->secondNa			= $result['secondName'];
				$this->lastName			= $result['lastName'];
				$this->age				= $result['age'];
				$this->email			= $result['email'];
				$this->gender			= $result['gender'];
				$this->SSN				= $result['SSN'];
				$this->day				= $result['birthDay'];
				$this->month			= $result['birthMonth'];
				$this->birthYear		= $result['birthYear'];
				$this->joinDate			= $result['joinDate'];
				$this->personTypeID		= $result['personTypeID']; // null, If the MappingPerson.. is null
		
			 	
		
	} // end retrieveObjectData()	






// 1 ) Use setters to set `userName` and `password`
// 2 ) In case of true
		// login() sets the `ID` in the object, and fills the object of the data, then returns true.
		// else returns false
public function login ( )
	{
		include_once 'class_database.php';
		$database = new class_database;
////	$database->clean( $this->userName );
////	$database->clean( $this->password);

$selectLogin = "SELECT * FROM person WHERE userName = '$this->userName' AND password = '$this->password';";
// Testing
//echo "selectLogin => " . $selectLogin . "<br>";
		$result = $database->database_query ( $selectLogin );

// testing
//echo "result_row_number() in login()  => " . $database->result_row_number( $result ) . "<br>";


		if ( $database->result_row_number ( $result ) == 1 )
			{
				// $row is an associative array of a row of person
				$row = $database->getRow ( $selectLogin );
				$this->ID = $row['ID'];  // Login setting the ID in the object
// testing
//echo "ID returned by Login " . $this->ID . "<br>";
//echo "ID returned by row[id]" . $row['ID'] . "<br>";
				$this->retrieveObjectData(); // Filling the object 
				return true;
			} // end if	


		else
			return false;

	} // end login()



public function logout ( )
	{
		
	} // end logout()	

///////////////////////
} // end class_person
///////////////////////



// This is just for testing;
////////////// ////////////// ////////////// //////////////

$obj = new class_person();


// testing login
/*
$obj->setUserName( "taha"  );
$obj->setPasswd  ( "passwd");

if ( $obj->login() )
	{
		echo "YES, loged in!! <br>";
		echo $obj->getPasswd();
		
	} // 	
*/ 
