<?php
class UserPost{

    // PRIVATE VARIABLES WHICH ARE GLOBAL IN THIS CLASS BUT ELSE PRIVATE
	private $UserPost;
	private $con;

    // THIS IS CONSTRUCTOR WHICH WILL ALWAYS BE EXECUTED
    public function __construct($con, $user){
		$this->con = $con;
		$UserPost_details_query = mysqli_query($con, "SELECT * FROM posts WHERE owner_id = '$owner_id'");
		$this->UserPost = mysqli_fetch_array($UserPost_details_query);
	}

   
}

?>