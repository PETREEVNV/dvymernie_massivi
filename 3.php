<?php
$min=0;
$arr = array();
echo '<table text-align = "center">';
print ('<tr>');
for ($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        
        $arr[$i][$j] = rand(-10,10);
        print ('<td>' . $arr[$i][$j] . '</td>');
    }
    print ('</tr>');
}
echo '</table>';
for($x=0;$x<5;$x++){
    $min = 1000;
    for($i = 0; $i < 5; $i++)
    {
        if( $arr[$i][$x] < $min)
            $min = $arr[$i][$x];
    }
    echo('Наименьший элемент ' . ($x+1) . ' столбца = ' . $min . '<br>');
}
?>