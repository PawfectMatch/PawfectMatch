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

	// public function getPetname() {
	// 	return $this->UserPost['nameofpet'];
  //   }

  //   public function breedofPet() {
	// 	return $this->UserPost['breedofpet'];
  //   }

  //   public function ageofPet() {
	// 	return $this->UserPost['ageofpet'];
  //   }

  //   public function locationofPet() {
	// 	return $this->UserPost['location'];
  //   }

  //   public function genderofPet() {
	// 	return $this->UserPost['gender'];
  //   }

  //   public function costofPet() {
	// 	return $this->UserPost['costofpet'];
  //   }

  //   public function ownerofPet() {
	// 	return $this->UserPost['owner'];
  //   }
  //   public function picofPet() {
	// 	return $this->UserPost['picofpet'];
  //   }
    
}

?>