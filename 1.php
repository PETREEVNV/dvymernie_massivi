<?php
$max = 0;
$arr = array();
for ($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        $arr[$i][$j] = rand(-10,10);
        print ($arr[$i][$j] . ' ');
        if ($arr[$i][$j]>$max) $max = $arr[$i][$j];
    }
    print ('<br>');
}
print ('Наибольший элемент двумерного массива: ' . $max);
?>