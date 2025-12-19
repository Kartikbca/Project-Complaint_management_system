<?php include "../config/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
<body>

<header><h1>Admin Panel</h1></header>

<div class="container">
<?php
$q=mysqli_query($conn,"SELECT * FROM complaints");
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