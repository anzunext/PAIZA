<?php
//ここから
    $input_lines = trim ( fgets ( STDIN ) );
    //echo "$input_lines";

    /*foreach ( range ( 'A' , 'Z' as $e ) ){
        echo $e;
    }*/
    for ( $i = 0; $i < 26; $i++ ){
        $c = chr ( ord ( 'A' ) +$i );
        echo $c;

    }
?>
