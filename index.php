<?php
$first_lead;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Finding Jobs</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<form method="post">
		<input type="text" id="first_lead" name="first_lead" >
		<input type="submit"> 
	</form>
<?php  
$first_lead = $_POST['first_lead'];
?>

	<?= $first_lead ?>
</body>
</html>
