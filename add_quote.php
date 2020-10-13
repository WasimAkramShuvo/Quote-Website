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
<div class="container-fluid">
<div class="row">
<div class="col-md-1">
		<a href="admin.php" class="btn btn-success">Back</a></div>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body" style="background-color: #3498DB; color: #ffffff;">
				Add Quote
			</div>
			<div class="card-body">			
				<form class="form-group" action="config.php" method="post">
					<label>Author Id</label>
					<input type="text" name="a_id" class="form-control"><br>
					<label>Author Name</label>
					<input type="text" name="a_name" class="form-control"><br>
					<label>Quote Type</label>
					<select class="form-control" name="t_quote">
						<option value="Type of Quote">Type Of Quote</option>
						<option value="Motivational Quote">Motivational Quote</option>
						<option value="Life Quote">Life Quote</option>
						<option value="Friendship Quote">Friendship Quote</option>
						<option value="Friendship Quote">Love Quote</option>
						<option value="Friendship Quote">Depression Quote</option>
						<option value="Friendship Quote">Nature Quote</option>
					</select><br>
					<label>Quote</label>
					<input type="textarea" rows="4" cols="50" name="quote" class="form-control"><br>
					
					
					<input type="submit" name="add_quote_submit" value="Add" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>
</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>