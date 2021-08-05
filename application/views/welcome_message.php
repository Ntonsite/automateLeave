<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>MP | App</title>

	<style>
		body {
			padding-top: 50px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3">
			<form enctype="multipart/form-data" method="post" action="<?php echo site_url('process'); ?>">
				<div class="form-group">
					<label for="Date">Days:</label>
					<input required type="number" name="days" class="form-control" id="date" aria-describedby="date"
						   placeholder="Enter Period Days">
				</div>
				<div class="form-group">
					<label for="Date">Date</label>
					<input required type="date" name="date" class="form-control" id="date" aria-describedby="date"
						   placeholder="Enter Date">
					<small id="date" class="form-text text-muted">Submit the first date you last had menstrual period.</small>
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<br>
			<div class="panel panel-footer">
				<h5 style="color: #757575;"><strong>&copy; <a style="text-decoration: none; color:#757575;" href="https://ntonsite.github.io/">Ntonsite Mwamlima</a> <?php echo date("Y");?></strong></h5>
			</div>

			<br>
			<?php
			if(!empty($result)){
				if($result=='safe'){
					?>
					<div class="alert alert-success">Safe Day!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button></div>
			        <?php
				}else{
					?>
					<div class="alert alert-danger">Danger !
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button></div>
					<?php
				}
			}
			?>

		</div>
	</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
</body>
</html>
