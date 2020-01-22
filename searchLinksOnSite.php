
<?php



$str = file_get_contents('https://www.bing.com/search?q=icecream');    //   строка для поиска                                                           

// $result = preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $str, $found); //поиск
$result = preg_match_all("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $str, $found); //поиск

 
echo "Matches:" . $result . "<br>";  // выводим количество найденых совпадений
 
 // print_r($found);                    // выводим результат



echo "Links №1 = ". $found[0][0] . "<br>";
echo "Links №2 = ". $found[0][1] . "<br>";
echo "Links №3 = " . $found[0][2] . "<br>";
echo "Links №4 = " . $found[0][3] . "<br>";
echo "Links №5 = " . $found[0][4] . "<br>";
echo "Links №6 = " . $found[0][5] . "<br>";
echo "Links №7 = " . $found[0][6] . "<br>";
echo "Links №8 = " . $found[0][7] . "<br>";
echo "Links №9 = " . $found[0][8] . "<br>";
echo "Links №10 = " . $found[0][9] . "<br>";
?>
 







































