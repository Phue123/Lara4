<?php

function fibonanci($n)
{
if($n==0 || $n==1)
{
    return $n;
}else
{
 return fibonanci($n-1)+fibonanci($n-2);
}
}

$result=fibonanci(3);
echo $result;
?>