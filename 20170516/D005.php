<?php
    /* $input_lines = trim ( fgets( STDIN ) );
    $il = explode ( " " , $input_lines );
    for ( $i = $il[0]; $i <//ここ10回にしたいのにできないの
     ; $i + $il[1] ){
        echo $i;
    }
*/


$input_lines = trim ( fgets( STDIN ) );
$il = explode ( " " , $input_lines );
for ( $i = $il[0]; $i < 9; $i++  ){
    echo $i * $il[1] + $il[0] . " ";
}
if ( $i = 9 ){
    echo $i * $il[1] + $il[0];
}
?>
