
<?php
//できない
    $input_lines = trim ( fgets ( STDIN ) );
    //echo "$input_lines";
    //>11 km
    $il = explode ( " " , $input_lines );
    //$il[0]=11 $il[km]


    $il[1] = 10**6;
    echo $il[0]*$il[1];
    //for ( $i = 10; $i < $i**6; {$i**6}++ )
?>
<?php
    $input_lines = trim ( fgets ( STDIN ) );
    //echo "$input_lines";
    $il = explode ( " " , $input_lines );

    for ( $i = 1; $i <= 3; $i++ ){
        echo 10**$i;
}

    //echo $il[0]*$il[1];

?>
