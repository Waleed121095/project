<?php

class class_database {

// i) Attributes
	private $host			= "localhost";
	private $userName		= "taha"; 			// This is default value, You can overwrite is 
	private $password		= "estama";			// This is default value, You can overwrite is 	
	private $databaseName		= "CMSdatabase"; 		// Content Managemnet System database
	private $databaseConnection;




// ii) Methods

// Constructor
public function __construct () 	// 1) Open mysql connection 
				// 2) Select the database whose name is filled in the $databaseName Attribute
	{

		$this->databaseConnection = $this->database_connect ( $this->host, $this->userName, $this->password );
		$this->database_selectDB ( $this->databaseName );

	} // end __construct	



private function database_connect ( $host, $userName, $password )
	{
	
		if (
				$this->databaseConnection = mysql_connect ( $host, $userName, $password )
		   ) // end if connection is established
			return $databaseConnection;

		else
			die("Database error!");

	} // end database_connect()	



private function database_selectDB ( $databaseName )
	{

		if (
				$select = mysql_select_db  ( $databaseName, $this->databaseConnection  )
		   )  // end if database is selected
			return $selectl; // boolean
		else
			die ( "No Database is selected" );

	} // end database_selectDB()	



public function database_close ()
	{

		if ( !mysql_close ( $this->connection ) )
			die ( "Connection Close Error!" );

	} // end database_close()	


// Pre:  Non cleaned string is passed. { Queries, Passwords, ... }
// Post: Clean string is returned.
private function clean ( $string )
	{

		$string = trim         ( $string ); // Remove whitespaces form both sides.
		$string = stripslashes ( $string ); // Removes scaping backslashes.
		$string = strip_tags   ( $string ); // removes any tag  { < > }
		$string = mysql_real_escape_string ( $string );
 
		return $string;

	} // end clean()


// Pre:  The $database_query Must be cleaned by clean().
// Post: Query result is returneda.
public function database_query ( $database_query )
	{

		$result_query = mysql_query ( $database_query );
		return $result_query;

	} // end database_query()



public function insert_query ( $tableName, $data_aray_assoc )
	{
		$fields = $values = array();

		foreach ( $data_aray_assoc  as $key => $value) {
		$fields[] = "$key";
		if ($value != "") {
      		$values[] = " ' " . $value . " ' ";
    		} else {
      		$values[] = "NULL";
    		}
		}
		
		$fields = implode(",", $fields);
   	 	$values = implode(",", $values);
		$insert_users = "INSERT INTO $tableName ($fields) VALUES ($values)" ;
		$query = mysqli_query($connect, $insert_users);
                                        if ($query) {
                                           return true;
                                    } else {
                                          return false;
                                    }
                  }



public function update_query ( $tableName, $data_array_assoc, $where="")
	{
		$fields = $values = array();

		foreach ( $data_aray_assoc  as $key => $value) {
		$fields[] = "$key";
		if ($value != "") {
      		$values[] = " ' " . $value . " ' ";
    		} else {
      		$values[] = "NULL";
    		}
		}
		
		$fields = implode(",", $fields);
   	 	$values = implode(",", $values);
		$update_users = "update $tableName SET ($fields) = ($values) where = ($where);
		$query = mysqli_query($connect, $update_users)" ;
                                        if ($query) {
                                           return true;
                                      } else {
                                          return false;
                                    }
	} // end update_query()

} // end class_database	

?>
