<?php

// patter type 1
for ($i=5; $i >=1 ; $i--) { 
    for ($j=1; $j <=$i ; $j++) { 
        echo " * ";
    }
    echo "<br />";
}
echo "<br /><br />";
// patter type 2

for ($i=5; $i >=1; $i--) { 
    for ($j=1; $j <= $i ; $j++) { 
        echo " $i ";
    }
    echo "<br/>";    
}
echo "<br /><br />";
// patter type 3
for ($i=5; $i >=1 ; $i-- ){ 
    for ($j=1; $j <=$i ; $j++) { 
        echo " $j ";
    }
    echo "<br />";
}

?>