<?php
class AllPost{

    // PRIVATE VARIABLES WHICH ARE GLOBAL IN THIS CLASS BUT ELSE PRIVATE
	private $AllPost;
	private $con;

    // THIS IS CONSTRUCTOR WHICH WILL ALWAYS BE EXECUTED
    public function __construct($con, $user){
		$this->con = $con;
		$AllPost_details_query = mysqli_query($con, "SELECT * FROM posts");
		$this->AllPost = mysqli_fetch_array($AllPost_details_query);
	}

	public function getPetname() {
		return $this->AllPost['nameofpet'];
    }

  public function breedofPet() {
		return $this->AllPost['breedofpet'];
    }

  public function ageofPet() {
		return $this->AllPost['ageofpet'];
    }

  public function locationofPet() {
		return $this->AllPost['location'];
    }

  public function genderofPet() {
		return $this->AllPost['gender'];
    }

  public function costofPet() {
		return $this->AllPost['costofpet'];
    }

  public function ownerofPet() {
		return $this->AllPost['owner'];
    }
  public function picofPet() {
		return $this->AllPost['picofpet'];
    }
    
}

?>