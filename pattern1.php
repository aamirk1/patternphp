<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// patten type 1
for ($i=0; $i <= 5; $i++) { 
    for ($j=1; $j<$i; $j++){
        echo " * ";        
    }
    echo "<br />";    
}

// patten type 2
for ($i=0; $i <= 5; $i++) { 
    for ($j=0; $j < $i; $j++) { 
        echo " $i ";
    }
    echo "<br/>";
}

// patten type 2
for ($i=0; $i <=6; $i++) { 
    for ($j=1;$j<$i;$j++){
        echo " $j ";
    }
    echo "<br />";
}

?>
</body>
</html>