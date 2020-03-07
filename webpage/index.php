<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
	<h1>Registration Form</h1>
	<p>
		This form validates user input and then displays "Thank You" page.
	</p>
	<hr />
	<h2>Please, fill below fields correctly</h2>
	<form action="thank_you.php" method="post">
		<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name">
			</dd>
			<dt>Email</dt>
			<dd>
				<input type="text" name="email">
			</dd>
			<dt>Username</dt>
			<dd>
				<input type="text" name="username">
			</dd>
			<dt>Password</dt>
			<dd>
				<input type="password" name="password">
			</dd>
			<dt>Confirm Password</dt>
			<dd>
				<input type="password" name="confirm_password">
			</dd>
			<dt>Date of Birth</dt>
			<dd>
				<input type="text" name="date_of_birth">
			</dd>
			<dt>Gender</dt>
			<dd>
				Male<input type="radio" name="gender" value="male">
				Female<input type="radio" name="gender" value="female">
			</dd>
			<dt>Marital Status</dt>
			<dd>
				Single <input type="radio" name="marital_status" value="single">
				Married <input type="radio" name="marital_status" value="married">
				Divorced <input type="radio" name="marital_status" value="divorced">
				Widowed <input type="radio" name="marital_status" value="widowed">
			</dd>
			<dt>Address</dt>
			<dd>
				<input type="text" name="address">
			</dd>
			<dt>City</dt>
			<dd>
				<input type="text" name="city">
			</dd>
			<dt>Postal code</dt>
			<dd>
				<input type="text" name="postal_code">
			</dd>
			<dt>Home Phone</dt>
			<dd>
				<input type="text" name="home_phone">
			</dd>
			<dt>Mobile Phone</dt>
			<dd>
				<input type="text" name="mobile_phone">
			</dd>
			<dt>Credit Card Number</dt>
			<dd>
				<input type="text" name="credit_card_number">
			</dd>
			<dt>Credit Card Expiry Date</dt>
			<dd>
				<input type="text" name="credit_card_expiry_date">
			</dd>
			<dt>Monthly Salary</dt>
			<dd>
				<input type="text" name="monthly_salary">
			</dd>
			<dt>Web Site URL</dt>
			<dd>
				<input type="text" name="web_site_url">
			</dd>
			<dt>Overall GPA</dt>
			<dd>
				<input type="text" name="overall_gpa">
			</dd>
		</dl>
	</form>
	</body>
</html>
