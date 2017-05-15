<?php
//1
<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $a = explode ( " " , $input_lines );
    if ( $a[0] == $a[1] ){
        echo "eq";
    }
    elseif ( $a[0] > $a[1] ){
        echo $a[0];
    }
    else {
        echo $a[1];
    }
?>
