<?php
//35を参考にできた！
    $input_lines = trim ( fgets ( STDIN ) );
    //echo "$input_lines";

    $str = str_replace ( "at" , "@" , $input_lines );
    echo $str;
?>
