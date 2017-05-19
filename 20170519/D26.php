<?php
//これはできない
    $il1 = trim ( fgets ( STDIN ) );
    $il2 = trim ( fgets ( STDIN ) );
    $il3 = trim ( fgets ( STDIN ) );
    $il4 = trim ( fgets ( STDIN ) );
    $il5 = trim ( fgets ( STDIN ) );
    $il6 = trim ( fgets ( STDIN ) );
    $il7 = trim ( fgets ( STDIN ) );
    $n = [$il1,$il2,$il3,$il4,$il5,$il6,$il7];
    //echo $n[];

    $a = "yes";
    $b = "no";

    for ( $i = 0; $i < 7; $i++ ){
        echo $n[$i];
        if ( $n[$i] = $a ){
            echo 1;
        }
    }
        //echo $n[$i];
        //}}
/*        else {
            $d = 1;
        }
    }
    echo $c + $d;
  */
?>
<?php
//教えてもらってできた
    $cnt = 0;
    for ( $i = 0; $i < 7; $i++ ){
        $input_lines = trim ( fgets ( STDIN ) );
        if ( $input_lines == "no" ){
            $cnt++;
        }
    }
    echo $cnt;
?>
