<?php
$marks=89;
if($marks>60)
{
    $grade="1st Division";
}
elseif($marks<60 && $marks>44)
{
    $grade="2nd Division";
}
elseif($marks>33 && $marks<45)
{
    $grade="3rd Division";
}
else{
    $grade="Debard";
}

echo $grade;


?>
