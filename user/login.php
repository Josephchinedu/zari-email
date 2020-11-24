<?php
    session_start();
    ob_start();
?>
<?php
    if((isset($_SESSION["blackMail"])) && isset($_SESSION["blackPass"])){
        header("location:./");
        exit();
    }
?>
<?php
    $lct = "";
    echo '<input type="hidden" name="lct" value="';
    if(isset($_GET['lct'])) {
    
        $lct = htmlspecialchars($_GET['lct']);
        echo $lct;
    }
    echo '" />';

    //  Will show something like this:
    //  <input type="hidden" name="location" value="comment.php?articleid=17" />

?>

<?php require("config.php"); ?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
    	<div class="row" style="padding-top: 60px;">
    		<div class="col-md-8 offset-md-2">
    			<div id="loginbag">
    			    
    			    <?php
                        $alert = "";
                        if(isset($_POST["submit"])){
                                    
                            $email = clean($_POST['email']);
                            $pass = clean($_POST['pass']);

                            $result = mysqli_query($connect, "SELECT * FROM members WHERE email ='$email'");
                            
                            if(mysqli_num_rows($result) > 0){ 
                                $rows = mysqli_fetch_assoc($result);
                                $hash = $rows['password'];
                                $verify = $rows["verified"];
                                
                                //if($verify == "YES"){
                                    if(crypt($pass, $hash) == $hash){
                                    
                                        $_SESSION["blackMail"] = $email;
                                        $_SESSION["blackPass"] = $pass;
                                        
                                        if($lct != ''){
                                            header("Location: " . $lct);
                                            exit();
                                        }else{
                                            header("Location: index.php");
                                            exit();
                                        }
                                    }else{
                                        $alert = "<div class='alert alert-danger' role='alert'><b>Error!!!</b> Login failed. Incorrect Password</div>";
                                        //echo " <a href='login.php'><button class='btn green'>Retry</button></a>";
                                    }
                                //}else{
                                    //$alert = "<div class='alert alert-danger' role='alert'><b>Error!!!</b> Your account has not been verified. <br>Kindly visit check your email for the verification mail.</div>";
                                //}
                            }else{ 
                                $alert = "<div class='alert alert-danger' role='alert'><b>Error!!!</b> Login failed. Incorrect Username or Password</div>";
                                //echo " <a href='login.php'><button class='btn green'>Retry</button></a>";
                            }
                        }
                    ?>
              <?php echo $alert ?>
    				
    					<form role="form" method="POST" action="">
    						<div id="opls">
	                           <div class="input-group">
	                                <span class="input-group-append">
	                                    <button class="btn btn-outline-secondary" type="button" id="errrrrrt">
	                                        <img src="useytg.png">
	                                    </button>
	                                </span>
	                                <input class="form-control py-2" type="text" name="email" placeholder="Email" id="errrrrrt" style="background: transparent; color: #fff;">
	                                
	                            </div>
	                                 


	                            <br /><br /> 

	                            <div class="input-group">
	                                <span class="input-group-append">
	                                    <button class="btn btn-outline-secondary" type="button" id="errrrrrt">
	                                        <img src="lock.png">
	                                    </button>
	                                </span>
	                                <input class="form-control py-2" type="password" name="pass" placeholder="Password" id="errrrrrt" style="background: transparent; color: #fff;" min="6">

	                                
	                                
	                            </div>

	                        </div>

	                        <br /><br />
	                        <center>
    			<button name="submit" class="btn btn-large" style="background-color: #654573; color: #fff;">
	            	Sign In
	            </button>
    		</center>

                           
                       </form>
    				</div>
    			</div>
    		</div>
    		<br /><br />

    		
    	</div>
    </div>
</body>

<?php
    function clean($txt){
            
        return trim(htmlentities($txt));
    }
?>

</html>