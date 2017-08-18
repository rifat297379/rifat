<?php

echo "<br/> -----numaric array------<br/>";

$r1=array(1=>"india",2=>"UK",3=>"USA",4=>"sri-lanka");

echo "<br/>country:".$r1[4];

echo "<br/> -----enter new value------<br/>";

$r1[5]="chaina";

print_r($r1);
echo "<br/> -----after push------<br/>";
array_push($r1,"brajil","south africa");
print_r($r1);
echo "<br/> -----after pop------<br/>";
array_pop($r1);
print_r($r1);

echo "<br/> -----multy dimentional array------<br/>";

$mularray=array("food"=>array("veg"=>"gujarati","nonveg"=>"omalet"),"fruite"=>"apple");
print_r($mularray);

echo "<br>".$mularray['food']['nonveg'];


echo "<br/> -----associative array------<br/>";

$asary=array("veg"=>"gujarati","nonveg"=>"omalet","fruite"=>"apple");
print_r($asary);


echo "<br/> -----foreach------<br/>";

$arrvar=array(55,52,73,43,65,33);

$arrvar[2]=99;
array_push($arrvar,77,88);
foreach($arrvar as $key=>$val)
{
	echo "<br>".$key ." : ".$val;	
	
	
}

echo "<br/> -----for loop using------<br/>";

for($i=0;$i<count($arrvar);$i++)
{
		echo "<br/> $i :".$arrvar[$i];
	
}


?>