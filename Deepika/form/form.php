<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Taprobane Tours-Sri Lanka</title>
<link rel="stylesheet" href="form.css">
</head>
<body>

<form class = "formBox" method="post" action="form.php">
<h4> ADD NEW PACKAGES</h4><br/><br/>
<?php include('errors.php')?>
Admin ID:
<input type="text" name="id" ><br/><br/>
Package name:
<input type="text" name="name" ><br/><br/>
Upload photos:
<input type="file" name="image"><br/></br>
Package details:<br>
<textarea name="details" rows="8" cols="30"></textarea><br/><br/>
Category:
<select name="category">
	<option value="Tours">Tours</option>
	<option value="Historical">Historical</option>
	<option value="Excursion">Excursion</option>
</select>
<br/><br/>
Locations:
<select name="location">
	<option value="Anurathapura">Anuradhapura</option>
	<option value="Galle">Galle</option>
	<option value="Trincomalee">Trincomalee</option>
	<option value="Jaffna">Jaffna</option>
	<option value="Kandy">Kandy</option>
</select>
<br/><br/>
<button class="button" type="submit"  href="/">Submit</button>
</form>

<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br>

</body>
</html>