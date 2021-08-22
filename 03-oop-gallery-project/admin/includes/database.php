<?php

require_once("config.php");

class Database {

	// Alternative to making $connection a global variable
	// private $connection;
	// Changed the above per Edwin-from-the-future
	public $connection;

	function __construct(){

		$this->open_db_connection();
	
	}

	// Create method to open connection
	public function open_db_connection(){

		// $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		// Edwin from the future: Making this more oop, create new mysqli object
		$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		// If connection does not work:
		// if(mysqli_connect_errno()){
		// Future: OOP; mysqli object has connect_errno property
		if($this->connection->connect_errno){
			// die("Database connection failed. " . mysqli_error());
			die("Database connection failed. " . $this->connection->connect_errno);
		}

	}

	public function query($sql){

		// $sql is query parameter
		// $result = mysqli_query( $this->connection, $sql);
		// Future:
		$result = $this->connection->query($sql);

		// if (!$result){
		// 	die("Query failed.");
		// }
		// Move the conditional check to helper confirm_query method

		return $result;

	}

	// Private because only needed in this class
	private function confirm_query($result){

		if (!$result){
			// Future: Updated with concatenation
			die("Query failed." . $this->connection->error);
		}

	}

	// Escape strings when adding data to database
	public function escape_string($string){

		// $escaped_string = mysqli_real_escape_string($this->connection, $string);
		// Future:
		$escaped_string = $this->connection->real_escape_string($string);

		return $escaped_string;

	}

	// Future:
	public function the_insert_id(){
		return $this->connection->insert_id;
	}

}

$database = new Database();

// No longer needed because constructor opens connection
// $database->open_db_connection();

