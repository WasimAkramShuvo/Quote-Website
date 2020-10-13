<?php

include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/web1.css">
	<div class="main">
	<div id="logo_left">
        <h2><marquee behavior="scroll" direction="right" class="h">Quote Website</marquee> </h2>
    </div>
</head>
<body>

<body id="b">
	 <div id="d"> 
	 	<form action="a_login.php" method="POST" align="center"> 
	 		<center><img src="images/admin.png" class="img" align="center"></center>
	 		<br>
			  <b>
			  <label>User-Name</label>
	 		  <input type="text" name="username" id="form" placeholder="Enter Username" required>
	 		  <br><br>
	 		  <b>
	 		  <label>User-Password</label>
	 		  <input type="password" name="password" id="form" placeholder="Enter your Password" required><br><br>

	 		  <input type="submit" name="a_login"class="btn btn-success" value="Log-In">
	 	</form>
	 	
	 	<?php
	 	/*log_in button a click holo kina!!!*/
	 	if(isset ($_POST ['a_login'])){
	 		/*user j email r pass dilo seta amr db tey ache kina!! tar check...*/
	 		$username = $_POST['username'];
	 		$password = $_POST ['password'];

	 			$query = "select * from a_login where username = '$username' AND password = '$password' ";
	 			$check = mysqli_query($con, $query);

	 			if($check){

	 				if(mysqli_num_rows ($check) > 0){
	 					echo "
	 					<script>
	 					alert ('You are successfully Logged-In!');
	 					window.location.href = 'admin.php';
	 					</script>
	 					";
	 				}
	 				else {
	 					echo "
	 					<script>
	 					alert ('Email or Password not Correct!');
	 					window.location.href = 'a_login.php';
	 					</script>
	 					";
	 					/*email & pass check*/
	 				}

	 			}
	 			else {
	 				echo "
	 					<script>
	 					alert ('Database error!!');
	 					window.location.href = 'a_login.php';
	 					</script>
	 					";
	 				/*query else*/
	 			}
	 	}

	 	?>
	 </div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>