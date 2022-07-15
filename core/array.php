<?php
    $arr = array(34,23,44,2,6,45,5,7,54,33,22,2);

    print_r($a);

$res = 0;

foreach($arr  as $a){
    if($a>$res)
    {
        $res = $a;
    } 
}

echo "<br> Greatest value in this array is  = " . $res  . "<br>";


for($i=0; $i<count($arr);$i++)
{
    for($j=$i+1; $j<count($arr); $j++)
    {
        if($arr[$i] > $arr[$j] )
        {
            $arr[$i] = $arr[$i] + $arr[$j];
            $arr[$j] = $arr[$i] - $arr[$j];
            $arr[$i] = $arr[$i] - $arr[$j];
        }
    }
}
echo "<pre>";
print_r($arr);
?>