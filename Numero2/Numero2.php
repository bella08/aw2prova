<?php
$N = $_POST['txt'];
$K = $_POST['txtK'];
$X = 1;
$Z = 2;
$array = array();

for ($X = 0;$X < $K;$X++)
{

    $array[] = $Z * $N;
    $Z = $Z + 1;

}
print_r($array);
?>
