<?php
error_reporting(0);

$shape = $_REQUEST['shape'];

$diameter = $_REQUEST['diameter'];
$height = $_REQUEST['height'];
$radius = $_REQUEST['radius'];
$area = $_REQUEST['area'];
$one_direction_circle = $_REQUEST['one_direction_circle'];
$other_direction_circle = $_REQUEST['other_direction_circle'];
$one_direction_dome = $_REQUEST['one_direction_dome'];
$other_direction_dome = $_REQUEST['other_direction_dome'];
$one_direction_irregular = $_REQUEST['one_direction_irregular'];
$other_direction_irregular = $_REQUEST['other_direction_irregular'];

$pie = 3.14159;
$square = $diameter * $diameter;


if($shape=="Circle")
{
$result1 = $pie * $square * ($one_direction_circle+$other_direction_circle)/(4*$one_direction_circle*$other_direction_circle);	
$result1 = round($result1,2);
echo"<div class='form-title-row'>
                <h1>Result: ".$result1." m</h1>
            </div>";
//echo "circle";
}
else if($shape=="Dome")
{
$result2 = 2 * $pie * $radius * $height * ($one_direction_dome+$other_direction_dome)/($one_direction_dome*$other_direction_dome);	
$result2 = round($result2,2);
echo"<div class='form-title-row'>
                <h1>Result: ".$result2." m</h1>
            </div>";
//echo "dome";
}
else if($shape=="Irregular")
{
$result3 = ($area * ($one_direction_irregular+$other_direction_irregular))/($one_direction_irregular*$other_direction_irregular);
$result3 = round($result3,2);
echo"<div class='form-title-row'>
                <h1>Result: ".$result3." m</h1>
            </div>";
//echo "irregular";
}

?>

