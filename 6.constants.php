
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constant</title>
</head>
<body>

<?php

// Create a constant


define("GREETING", "Welcome to PHP!");

// Print the constant

echo GREETING."<br>";

// Function to show constant is global
function showGreeting() {
    echo GREETING . "<br>"; // constants are automatically global
}

showGreeting(); // call the function

// Case-insensitive constant

define("TUTORIALS", "www.deitel.com", true);

// Can access in any case

//echo "Learn PHP from " . tutorials . "<br>"; // lowercase works
// this will show a warning msg


echo "Learn PHP from " .TUTORIALS  . "<br>"; // this is the right form


?>
    
</body>
</html>