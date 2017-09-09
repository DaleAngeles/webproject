<!DOCTYPE html>
<html lang="en">
<head>
<title>Hello World in GitHub</title>

<meta name="viewport" content="width=device-width; initial-scale=1.0" />
<meta name="author" content="Team Bah" />
<meta name="description" content="The description of website" />

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" />
<link href="bootstrap/css/custom.css" rel="stylesheet" />

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid">
	<div class="row" id="header">
		<div class="col-md-12">
			<h1>New Controller</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php
				for($ctr=1;$ctr<=6;$ctr++){
					echo "<h$ctr>Hello World</h$ctr> ";
				}
			?>
		</div>
	</div>
</div>

</body>
</html>