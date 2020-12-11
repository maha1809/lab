<?php
function create_table2($data, $border=1, $cellpadding=4, $cellspacing=4)
{
	echo "<table align=\"center\" border=$border  cellpadding=$cellpadding cellspacing=$cellspacing>\n";
	reset($data); // встановлює покажчик масиву на його початок
	$value=current($data);//current повертає поточний елемент масиву
	while($value)
	{
		echo "<tr><td>$value</td></tr>\n";
		$value = next($data);
		//next - переміщують показник на елемент вперед на один елемент; 
		//next – спочатку змінює покажчик, потім – повертає значення, each–навпаки;
	}
	echo '</table>';
	echo"<div align=\"center\">Кількість параметрів: ";
	echo func_num_args()."<br />";
	//Функція func_num_args() визначає, скільки аргументів було передано функції користувача
	$args = func_get_args();
	//func_get_args() повертає масив, який містить ці аргументи
	foreach ($args as $arg)
		echo $arg."<br/>";
	echo "</div>";
}
function showArray($array){
	echo "<div align=\"center\" style=\"color:#0047AB;font-weight: bold;font-size:150%;\">Початковий масив:</div><br>";
   for($i=0;$i<count($array);$i++){
   	 echo "<div align=\"center\" style=\"color:#6495ED;font-weight: bold;font-size:120%;\">A[".$i."]=".$array[$i]."</div><br>";
   }
}
function showArrayReverse($array){
	echo "<div align=\"center\" style=\"color:#0047AB;font-weight: bold;font-size:150%;\">Оберенений масив:</div><br>";
   for($i=count($array)-1;$i>=0;$i--){
   	 echo "<div align=\"center\" style=\"color:#6495ED;font-weight: bold;font-size:120%;\">A[".$i."]=".$array[$i]."</div><br>";
   }
}
function createTwoArray($array,$size){
	echo "<div align=\"center\" style=\"color:#0047AB;font-weight: bold;font-size:150%;\"><br>Масив з середніми значеннями кожного з рядків:</div><br>";
echo "<div align=\"center\" style=\"color:#6495ED;font-weight: bold;font-size:120%;\">";
for($i=0;$i<10;$i++){
	for($j=0;$j<10;$j++){
      $sum+=$array[$i][$j];
	}
   $averageValue[$i]=$sum/$size;
   $sum=0;
   echo $averageValue[$i].", ";
}
echo "</div><div align=\"center\" style=\"color:#0047AB;font-weight: bold;font-size:150%;\"><br>Масив з елементів по діагоналі:</div><br>";
echo "<div align=\"center\" style=\"color:#6495ED;font-weight: bold;font-size:120%;\">";
for($i=0;$i<10;$i++){
	$diagonalElements[$i]=$array[$i][$i];
	echo $diagonalElements[$i]." ";
}
echo "<div align=\"center\">";
}

function fibonacciNumber($number){
	 $arrayFibonacci[0]=1;
	 $arrayFibonacci[1]=1;
     for($i=2;$i<$number;$i++){
     	$arrayFibonacci[$i]=$arrayFibonacci[$i-2]+$arrayFibonacci[$i-1];
     }
     echo "<div align=\"center\" style=\"color:#6495ED;font-weight: bold;font-size:150%;\">Послідовність Фібоначчі, де N=".$number.":";
     for($i=0;$i<$number;$i++){
     echo $arrayFibonacci[$i]." ";
     }
     echo "</div>";
}
?>
