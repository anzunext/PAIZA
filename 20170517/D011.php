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
<?php
//できた！
    $input_lines = trim ( fgets ( STDIN ) );
    //echo $input_lines;
    $a = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X',
        'Y','Z'];
    for ( $i = 0; $i < 26; $i++ ){
        //echo $a[$i];
        if ( $a[$i] == $input_lines ){
            echo ++$i/*または+1*/;
        }
    }
?>
