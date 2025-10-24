<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$var1 = "114";

echo "before conversion var1 is of type : ".gettype($var1)."<br>";

// Now let’s convert $var1 to integer using settype().

settype($var1,"integer");

echo "After conversion, var1 is of type: " . gettype($var1) . "<br>";

//Type Casting (temporary conversion)

$data = "98.6 degrees"; // string

echo "Before casting, data is of type: " . gettype($data) . "<br>";

echo "After casting to integer: " . (int)$data . "<br>";
echo "Original data type after casting: " . gettype($data) . "<br>";


?>
    
</body>
</html>