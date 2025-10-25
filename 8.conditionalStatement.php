

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// if statement
$age = 20;

if ($age >= 18) {
    echo "You are eligible to vote. .<br>";
}

// if - else

$Age = 16;  

if ($Age >= 18) {
    echo "You are eligible to vote.<br>";
} 
else {
    echo "You are not eligible to vote.<br>";
}


// if-elseif-if

$marks = 85;  // you can change this value to test

if ($marks >= 90) {
    echo "Grade: A+<br>";
}
elseif ($marks >= 75) {
    echo "Grade: A<br>";
}
elseif ($marks >= 60) {
    echo "Grade: B<br>";
}
elseif ($marks >= 40) {
    echo "Grade: C<br>";
}
else {
    echo "Fail<br>";
}
?>





</body>
</html>