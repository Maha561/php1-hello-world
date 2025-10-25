
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//1️⃣ Indexed Array

echo "Indexed Array <br>";

$fruits = array("Apple", "Banana", "Mango");

// Access elements

echo $fruits[0] . "<br>"; // Apple
echo $fruits[1] . "<br>"; // Banana
echo $fruits[2] . "<br>"; // Mango

// Loop through using foreach

echo " accessing through foreach <br>";

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

echo "2️⃣ Associative Array <br>";

$age = array("Alice" => 25, "Bob" => 30, "Charlie" => 28);

// Access element
echo "Alice is " . $age["Alice"] . " years old.<br>";

// Loop through using foreach

// Loop through using foreach
foreach ($age as $name => $years) {
    echo "$name is $years years old.<br>";
}

/*
foreach automatically loops through all elements.

$name → key

$years → value

 */
echo "3️⃣ Multidimensional Array <br>";

$students = array(
    array("Alice", 25),
    array("Bob", 30),
    array("Charlie", 28)
);

// Access element
echo $students[0][0] . " is " . $students[0][1] . " years old.<br>";




?>
    
</body>
</html>