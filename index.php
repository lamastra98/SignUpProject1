<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SIGN UP</title>
	<link rel="stylesheet" href="styles/styles.css">
</head>

<body>
<header>
<h1>To-Do List Application</h1>
<h2>Sign up below!</h2>
</header>

<main>
	<form>
		<label for="firstName">First Name</label> <br>
		<input type="text" name ="firstName" value=""> <br>

		<label for="lastName">Last Name</label> <br>
		<input type="text" name ="lastName" value=""> <br>

		<label for="eMail">E-Mail</label> <br>
		<input type="text" name ="eMail" value=""> <br>

		<label for="phoneNumber">Phone Number</label> <br>
		<input type="text" name ="phoneNumber" value=""> <br>

		<label for="birthday">Birthday</label> <br>
		<input type="text" name ="birthday" value=""> <br>

		<label for="gender">Gender</label> <br>
		<select name="gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			<option value="Other">Other</option>
		</select> <br>

		<input type="submit" name="submit" value="Submit">

	</form>
</main>

<footer>
	<p>Nina LaMastra &copy; 2018</p>
</footer>
</body>
</html>