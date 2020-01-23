
<?php



$str = file_get_contents('https://www.bing.com/search?q=icecream');    //   строка для поиска                                                           

// $str = implode('', file('https://www.bing.com/search?q=icecream'));



// $result = preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $str, $found); //поиск
$result = preg_match_all("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $str, $found); //поиск

 
echo "<b style=color:violet;>Найдено совпадений: </b>" .  "<span style=color:red;>$result</span> " . "<span style=color:red;>шт</span>" . "<br>";  // выводим количество найденых совпадений
 
 // print_r($found);                    // выводим результат
// var_dump ($found);



// echo "Links №1 = ". $found[0][0] . "<br>";
// echo "Links №2 = ". $found[0][1] . "<br>";
// echo "Links №3 = " . $found[0][2] . "<br>";
// echo "Links №4 = " . $found[0][3] . "<br>";
// echo "Links №5 = " . $found[0][4] . "<br>";
// echo "Links №6 = " . $found[0][5] . "<br>";
// echo "Links №7 = " . $found[0][6] . "<br>";
// echo "Links №8 = " . $found[0][7] . "<br>";
// echo "Links №9 = " . $found[0][8] . "<br>";
// echo "Links №10 = " . $found[0][9] . "<br>";



// foreach ($found as $key => $value) {echo "$value[0]" ;}
// foreach ($found as $line_num => $line) {
//     echo "Строка #<b>{$line_num}</b> : " .  $line . "<br />\n";
// }





// Получить содержимое файла в виде массива. В данном примере мы используем
// обращение по протоколу HTTP для получения HTML-кода с удаленного сервера.
// $lines = file('https://www.bing.com/search?q=icecream');

// Осуществим проход массива и выведем номера строк и их содержимое в виде HTML-кода.
// foreach ($lines as $line_num => $line) {
//     echo "Строка #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
// }

// Второй пример. Получим содержание web-страницы в виде одной строки.
// См.также описание функции file_get_contents().
// $html = implode('', file ('http://www.example.com/'));





// foreach ($found as $array => $list) {                   //выводим все 

//     echo "ul";
// 		foreach ($list as $key => $value){
// 			echo "<li> $array [$key] = $value";
// 		}
// 	echo "/ul";
// }




// foreach ($found as $array => $list) {              //сортировка по ul, li

//     echo "ul";
// 		foreach ($list as $key => $value){
// 			echo "<li>  [$key] = $value";
// 		}
// 	echo "/ul";
// }




// foreach ($found as $array => $list) {                //сортировка по dt, dd, dl

//     echo "<dt> сортировка";
// 		foreach ($list as $key => $value){
// 			 echo "<dd> $value";
// 		}
// 	echo "/dl";
// }





// foreach ($found as $array => $list) {                //сортировка по table, tr, td, th

//     echo "<table> сортировка<tr>";
// 		foreach ($list as $key => $value){
// 			 echo "<th> $value";
// 		}
// 	echo "/table";
// }


foreach ($found as $array => $list) {                //сортировка по ol, li

    echo "<ol> <b style=color:green;>Cортировка по всем ссылкам с страницы сайта:</b> <span style=color:gold;>https://www.bing.com/search?q=icecream</span> ";
		foreach ($list as $key => $value){
			echo "<li style=color:blue;> $value" . "<br>";
		}
	}

?>
 







































