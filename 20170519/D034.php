<?php
//だめ
    $input_lines = trim (fgets(STDIN));
    //echo "$input_lines";

    echo 21 % $input_lines;
?>


<?php
//できた！70点
    $input_lines = trim (fgets(STDIN));
    //echo "$input_lines";

    for ( $i = 1; $i < 22; $i++ ){
        if ( 21 / $input_lines == 0 ){
            echo $i;
            break;
        }
        else {
            echo 21 % $input_lines;
            break;
        }
    }
?>
