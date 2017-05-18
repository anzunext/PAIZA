<?php
    $il = fgets(STDIN);
    //echo "$input_lines";
    $il1 = fgets(STDIN);
    //echo "$input_lines1";
    $il2 = fgets(STDIN);
    //echo "$input_lines2";
    $il3 = fgets(STDIN);
    //echo "$input_lines3";
    $il4 = fgets(STDIN);
    //echo "$input_lines4";
    $il = [$input_lines , $input_lines1 , $input_lines2 , $input_lines3 , $input_lines4];
    echo (min($il[0] , $il[1] , $il[2] , $il[3] , $il[4]));

?>
<?php
    /*$il = fgets(STDIN);
    //echo "$il";
    $il1 = fgets(STDIN);
    //echo "$il1";
    $il2 = fgets(STDIN);
    //echo "$il2";
    $il3 = fgets(STDIN);
    //echo "$il3";
    $il4 = fgets(STDIN);
    //echo "$il4";*/
    $num = array ($il,$il1,$il2,$il3,$il4);
    echo $num[0];

?>

<?php
    //教えてもらってできた！
    $il = trim(fgets(STDIN));
    //echo "$il";
    $il1 = trim(fgets(STDIN));
    //echo "$il1";
    $il2 =trim(fgets(STDIN));
    //echo "$il2";
    $il3 = trim(fgets(STDIN));
    //echo "$il3";
    $il4 = trim(fgets(STDIN));
    //echo "$il4";

    $a = array($il,$il1,$il2,$il3,$il4);

    echo max($a)."\n".min($a);

    /*max($il,$il1,$il2,$il3,$il4);

    //explode("\n");
    echo
    min($il,$il1,$il2,$il3,$il4);*/
?>
