<?php include "../config/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<header><h1>Register Complaint</h1></header>

<div class="container">
<form method="post">
<input name="subject" placeholder="Complaint Subject" required>
<textarea name="description" placeholder="Complaint Description"></textarea>
<button name="submit">Submit Complaint</button>
</form>

<?php
if(isset($_POST['submit'])){
$uid=$_SESSION['user_id'];
$subject=$_POST['subject'];
$desc=$_POST['description'];
mysqli_query($conn,"INSERT INTO complaints(user_id,subject,description) VALUES('$uid','$subject','$desc')");
echo "<p style='color:green'>Complaint Registered Successfully</p>";
}
?>
</div>

</body>
</html>