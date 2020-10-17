<?php
class User{

    // PRIVATE VARIABLES WHICH ARE GLOBAL IN THIS CLASS BUT ELSE PRIVATE
	private $user;
	private $con;

    // THIS IS CONSTRUCTOR WHICH WILL ALWAYS BE EXECUTED
    public function __construct($con, $user){
		$this->con = $con;
		$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$user' ");
		$this->user = mysqli_fetch_array($user_details_query);
	}

	public function getUsername() {
		return $this->user['username'];
	}




    // TO GET EMAIL OF PARTICULAR USER PASSED IN THE CONTRUCTOR
	public function getEmail() {
        // THIS SPECIFIES THE PRIVATE VARIABLE
        $username = $this->user['username'];
        // GENERAL SQL QUERY
        $query = mysqli_query($this->con, "SELECT email FROM users WHERE username='$username' ");
        // FETCH THE HORIZONTAL ROW 
        $row = mysqli_fetch_array($query);
        // GET THE EMAIL
		return $row['email'];
	}

// ALL FUNCTIONS ARE SIMILAR AS ABOVE FUNC

	public function getNumPosts() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT num_posts FROM users WHERE username='$username'");
		$row = mysqli_fetch_array($query);
		return $row['num_posts'];
	}

	public function getNumLikes() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT num_likes FROM users WHERE username='$username'");
		$row = mysqli_fetch_array($query);
		return $row['num_likes'];
    }
    
	public function getRegDate() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT reg_date FROM users WHERE username='$username'");
		$row = mysqli_fetch_array($query);
		return $row['reg_date'];
    }   
    
    public function getProfilePic() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT profile_pic FROM users WHERE username='$username'");
		$row = mysqli_fetch_array($query);
		return $row['profile_pic'];
	} 


}

?>