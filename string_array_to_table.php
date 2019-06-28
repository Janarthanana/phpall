<?php
$arr=array(('name'=>"Brown",'salary'=>"1000"),
array('name'=>"Smith",'salary'=>"2000"),
array('name'=>"Gordon",'salary'=>"1500")
);
$len = count($arr);
echo "<table>";
for ($i = 0; $i < $len ; $i++) {
echo "<tr><td>Salary of Mr. {$arr[$i]["name"]}</td><td>€{$arr[$i]["salary"]}</td></tr>";
}
echo "</table>";
?>