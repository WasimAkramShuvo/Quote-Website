<?php

/*create variale*/
$localhost = 'localhost';
$username = 'root';
$password = '';
$dbname = 'quotes';

/*connect database*/
$con = mysqli_connect($localhost, $username, $password, $dbname) or die ('Database error!'); 
/*Database a mysqli select*/
mysqli_select_db ($con, $dbname);



/* add quote */
if(isset($_POST['add_quote_submit']))
{
	$a_id=$_POST['a_id'];
	$a_name=$_POST['a_name'];
	$t_quote=$_POST['t_quote'];
	$quote=$_POST['quote'];

	
	$query= "insert into add_quote(a_id,a_name,t_quote,quote)values('$a_id','$a_name','$t_quote','$quote')";
	$result= mysqli_query($con,$query);
	if ($result) 
	{
		echo "<script>alert('Add Quote')</script>";
		echo "<script>window.open('add_quote.php' ,'_self')</script>";
	}
}

/* view_quote */
function get_view_quote()
{
	global $con;
	$query= "select * from add_quote";
	$result=mysqli_query($con,$query);
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
				<td><a href='edit.php' class='btn btn-primary'>Edit</a></td>
				<td><a href='delete.php' class='btn btn-primary'>Delete</a></td>
			</tr>";
	}

}
/* search view quote */
function get_view_quote_1()
{
	global $con;
	$query= "select * from add_quote";
	$result=mysqli_query($con,$query);
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

}
/* update quote */
if(isset($_POST['update_quote_submit']))
{
	$a_id=$_POST['a_id'];
	$a_name=$_POST['a_name'];
	$t_quote=$_POST['t_quote'];
	$quote=$_POST['quote'];

	$id=$_GET['edit_id'];
	$query= "UPDATE add_quote SET a_name = '$a_name',t_quote = '$t_quote',quote = '$quote' WHERE a_id= '$a_id'";
	$result= mysqli_query($con,$query);
	if ($result) 
	{
		echo "<script>alert('Add Quote')</script>";
		echo "<script>window.open('add_quote.php' ,'_self')</script>";
	}
}


?>