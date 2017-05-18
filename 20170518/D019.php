<?php
    $input_lines = fgets(STDIN);
    //echo "$input_lines";
    $a = explode ( " " , "$input_lines" );
    //echo $a[0];
    $b = $a[0];
    $c = $a[1];
    //echo $b;
    //echo $c;

    for ( $i = 0; $i < $c; $i++ ){
        //echo $i;
        if ( $b[$i] == $c-1 ){
            echo $b;
        }
    }

?>
<?php
//できた！90点
    $input_lines = fgets(STDIN);
    //echo "$input_lines";
    $a = explode ( " " , "$input_lines" );
    //echo $a[0];
    $b = $a[0];
    $c = $a[1];
    //echo $b;
    //echo $c;

    for ( $i = 0; $i < $c; $i++ ){
        //echo $b[$i];
        if ( $b[$i] == $b[$i[$c-1]] ){
            echo $b[$c-1];
        }
    }

?>
