<?php 

$message = 'Hello Codeup';
$showMessage = true;
$username = "bcards";

?>

<html>
<head>
	<title>Codeup!</title>
		
</head>
<body>

	<h1><?php echo $message; ?></h1>

			
			<?php if($showMessage){ ?>
				<h1>Hello there <?php echo $username; ?></h1>
			<?php } else { ?>
				<h1>Sorry no message...</h1>
			<?php }; ?> 

&copy: <?echo date('Y'); ?>
</body>
</html>

