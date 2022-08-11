<?php
$str = "AAMIR";
$count = strlen($str);
for($i=0; $i<$count; $i++){
    for($j = 0; $j<=$i;$j++){
        echo "$str[$j]";
    }
    echo "<br />";
}
echo "<br /><br />";
for($i = $count;$i>=0; $i--){
    for($j = 0; $j<$i; $j++){
        echo "$str[$j]";
    }
    echo "<br />";
}

?>