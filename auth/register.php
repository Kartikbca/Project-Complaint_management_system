<?php include "../config/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<header>
<h1>User Registration</h1>
</header>

<div class="container">
<form method="post">
<input name="name" placeholder="Full Name" required>
<input name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="register">Register</button>
</form>

<?php
if(isset($_POST['register'])){
$name=$_POST['name'];
$email=$_POST['email'];
$pass=password_hash($_POST['password'],PASSWORD_DEFAULT);
mysqli_query($conn,"INSERT INTO users(name,email,password) VALUES('$name','$email','$pass')");
echo "<p style='color:green'>Registered Successfully</p>";
}
?>
</div>

</body>
</html>