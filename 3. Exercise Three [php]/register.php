<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">
<title>Contact Form</title>
<link rel="stylesheet" href="css/styles.css">

</head>

<body>

<form method="POST" action="server.php">
<h1>Account Register: </h1>
<label for="name"> Name: 
<input type="text" name="name" id = "name"> <br/>
</label>

<label for="lastname"> Surname: 
<input type="text" name="lastname" id = "lastname"> <br/>
</label>

<label for="email"> Email: 
<input type="email" name="email" id = "email"> <br/>
</label>

<label for="password"> Password: 
<input type ="password" name="password" id = "password"> <br/>
</label>

<label for="confpassword"> Confirmation: 
<input type = "password" name="confirmation" id = "confirmation"> <br/>
</label>

<button type="submit">Send</button>

</form>

</body>

</html>