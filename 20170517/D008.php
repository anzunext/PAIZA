<?php
    //60点
    $input_lines = fgets ( STDIN );
    //echo "$input_lines";
    if ( $input_lines ){
        echo "odd";
    }
    elseif ( $input_lines+1 ){
        echo "even";
    }

?>
