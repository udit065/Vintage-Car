<!DOCTYPE html>
<html>

<head>
	<title>main project</title>
	<link rel="stylesheet" type="text/css" href="\VINTAGE CAR WIKI PROJECT\style2.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

	<style type="text/css" media="screen">
		#logo {
			margin-left: 670px;
			margin-top: 40px;
		}
	</style>
</head>

<body>



	<?php include 'includes/menu.php'; ?>



	<section>
		<div class="jumbotron">
			<h1>Contact Us</h1>
			<p>Give your doubt</p>
		</div>

		<div class="py-4">
			<h1 class="text-center">Contact Us</h1>
			<div class="w-50 m-auto">
				<form action="userinfo.php" method="post">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="user" autocomplete="off" class="form-control-range">

					</div>
					<div class="form-group">
						<label>Email Id</label>
						<input type="text" name="email" autocomplete="off" class="form-control-range">

					</div>
					<div class="form-group">
						<label>Mobile No.</label>
						<input type="text" name="mobile" autocomplete="off" class="form-control-range">

					</div>
					<div class="form-group">
						<label>Comments</label>
						<textarea class="form-control" name="comments"></textarea>

					</div>
					<button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
	</section>


	<!-- Logo & Footer -->

	<div class=" w100 bg-dark text-white">

		<?php include 'includes/footer.php'; ?>
	</div>


	<!---bootsrap part---
		-------
		------>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!----bootsrap part finished-------
		-----------
		------>
</body>

</html>