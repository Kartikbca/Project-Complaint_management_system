<?php include "../config/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<header><h1>My Complaints</h1></header>

<div class="container">
<?php
$uid=$_SESSION['user_id'];
$q=mysqli_query($conn,"SELECT * FROM complaints WHERE user_id='$uid'");
while($c=mysqli_fetch_assoc($q)){
echo "<div class='card'>
<b>{$c['subject']}</b>
<span class='status'>{$c['status']}</span>
<p>{$c['description']}</p>
</div>";
}
?>
</div>

</body>
</html>