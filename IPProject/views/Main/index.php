<!-- HEADER -->
<?php
    include("../../includes/partials/header.php");
    include("../../includes/classes/User.php");
    $AllPosts = $con->query("SELECT * from posts");

?>
<link rel="stylesheet" href="../../Public/Stylesheets/main.css">

<section class="lower_body">
    <table class="grid">
        <tbody>
<!-- DEFINING THE TABLE SIZE -->
            <tr>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <tr>
    <!-- NEWS PANEl -->
                <td>
                    <div>
                        <h1 style="color: #1d1e1f;"></h1>
                    </div>
                </td>
	<!-- GRID PANEL -->
    
                <td class="GridPics">
                    
                    <?php
                        while($data = mysqli_fetch_array($AllPosts)){ 
                    ?>

                    <div class="card">
                        <img src="<?php
                            echo $data['picofpet']
                        ?>" alt="Whiskey" style="width:100%">
                        <h1><?php
                            echo $data['nameofpet']
                        ?></h1>
                        <p class="CardName"><?php
                            echo $data['descr']
                        ?></p>
                        <p>Age : <?php
                            echo $data['ageofpet']
                        ?></p>

                        <p><button><a class="ReadMore" href="../Posts/Bruce.php">Read More</a></button></p>
                    </div>


                    <?php
                        }
                    ?>


                </td>
	<!-- ADMIN PANEL -->
                <td class="AdminPanel">
                    <div class="AdminPanelBox">
                        <!-- If User Is Logged In -->
                        <?php 
                            if( $loggedin_user != "_nouser_"){
                        ?>        
                                <h1>WELCOME!</h1>
                                <a href="./userpage.php">
                        <!-- Fetch Profile Pic -->
                                    <img src="                        
                                    <?php
                                        $user_obj = new User($con , $loggedin_user);
                                        echo $user_obj->getProfilePic();
                                    ?>
                                    " alt="">
                                </a>
                                
                                <!-- ADMIN PANEL INFO -->
                                <div class="AdminPanelInfo">
                                    <h2> <?php 
                                            $user_obj = new User($con , $loggedin_user);
                                            echo $user_obj->getUsername();                                    
                                        ?> 
                                    </h2>
                                    <h4>LIKES: 
                        <!-- Fetch Other Details -->
                                        <?php
                                            $user_obj = new User($con , $loggedin_user);
                                            echo $user_obj->getNumLikes();
                                        ?>
                                        </h4>
                                    <h4>POSTS: 
                                        <?php
                                            $user_obj = new User($con , $loggedin_user);
                                            echo $user_obj->getNumPosts();
                                        ?>
                                    </h4>
                                    <h4>Friends: 8</h4>

                                </div>
                        <?php
                            }
                            // IF USER IS NOT LOGGED IN 
                            else{
                        ?>
                            <h1>WELCOME!</h1>
                            <img src="../../Public/Images/login2.jpg" href="../Authentication/loginandregistration.php" alt="">
                            <div class="AdminPanelInfo">
                                <h2>Please <a href="../Authentication/loginandregistration.php">Log In</a></h2>
                                <h4>Dont Have a acount?</h4><p></p>
                                <h4><a href="../Authentication/loginandregistration.php">Register for free</a></h4>
                            </div>

                        <?php
                            }
                        ?>



                </td>
			</tr>
        </tbody>

    </table>
</section>




<!-- FOOTER -->
<?php
    include("../../includes/partials/footer.php");
?>
