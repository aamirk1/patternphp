<?php
//pattern type 1
$n = 5;
for ($i=0; $i <= $n ; $i++) { 
    for ($j=0; $j <= $n ; $j++) { 
        if ($i == $j) {
            echo "*";
        }else {
            echo "&nbsp;&nbsp;&nbsp;";
        }
        
    }
    echo "<br />";
}
echo "<br /><br />";

//pattern type 2
$m = 5;
for ($i=0; $i <= $m ; $i++) { 
    for ($j=0; $j <= $m ; $j++) { 
        if ($i == $j) {
            echo " * ";
        }else {
            echo " 0 ";
        }
    }
    echo "<br />";
}
echo "<br /><br />";

//pattern type 3
$k = 5;
for ($i=1; $i <= $k ; $i++) { 
    for ($j=1; $j <= $k ; $j++) { 
        if ($i == $j || $i+$j == $k+1) {
            echo "*";
        }else {
            echo "&nbsp;&nbsp;&nbsp;";
        }
        
    }
    echo "<br />";
}
echo "<br /><br />";

//pattern type 4
$k = 5;
for ($i=1; $i <= $k ; $i++) { 
    for ($j=1; $j <= $k ; $j++) { 
        if ($j == $i || $i+$j == $k+1) {
            echo " * ";
        }else {
            echo " # ";
        }
        
    }
    echo "<br />";
}

?>