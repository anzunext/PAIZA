<?php
/*  $input_lines = fgets(STDIN);
    for ( $n = 1; $n <= 9; $n++ ){
        echo " " . $n * $input_lines;
    }*/
//ここまでできた
$input_lines = fgets ( STDIN );
for ( $n = 1; $n <= 9; $n++ ){
    echo $n * $input_lines;
    if ( $n <= 8 ){
        echo " ";
    }
}

?>
