<?php

$g=22;
class gv
{
function fun()
{
     $g=99;
     global $g;
     echo $g;
}
    
};
$obj=new gv();
$obj->fun();
?>