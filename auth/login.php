<?php include "../config/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<header>
<h1>User Login</h1>
</header>

<div class="container">
<form method="post">
<input name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>

<?php
if(isset($_POST['login'])){
$email=$_POST['email'];
$pass=$_POST['password'];
$q=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
$user=mysqli_fetch_assoc($q);
if($user && password_verify($pass,$user['password'])){
$_SESSION['user_id']=$user['id'];
$_SESSION['role']=$user['role'];
header("Location: ../user/dashboard.php");
}else{
echo "<p style='color:red'>Invalid Login</p>";
}
}
?>
</div>

</body>
</html>