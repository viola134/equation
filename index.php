<?php
$a = (rand(-10, 10));
$b = (rand(-10, 10));
$c = (rand(-10, 10));
echo ( $a . "x^2n +" . $b .  "x + ". $c  . '=0');
$d = sqrt($b*$b-4*$a*$c);
if  ($d > 0) {
    $x1 = ((-$b - $d)/2*$a);
    $x2 = ((-$b + $d)/2*$a);
    echo ("x1=".$x1);
    echo ("x2=".$x2);
}
elseif ( $d == 0 ){
    $x = ((-$b)/2*$a);
    echo ("x=".$x);
}
elseif ($d<0){
    echo "<span style= \"color:red;\"> Нет решений! </span>";
}
