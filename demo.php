<?php
class yash
{
    public $name;
    public $age;
    
    function func()
   {
    $n; //local
    static $n2; //static
    echo "Local: &n <br>";
    echo "Static: &n2 <br>";
   
   }
}

 

$n3=10; //gobal 

$greatness =new yash();
$greatness->name="yash";
$greatness->age="24";

echo "$greatness->name <br>";
echo "$greatness->age <br>";

$greatness->func();

echo "Global: $n3";

?>