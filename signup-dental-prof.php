<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIGN-UP DENTIST</title>
	<link rel="stylesheet" type="text/css" href="home/css/signup.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">
	<section class="left-pg">
		<img alt="logo" class="logo" src="images/logo-dental 2.png">
		<img src="images/dentist-logo.png" alt="dentist" class="center">
	</section>	
	</div>
	<div class="form">
		<section class="container">
			<header>Create an Account</header>
			<hr>
			<form action="#" class="patient-form">
				<div class="column">
					<div class="input-box">
						<label id="first-name">First Name</label>
						<input class="inputBox" id="name" type="text" placeholder="First name" required>
					</div>
					<div class="input-box">
						<label id="last-name">Last Name</label>
						<input class="inputBox" id="name" type="text" placeholder="Last name" required>
					</div>
				</div>

				<div class="column1">
					<div class="input-box">
						<label id="email">Email</label>
						<input class="inputBox" id="email" type="email" placeholder="Enter your email" required>
					</div>
					<div class="input-box">
						<label id="password">Password</label>
						<input class="inputBox" id="password" type="password" placeholder="Enter your password" required>
					</div>
				</div>

				<div class="column2">
					<div class="input-box">
						<label id="contact">Contact No.</label>
						<input class="inputBox" id="contact" type="contact" placeholder="09XXXXXXXXX" required>
					</div>
					<div class="input-box">
						<label id="address">Address</label>
						<input class="inputBox" id="address" type="text" placeholder="Full address" required>
					</div>
				</div>
				<div class="column3">
					<div class="input-box">
						<label id="age">Age</label>
						<input class="inputBox" id="age" type="age" placeholder="Your age" required>
					</div>
					<div class="input-box">
						<label id="gender">Gender</label>
						<select class="gender" id="dropdown">
							<option>Gender</option>
							<option>Female</option>
							<option>Male</option>
							<option>LGBTQIA+</option>
							<option>Prefer not to say</option>
						</select>
					</div>
					<div class="input-box">
						<label id="status">Status</label>
						<input class="inputBox" id="status" type="text" placeholder="Status" required>
					</div>
				</div>
				<div class="column4">
					<div class="input-box">
						<label id="dental-clinic">Dental Clinic</label>
						<input class="inputBox" id="dental-clinic" type="text" placeholder="Name of Dental Clinic" required>
					</div>
					<div class="input-box">
						<label id="profession">Profession</label>
						<select class="profession" id="dropdown">
							<option>Profession</option>
							<option>Dentist</option>
							<option>Dental Assistant</option>
							<option>Others</option>
						</select>
					</div>
				</div>

				<p>Signing up for Dent-Click account means you agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms of 
				Service.</a></p>

				<input id="submit" type="submit" name="submit" value="Sign Up">
			</form>
			
		</section>
		
	</div>
</body>
</html>