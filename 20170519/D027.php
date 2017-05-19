<?php
    $input_lines = fgets(STDIN);
    //echo "$input_lines";

    $total = 0;
    for ( $i = 1; $i <= $input_lines; $i++ ){
        $total = $total + $i;
    }
    echo $total;
?>
