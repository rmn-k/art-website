<?php

class ArtModel{
	protected $db;

	public function __construct(){	// constructor: will run automatically when object is created
		$db= new PDO('sqlite:/srv/http/p1_art/db/art.db');  // connection with database which is of type sqlite [CONNECT]
		$this->db= $db; // this->db is referring to iss class ki upar wali protected member, db
	}

	function getAllArt(){	// this is only defn. when we will include this file somewhere else, we will also need to call the function.
			/*
				
			$results= array(
				array("id"=>1, "title"=>"SunFlowers", "imageurl"=>"sunflowers.jpg"),
				array("id"=>2, "title"=>"Hands", "imageurl"=>"hands.jpg"),
				array("id"=>3, "title"=>"Cat", "imageurl"=>"cat.jpg")
			);
			
			*/

		$results= $this->db->query('SELECT * FROM arttable'); // query on database, and store the returned stuff in $results variable [QUERY + FETCH]
		return $results;
	}
}

?>
