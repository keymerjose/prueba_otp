
<?php
$a = array(
    array(
        9, 0, 1
    ),
    array(
        0, 8, 0
    ),
    array(
        2, 0, 7
    )
);
echo '<pre>';
print_r($a);
echo '<pre>';

$suma1 = 0;
$suma2 = 0;
$dif = 0;
$c = 0;

for($b = 0; $b < count($a); $b++){
    $suma1 += $a[$b][$c];
    $c++;    
}

$c = count($a);
for($b = 0; $b < count($a); $b++){
    $suma2 += $a[$b][($c-1)];
    $c--;
}

echo 'Suma 1: '.$suma1."\n";
echo 'Suma 2: '.$suma2."\n";
$dif = abs($suma1 - $suma2);
echo 'Diferencia: '.$dif;
?>
