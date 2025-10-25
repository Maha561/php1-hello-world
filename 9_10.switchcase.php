
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>

<?php

$day = "Tuesday";

switch ($day) {
    case "Monday":
        echo "Today is Monday<br>";
        break;
    case "Tuesday":
        echo "Today is Tuesday<br>";
        break;
    case "Wednesday":
        echo "Today is Wednesday<br>";
        break;
    default:
        echo "It’s another day<br>";
}

?>
    
</body>
</html>
