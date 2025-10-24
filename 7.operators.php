
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operators</title>
</head>
<body>
    <?php

    $x = 10;
    $y = 5;

    // Arithmetic Operators

    echo "add : " . ($x + $y) . "<br>";
    echo "$x - $y = " . ($x - $y) . "<br>";
    echo "$x * $y = " . ($x * $y) . "<br>";
    echo "$x / $y = " . ($x / $y) . "<br>";
    echo "$x % $y = " . ($x % $y) . "<br><br>";

    /*
    Explanation:

$x + $y → addition

$x - $y → subtraction

$x * $y → multiplication

$x / $y → division

$x % $y → modulus (remainder)
    */


// Assignment Operators

$x = 10; // reset
echo "<b>Assignment Operators:</b><br>";

/*
<b> tag in HTML

<b> stands for bold.

Anything between <b> and </b> will appear bold on the web page.
*/

$a=$x += $y; 
echo $a."<br>";

$x = 10; // reset
$a = $x -= $y;
echo "x -= y => a = $a <br>";

$x = 10; // reset
$a = $x *= $y;
echo "x *= y => a = $a <br>";

$x = 10; // reset
$a = $x /= $y;
echo "x /= y => a = $a <br><br>";

// Increment / Decrement Operators
$x = 10; // reset
echo "<b>Increment / Decrement Operators:</b><br>";


$a = ++$x; // pre-increment
echo "Pre-Increment: a = $a<br>";

$a = $x++; // post-increment
echo "Post-Increment: a = $a<br>";

echo "After Post-Increment, x = $x<br>";


$a = $x--; // post-decrement
echo "Post-Decrement: a = $a<br>";
echo "After Post-Decrement, x = $x<br><br>";

// Comparison Operators
echo "<b>Comparison Operators:</b><br>";

echo "x == y : " . ($x == $y) . "<br>";
echo "x != y : " . ($x != $y) . "<br>";
echo "x > y : " . ($x > $y) . "<br>";
echo "x < y : " . ($x < $y) . "<br>";
echo "x >= y : " . ($x >= $y) . "<br>";
echo "x <= y : " . ($x <= $y) . "<br><br>";
/*

💡 Note:

true → prints as 1

false → prints as empty
*/

// Logical Operators
echo "<b>Logical Operators:</b><br>";

echo "x && y : " . ($x && $y) . "<br>";  // AND
echo "x || y : " . ($x || $y) . "<br>";  // OR
echo "x xor y : " . ($x xor $y) . "<br>"; // XOR
echo "!x : " . (!$x) . "<br><br>";       // NOT

/*
💡 Explanation:

&& → true if both are true

|| → true if any one is true

xor → true if only one is true, not both

! → reverses the boolean value`
*/


    ?>
</body>
</html>