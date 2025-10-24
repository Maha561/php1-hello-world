
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        exploring all datatypes
    </h2>
<?php

// Integer
$var = 25;

//float
$a=12.3;

// String
$b="hello php";

// Boolean
$c=true;

// array
$colours = array("red","yellow","green");

// class

class Car {

    public $model;

    function setModel($m){
        $this->model = $m;
    }

     function getModel(){
        return $this->model;
    }

}


// object - creating

$myCar = new Car();

// Set property
$myCar->setModel("BMW");

// Display object property
echo "Object value (Car model): " . $myCar->getModel() . "<br>";

// Null

$d=null;

// printing all values

echo " Integer value : $var <br>";

echo "Float value: $a <br>";

echo "String value: $b <br>";

echo "Boolean value: $c <br>";

echo "Array values: ";
print_r($colours);
echo "<br>";

//print_r() → prints all array elements in a readable format.

/*
💡 Why:

$colours is an array.

print (or echo) can only display strings or numbers, not arrays or objects.

PHP will give a warning like: Array to string conversion


✅ That’s why we use:

print_r($colours) → prints all array elements in a readable way.

var_dump($colours) → prints type + value (more detailed, used in debugging).

*/

?>
</body>
</html>