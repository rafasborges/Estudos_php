<?php

$contador = 0;
while ($contador < 100){
    $contador = $contador + 1;
    if ($contador %2 ==1 or $contador== 1) {
    echo"#$contador".PHP_EOL; 
    }
}