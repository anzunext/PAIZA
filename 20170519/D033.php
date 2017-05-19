<?php
    $input_lines = trim ( fgets ( STDIN ) );
    //echo "$input_lines";

    $name = explode ( " " , $input_lines );
    $name1 = substr ( $name[0] , 0 , 1 );
    $name2 = substr ( $name[1] , 0 , 1 );
    echo $name1 . "." . $name2;
?>
