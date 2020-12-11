<?php
function forTask5($text,$pattern) {

    $sentencesArray=preg_split("/\.[ ^\d^\w]*/", $text);
    $replacement = ' <b>\1</b>' ; 	
  for ($i=0;$i<count($sentencesArray);$i++) {
 	$sentencesArray[$i]=preg_replace ( $pattern , $replacement , $sentencesArray[$i] ); 
   	preg_match_all ( $pattern ,$sentencesArray[$i],$out1,PREG_PATTERN_ORDER ); 
   	$array[$i]=count($out1[0]);
   	//echo "<br>".count($out1[0]);
   }
   //розбиваємо текст на речення, шукаємо у кожному реченні всі входження слова, та записуємо їх кільксть у масив out, сортуємо масив out, зберігаючи ключі(ідекси), виводимо масив речень, згідно з ключем масива out
   arsort($array);
   //echo "<br>".count($array);
   echo "<div align=\"center\" style=\"color:black;font-size:90%;\">";
  echo "</div><hr>";
  echo "<div align=\"center\" style=\"color:black;font-size:90%;\">";
   foreach ($array as $key => $value) {
    if(preg_match( $pattern, $sentencesArray[$key] )){
      $sentencesArray[$key]=str_replace("& ", "&lt", $sentencesArray[$key]);
   	echo $sentencesArray[$key].". <br>";
    }
   }
  echo "</div>";
   //echo "<hr>";
   //for ($i=0;$i<count($sentencesArray);$i++) {
   //echo "<br>".$sentencesArray[$i];
   //}
 }
?>
