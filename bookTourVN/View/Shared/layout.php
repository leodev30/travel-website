<?php if (session_status() == PHP_SESSION_NONE) //if there's no session_start yet...
    session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <?php echo "<link rel='stylesheet' href='".WEBROOT."Content/main1.css'>";?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div>
	<?php
		require("header.php");
	?>
	</div>
	<div>
	<?php
		echo $content_for_layout;
	?>
	</div>
	<div>
	<?php
		require("root.php");
	?>
	</div>
</body>
</html>