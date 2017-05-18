<?php
/*
    $input_lines = trim ( fgets ( STDIN ) );
    //echo "$input_lines";
    for ( $i = -100; $i <= 100; $i++ ){
    //    echo $i;
        if ( $i < 0 ){
            $j = $i * "-1";
        }
    }
    $input_lines = trim ( fgets ( STDIN ) );
    //echo "$input_lines";
    for ( $i = -100; $i <= 100; $i++ ){
    //    echo $i;
        if ( $i < 0 ){
            $j = $i * "-1";
        //    echo $j;
        }
        else ( $j == $input_lines ){
            echo $j;
        }
    }
*/
//28点
    $input_lines = trim ( fgets ( STDIN ) );
    //echo "$input_lines";
    if ( $input_lines < 0 ){
        $i = $input_lines * -1;
    }
    echo $i . "\n";
?>


<!-- abs(数字)　→ 絶対値が帰ってくる -->
<!-- $a = abs($b); //aにbの絶対値が入る。  -->
