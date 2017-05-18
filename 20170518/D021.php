<?php
//できた！
    $il1 = trim ( fgets ( STDIN ) );
    //echo $il1;
    $il2 = trim ( fgets ( STDIN ) );
    //echo "$il2";
    $s = $il1;
    $t = $il2;
    //echo $s;

    if ( $s === $t ){
        echo "Yes";
    }
    elseif ( $s !== $t ){
        echo "No";
    }
?>
