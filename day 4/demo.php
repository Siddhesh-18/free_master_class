<?php
class Demo 
{
    function a($a,$b)
    {
    echo $a+$b;
    }
    function b($a,$b)
    {
    echo $a-$b;
    }
    function c($a,$b)
    {
    echo $a*$b;
    }    
}

$data = new Demo();
$data->c(20,10);
