<!-- 15.Определить количество различных делителей целого числа N.  -->
<?php

require_once "functions.php";
$N = 5832700;
$k = 1;
$i = 0;
$count = 0;
while ($i < $N) {
    if (fmod($N, $k) == 0) {
        $count++;
    }
    $k++;
    $i++;
}
pr($count);

?>