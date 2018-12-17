<html>

<head>

    <title>Cats</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
          
</head>

    <body>
        <div class="topnav">
            <a href="index.php">Home</a>
            <a href="catbreed.php">Breeds</a>
            <a href="gallery.php">Cat Gallery</a>
            <a href="form.php">Form</a>
            <a href="about.php">About</a>
            <a href="script.php">Script</a>
           </div>
    </body>
 
	<?php
	$output =  `python3 led1.0.py`;
	echo "<div>$output</div>"; 
	?>

</html>
