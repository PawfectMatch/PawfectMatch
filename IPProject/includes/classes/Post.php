<?php

class Post{
    // PRIVATE VARIABLES
    private $user_obj;
    private $con;

    // Constructor always executes
    public function __construct($con , $user){
        $this->con = $con;
        // creating user class obj
        $this->user_obj = new User($con , $user);
    }



    // FUNCTION TO SUBMIT POST
    public function submitPost($userpost_nameofpet,$userpost_breedofpet,$userpost_age
                                ,$userpost_gender,$userpost_cost,$userpost_url,$userpost_location){

        // Get USername from User class object 
        $username1 = $this->user_obj->getUsername();                            
        // defining error array
        $error_array = array();
        // $error_array = null;                            
        // STRIP INPUT FIELDS
		$userpost_nameofpet = strip_tags($userpost_nameofpet);
        $userpost_nameofpet = mysqli_real_escape_string($this->con , $userpost_nameofpet);

        $userpost_breedofpet = strip_tags($userpost_breedofpet);
        $userpost_breedofpet = mysqli_real_escape_string($this->con , $userpost_breedofpet);

        $userpost_gender =   strtolower($userpost_gender) ;   

        //date format
        $date_of_post = date ('Y-m-d H:i:s');                      

        if($userpost_gender!= 'female' || $userpost_gender!= 'male'){
            array_push($error_array , "Please enter Male / Female");
        }


        // TO CHECK IF NUMERIC VALUE IS ENTERED IN AGE AND COST
        if(!is_numeric($userpost_age)){
            array_push($error_array , "Please enter numeric value in age");
        }
       
        if(!is_numeric($userpost_cost)){
            array_push($error_array , "Please enter numeric value in cost");
        }

        // INSERTIN POST INTO posts DB
        // if(isset($error_array)){
        //     echo "null";
        // } else{
        //     print_r($error_array);
        // }

        $post_query = mysqli_query($this->con , "INSERT INTO posts VALUES (
            '' ,'$userpost_nameofpet','$userpost_breedofpet','$userpost_age','$userpost_location',
          '$userpost_gender','$userpost_cost','$username1','no','no',0,'$userpost_url', '$date_of_post') ");



        $returnedpost_id =  $returned_id = mysqli_insert_id($this->con);

        //Update post count for user 
			$num_posts = $this->user_obj->getNumPosts();
            $num_posts++;

			$update_query = mysqli_query($this->con, " UPDATE users 
                            SET num_posts='$num_posts' WHERE username='$username1' ");


    }


}


// echo $userpost_nameofpet;
?>