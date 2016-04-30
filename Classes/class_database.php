<?php

class class_database {

// i) Attributes
	private $host			= "localhost";
	private $userName		= "taha"; 			// This is default value, You can overwrite is 
	private $password		= "estama";			// This is default value, You can overwrite is 	
	private $databaseName		= "projectJournal3"; 		// Content Managemnet System database
															// This name can be changed!
	private $databaseConnection;




// ii) Methods

// Constructor
// As soon as you object is made -> Database connection is established and database is selected.
public function __construct () 	// 1) Open mysql connection 
				// 2) Select the database whose name is filled in the $databaseName Attribute
	{

		$this->databaseConnection = $this->database_connect ( $this->host, $this->userName, $this->password );
// ********
		$this->database_selectDB ( $this->databaseName );
// ********
	} // end __construct	



private function database_connect ( $host, $userName, $password )
	{
	
		if (
				$connectionReturned = mysql_connect ( $host, $userName, $password )
		   ) // end if connection is established
			return $connectionReturned;

		else
			die("Database connection error!");

	} // end database_connect()	



private function database_selectDB ( $databaseName )
	{

		if (
				$select = mysql_select_db  ( $databaseName, $this->databaseConnection  )
		   )  // end if database is selected
			return $select; // boolean
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


public function database_query ( $database_query )
	{
		$database_query = $this->clean( $database_query ); // cleaning
		$result_query 	= mysql_query ( $database_query ); // querying 

		if ( !$result_query ) 
					die( 'Invalid query: ' . mysql_error() );
		else
					return $result_query;

	} // end database_query()



// $columns : can be a coulmn name or many columns names with comma separated or can be `*`.
public function select_query ( $columns, $tableName, $condition="" )
	{
		$columns   = $this->clean ( $columns   );
		$tableName = $this->clean ( $tableName );
		$condition = $this->clean ( $condition );

		$select = "select " . $columns . " from " . $tableName;
		if ( $condition == "" ) 
			{
															echo "$select<br>";
			return $this->database_query( $select . ";" ); 
				
			} // end if
			
		else {
			
			$select .= " where " . $condition;
															echo "$select<br>";
			return $this->database_query( $select . ";" );
		} // end else	

	
	} // end select_query
	


public function insert_query ( $tableName, $data_aray_assoc )
	{
		// Please, read this comment and remove it when you code!
		// Hello Ahmed, You should take the following into your work.
		// $data_aray_assoc is an associative array.
			// Its key is the column name, and Its value is the data
		// 1 ) This fucntion returns `true`  when insertion is correct.
		 	// this means that you will execute the query.
		// 2 ) This function returns `False` when insertion is no done.
	} // end insert_query()



public function update_query ( $tableName, $data_array_assoc, $where="")
	{
		// Please, read this comment and remove it when you code!
		// 1 ) This fucntion execute the update quey after generating it, and Return `ture`
		// else
		// 2 ) This function returns `False` when insertion is no done.
		
	} // end update_query()




public function insert_query (  /*object or array*/ )
	{

	
		
	} // end insert_query()	



///////////////////////
} // end class_database	
///////////////////////





// This is just for testing;
////////////// ////////////// ////////////// //////////////
$obj = new class_database();
$res = $obj->select_query( "*", "address", "addressChildID < 3" );


while ( $ar = mysql_fetch_assoc( $res ) ) {
echo $ar['addressChildID'] . "<br>";
echo $ar['addressName'] . "<br>";

}

$class_methods = get_class_methods('class_database');
foreach ($class_methods as $method_name) 
    echo "$method_name<br>";
