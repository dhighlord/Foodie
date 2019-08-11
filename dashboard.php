<?php

require('db.php'); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard | Foodie</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h1 style="color:orange;">Foodie Dashboard</h1>

<p><a href="index.php">Home</a><p>
<br />
<p><a href="insert.php">Insert New Record</a></p>
<p><a href="insertItem.php">Insert Item</a></p>
<br /><div style="text-align: right;">
<p><a href="genRestaurant.php">Generate Restaurant</a></p>
<p><a href="genLocation.php">Generate Location</a></p>
<p><a href="genItem.php">Generate Item</a></p></div>
<!-- <p><a href="view.php">View Records</a><p> -->

</div>
</body>
</html>
