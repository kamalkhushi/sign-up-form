<!DOCTYPE html>
<html >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign up</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>
<body>
<div class="signup" >
    <form action= "signup.php" method = "POST" >
        <h2>Sign Up</h2>
        <p class="description">Please Fill The Form.</p>            
          <div class="form-group"><input type="text" class="form-control" placeholder="User Name" name = "user_name" required="required"></div>            
           <div class="form-group">
             <input type="email" class="form-control" placeholder="Email Address" name = "email" required="required">
           </div>
        <div class="form-group">
           <div class="row">
                <div class="col-xs-4" name = "phone">
                    <select class="form-control">
                        <option>+91</option>
                        <option>+41</option>
                    </select>
                </div>
                <div class="col-xs-8"><input type="tel" class="form-control" placeholder="Phone Number" name = "phone_num" required="required"></div>
           </div>    
       </div>
        <div class="form-group">
            <input type="password" class="form-control"  placeholder="Password" name = "password" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control"  placeholder="Confirm Password" required="required">
        </div>          
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name = "butt">Register Now</button>
        </div>
    </form>
    <div class="center">Already have an account? <a href="signin.html">Sign In</a></div>
	<?php

//________________________________________________

function createUser()
{

	$link = mysqli_connect("localhost", "root", "", "signup");
	if(!$link)
	{
		echo "failed";
		echo 'link unsuccesful!';
	}
	else
	{
		echo "Connected!";
	}
	// ________________________________________

	$un = $_POST['user_name'];
	$em = $_POST['email'];
	$pho = $_POST['phone'];
	$pnum = $_POST['phone_num'];
	$pass = $_POST['password'];

	// ________________________________________


	$sql = "INSERT INTO `signup_site`(`User_Name`, `Email`, `Phone_extention`, `Number`, `Password`) VALUES ('$un','$em','$pho','$pnum','$pass');";
	
	if(mysqli_query($link, $sql))
	{
		echo "Success";
	}
	else
	{
		echo 'Error';
	}


	mysqli_close($link);
}

	//________________________________________________

if(isset($_POST['butt']))
	{                
		createUser();      
				 
	}

?>

</div>
</body>
</html>
