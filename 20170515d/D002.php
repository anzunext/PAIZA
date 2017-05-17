<?php
//1
/*$num = 1000
 for ( $i = 0; $i > 1001; $i++ );

echo $a < $b;
echo $a > $b;

echo $a = $b = "eq";
*/
//ここまで自分で考えた

$input_lines = trim ( fgets ( STDIN ) );
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
