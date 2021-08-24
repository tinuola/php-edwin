<?php

class User {

	// global $database;

	// Find users
	// public function find_all_users(){
	// Make this static method
	public static function find_all_users(){
		// Make database object global
	  // global $database;
		// $result_set = $database->query("SELECT * FROM users");
		// return $result_set;

    // Instead use find_this_query method
    return self::find_this_query("SELECT * FROM users");
  
	}

	public static function find_user_by_id($id){

		global $database;
		// $result_set = $database->query("SELECT * FROM users WHERE id=$id");
		// return $result_set;

		// Edwin step:
		// $found_user = mysqli_fetch_array($result_set);
		// return $found_user;

    // using find_this_query
    $result_set = self::find_this_query("SELECT * FROM users WHERE id=$id LIMIT 1");
    $found_user = mysqli_fetch_array($result_set);
		return $found_user;

	}

  // Make method that can execute any query
  public static function find_this_query($sql){

    global $database;

    $result_set = $database->query($sql);

    return $result_set;

  }
}