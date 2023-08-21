<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<style>
	body {
  background-color: #f5f5f5;
  font-family: Arial, sans-serif;
}

h2 {
  text-align: center;
}

form {
  width: 400px;
  margin: 0 auto;
  background-color: #ffffff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

input[type="checkbox"] {
  display: inline-block;
  margin-right: 10px;
}

input[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #ffffff;
  font-size: 16px;
  font-weight: bold;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0069d9;
}

input[type="submit"]:active {
  background-color: #0000;
  box-shadow: none;
  outline: none;
}

</style>
<body>
	<h2>Login</h2>
	<form method="POST" action="{{ route('home') }}">
		
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required autofocus><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<input type="checkbox" name="remember" id="remember">
		<label for="remember">Remember Me</label><br><br>
        <a href="signupPage.html">No account ? sign-up</a>
		<input type="submit" value="Login">
        <a href="forgotPassword.html">Forgot password</a>      
	</form>
</body>
</html>