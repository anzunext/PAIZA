<?php
    //できた！
    $input_lines = trim ( fgets ( STDIN ) );
    //echo "$input_lines";
    $n = explode( " " , $input_lines );
    //echo $n[0];
    echo $n[1]-$n[0];
?>
