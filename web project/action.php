<html>

<head>

    <title>Cats</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
	<body>
		<div>
			Hello  <?php echo htmlspecialchars($_POST['firstname']); ?> <?php echo htmlspecialchars($_POST['lastname']); ?>. Thank you for submitting your form.<br>
			Please Confirm that all your information is correct:<br>
			Your date of birth is <?php echo htmlspecialchars($_POST['birthday']); ?>.<br>
			You are <?php echo (int)$_POST['age']; ?> years old.<br>
			You have <?php echo (int)$_POST['cat']; ?> cats.<br>
			Your prefered cat is <?php echo htmlspecialchars($_POST['catkind']); ?>.<br>
		</div>
		<div>
			<?php
			$out = (int)$_POST['timer'];
			$output =  `python3 led1.0.py $out`;
			echo "<div>$output</div>"; 
			?>
		</div>
	</body>
</html>
