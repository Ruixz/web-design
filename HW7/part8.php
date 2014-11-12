<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

The length of "Hello world!": 

<?php	
echo strlen("Hello world!");
echo "<br>";
?>

<?php 
$email_address = "student@neu.edu";
function hex_encode ($email_address)    { 
        $encoded = bin2hex("$email_address"); 
        $encoded = chunk_split($encoded, 2, '%'); 
        $encoded = '%' . substr($encoded, 0, strlen($encoded) - 1); 
        return $encoded;    
} 
echo $email_address;
?> 

<?php
echo "<pre>";//without <pre> you cann't see desired output in your browser
echo chop("   Ramki   ");//right spaces are eliminated
echo chop("Ramkrishna", "a..z");
echo "</pre>";
?>

<?php 
$string = '1234'; 
substr(chunk_split($string, 2, ':'), 0, -1); 
// will return 12:34 
echo $string;
?>

<?php
function convert_cyr_array($array,$from,$to){
    foreach($array as $key=>$value){
        if(is_array($value)) {
            $result[$key] = convert_cyr_array($value,$from,$to);
            continue;
        }
        $result[$key] = convert_cyr_string($value,$from,$to);
    }
    return $result;
}

$array[0] = "сВМПЛП";
$array[1] = "зТХЫБ";
$array[2] = array("пЗХТЕГ","рПНЙДПТ");
$array[3] = array(
                     array("бРЕМШУЙО","нБОДБТЙО"),
                     array("бВТЙЛПУ","рЕТУЙЛ")
                );

$result = convert_cyr_array($array,"k","w");
/* Returns:

Array
(
  [0] => Яблоко
  [1] => Груша
  [2] => Array
    (
      [0] => Огурец
      [1] => Помидор
    )
  [3] => Array
    (
      [0] => Array
        (
          [0] => Апельсин
          [1] => Мандарин
        )
      [1] => Array
        (
          [0] => Абрикос
          [1] => Персик
        )
    )
)*/
?>

<?php
/* Can you imagine what this will print? :) */
echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`");
?>

<?php
$some_string = "test\ntext text\r\n";

echo convert_uuencode($some_string);
?>

<?php
$data = "Two Ts and one F.";

foreach (count_chars($data, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
}
?>

<?php
$data = "Two Ts and one F.";

foreach (count_chars($data, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
}
?>

<?php
$checksum = crc32("The quick brown fox jumped over the lazy dog.");
printf("%u\n", $checksum);
?>

<?php
// Example 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2

// Example 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *

?>


</body>
</html>
