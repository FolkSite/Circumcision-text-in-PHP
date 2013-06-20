<?php
$string = "<p><strong>Richard III</strong> (2 October 1452 – 22August 1485) was King of England for two years, from 1483 until his death in 1485 in the Battle of Bosworth Field. He was the last king of the House of York and the last of the Plantagenet dynasty. His defeat at Bosworth Field, the decisive battle of the Wars of the Roses, is sometimes regarded as the end of the Middle Ages in England. He is the subject of the play<cite>Richard III</cite> by <a href=//en.wikipedia.org/wiki/William_Shakespeare>William Shakespeare.</a>"

//Первым делом, уберём все html элементы:
  $string = strip_tags($string);

//Теперь обрезаем его на определённое количество символов:
	$string = substr($string, 0, 200);

//Затем убедимся, что текст не заканчивается восклицательным знаком, запятой, точкой или тире:
	$string = rtrim($string, "!,.-");

//Напоследок находим последний пробел, устраняем его и ставим троеточие:
	$string = substr($string, 0,strrpos($string, ' '));
	echo $string."… ";
