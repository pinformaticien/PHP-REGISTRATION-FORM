<?php
	require_once 'config.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
	<?php 
		
	?>
</div>

<div>
	<form action="registration.php" method="post">
		<div class="container">

			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<label for="firstname">First Name</label>
					<input class="form-control"   type="text" id="firstname" name="firstname" required/>

					<label  for="lastname">Last Name</label>
					<input class="form-control" type="text" name="lastname" id="lastname" required/>

					<label for="email">Email</label>
					<input class="form-control" type="email" name="email" id="email" required/>

					<label for="phonenumber">Phone Number</label>
					<input class="form-control" type="text" name="phonenumber" id="phonenumber" required/>

					<label for="password">Password</label>
					<input class="form-control" type="password" name="password" id="password" required/>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function () {

		$('#register').click(function(e) {

			var valid = this.form.checkValidity();

			if (valid) {
				
				var firstname = $('#firstname').val();
				var lastname = $('#lastname').val();
				var email = $('#email').val();
				var phonenumber = $('#phonenumber').val();
				var password = $('#password').val();


				e.preventDefault();



				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {
						firstname: firstname,
						lastname: lastname,
						email: email,
						phonenumber: phonenumber,
						password: password
					},
					success: function (data) {
						
						swal.fire({
							'title': 'Successfull',
							'text': data,
							'type': 'success'
						})

					},
					error: function (data) {
						
						swal.fire({
							'title': 'Errors',
							'text': 'There were errors while saving the data.',
							'type': 'error'
						})


					}
				});


			} else {
				
			}

			


		});
		// alert('hello');
		
	});
</script>
</body>
</html>