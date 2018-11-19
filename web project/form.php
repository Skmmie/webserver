<html>

<head>

    <title>Cats</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
	<script>
		function validateform() {

			var x = document.forms['catform']['age'].value;

			if (x < 18) {
				alert("Must be over the age of 18")
				return false;
				}
			if (isNaN(x)){
				alert("Age must be a numeric value!")
				return false;
				}
			return true;
			}
    </script>
    
</head>

    <body>
        <div class="topnav">
            <a href="index.php">Home</a>
            <a href="catbreed.php">Breeds</a>
            <a href="gallery.php">Cat Gallery</a>
            <a href="form.php">Form</a>
            <a href="about.php">About</a>
           </div>
    </body>
 
    <form name="catform" action="action.php" onsubmit="return validateform();" method="post">
        First name:<br>
        <input type="text" name="firstname" required><br>
        Last name:<br>
        <input type="text" name="lastname" required><br>
        How old are you? (Must be 18 or older):<br>
        <input type="text" name="age" required><br>
        Birthday:<br>
        <input type="date" name="birthday" required><br>
        How many cats do you own?:<br>
        <div class="slidecontainer">
                <input name="cat" type="range" min="0" max="100" value="0" class="slider" id="myRange">
                <p>Value: <span id="demo"></span></p>
              </div>
              <script>
                    var slider = document.getElementById("myRange");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;
                        
                    slider.oninput = function() {
                        output.innerHTML = this.value;
                        }
                </script>
        Which kind of cat do you prefer?:<br>
        <input type="radio" name="catkind" value="with hair">with hair<br>
        <input type="radio" name="catkind" value="no hair">no hair<br>
        <input type="submit" value="submit">
    </form>

</html>
