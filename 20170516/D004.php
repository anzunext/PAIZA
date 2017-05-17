<?php
/*$input_lines = fgets ( STDIN );
echo "Hello ";
for ( $s = 1; $s <=3; $s++ ){
    echo "s_" . $s;
    if ( $s <= 2 ){
        echo ",";
    }
    else {
        echo ".";
    }
}*/

//できたやつ
//だめらしい
/*echo "Hello ";
$input_lines = fgets ( STDIN );
$name = ["Kino" , "Noda" , "Kirishima"];
for ( $s = 0; $s <=2; $s++ ){
    echo $name[$s];
    if ( $s <= 1 ){
        echo ",";
    }
    else {
        echo ".";
    }
}*/

$input_lines = trim ( fgets ( STDIN ) );
echo "Hello ";
for ( $i = 0; $i < $input_lines; $i++ ){
    $name = trim ( fgets ( STDIN ) );
    if ( $i < $input_lines-1 ){
        echo $name . ",";
    }
    else {
        echo $name . ".";
    }
}
?>


<?php
//できてないやつ
echo " HEllo";
$input_lines = fgets ( STDIN );
$name = ["Kino" , "Noda" , "Kirishima"];
for ( $s = 1; )
?>
