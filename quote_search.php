<!DOCTYPE html>
<html>
<head>
	<title>Quote Search</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/web1.css">
	<div class="main">
	<div id="logo_left">
        <h2><marquee behavior="scroll" direction="right" class="h">Quote Website</marquee> </h2>
    </div></head>
<body>
<?php
include("config.php");
if(isset($_POST['quote_search_submit']))
{
	$a_name= $_POST['search'];
	$t_quote=$_POST['search'];
	$query="SELECT * FROM add_quote WHERE t_quote='$t_quote'";
	$result=mysqli_query($con,$query);
	echo "<div class='container-fluid' style='margin-top: 50px;'>
	<div class='card'>
	<div class='card-body'><a href='user.php' class='btn btn-success'>Back</a></div>
	<div class='card-body' style='background-color: #3498DB; color: #ffffff;'>
		<table class='table table-hover'>
			<thead>
				<tr>
					<th>Author Id</th>
					<th>Author Name</th>
					<th>Quote Type</th>
					<th>Quote</th>
					<th>Download</th>
					<th>Reaction</th>
				</tr>
			</thead>
			<tbody>
			";
	while($row=mysqli_fetch_array($result))
	{
		$a_id=$row['a_id'];
		$a_name=$row['a_name'];
		$t_quote=$row['t_quote'];
		$quote=$row['quote'];
		echo "<tr>
				<td>$a_id</td>
				<td>$a_name</td>
				<td>$t_quote</td>
				<td>$quote</td>
				<td><a href='download.php' class='btn btn-primary'>Download</a></td>
				<td><a href='reaction.php' class='btn btn-primary'>Like</a></td>
			</tr>";
	}
	echo "</tbody></table></div></div></div>";
}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
