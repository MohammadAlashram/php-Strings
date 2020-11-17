<?php
echo "Q1";
echo "<table border='2'>";
echo "<tr>";
echo "<th> Function Name </th>";
echo "<th> Function Output  </th>";
echo "</tr>";
echo "<tr>";
echo "<td> Strtoupper </td>";
$str = "hello im lara im tranee in coding academy by orange ";
$str = strtoupper($str);
echo "<td>  $str;   </td>";
echo "</tr>";
//UPPERCASE
echo "<tr>";
echo "<td> Strtolower </td>";
$str = "HELLO IM LARA IM TRANEE IN CODING ACADEMY BY ORANGE ";
$str = strtolower($str);
echo "<td>  $str;   </td>";
echo "</tr>";
 //LowerCASE
echo "<tr>";
echo "<td>  Ucfirst </td>";
$str = "hello im lara im tranee in coding academy by orange ";
$str =  ucfirst($str);
echo "<td>  $str;   </td>";
echo "</tr>";
 //First Chatcter uppercase
 echo "<tr>";
echo "<td>  ucwords </td>";
$str = "hello im lara im tranee in coding academy by orange ";
$str =  ucwords($str);
echo "<td>  $str;   </td>";
echo "</tr> </table> <br> ";
//ucwords 


//////////Q2///////////////
echo "Q2 <br>";
$str = "082307";
$array1 =  (str_split($str , 2 ));
echo  implode  (':',$array1) ;

echo '<br>';
echo '<hr>';

//////////Q3////////////////
echo "Q3 <br>";
$check = 'The quick brown fox jumps over the lazy dog ';

if (strpos($check, 'jumps') !== false) {
    echo 'True The word found ';
}
else echo "Not found ";
echo '<br>';
echo '<hr>';


/////////Q4////////////
echo "Q4 <br>";
$varname = "32"; //?? string 
 
echo strval($varname); 
echo '<br>';
echo '<hr>';


//////////Q5/////////////
echo "Q5 <br>";
$url = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($url, "/"), 1);
echo $file_name."\n"; 
echo '<br>';
echo '<hr>';

//////////////Q6////////////
echo "Q6 <br>";
$mailid  = 'Ayham@example.com';
$user = strstr($mailid, '@', 1);
echo $user."\n";
echo '<br>';
echo '<hr>';

/////////////Q7//////////////
echo "Q7 <br>";
$string1 = 'Ayham@example.com';
echo substr($string1,-3)."\n";
echo '<br>';
echo '<hr>';

////////// Q8 ///////////
echo "Q8 <br>";
$value1=65.45;
$value2=104.35;
echo number_format(($value1+$value2),2);
echo "<br>";
echo '<hr>';

/////////// Q9 /////////
echo "Q9 <br>";
function password_generate() 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, 8);
}
  echo password_generate(7)."\n";
  echo ' <br> ';
  echo '<hr>';

//////////Q10///////////////
echo "Q10 <br>";
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."\n";   
echo ' <br> ';
echo '<hr>';

/////////////////Q11/////////
echo "Q11 <br>";
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
echo ' <br> ';
echo '<hr>';

///////////////////Q12////////////
echo "Q12 <br>";
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);
echo ' <br> ';
echo '<hr>';

///////////////////Q13////////////
echo "Q13 <br>";
$path = 'www.orange.com/index.php';
$file = basename($path, ".php"); 
echo $file."\n";
echo ' <br> ';
echo '<hr>';

///////////////////Q14////////////
echo "Q14 <br>";
$cha = 'z';//a
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
echo ' <br> ';
echo '<hr>';

///////////////////Q15////////////
echo "Q15 <br>";
$strrem="rayy@example.com";
echo trim ($strrem,"rayy@");
echo ' <br> ';
echo '<hr>';
///////////////////Q16////////////
echo "Q16 <br>";
$str = 'rayy@example.com';
echo bin2hex($str)."\n";
echo ' <br> ';
echo '<hr>';

///////////////////Q17////////////
echo "Q17 <br>";
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
echo ' <br> ';
echo '<hr>';
///////////////////Q18////////////
echo "Q18 <br>";
$s = 'The quick brown fox';
$arr1 = explode(' ',trim($s));
echo $arr1[0]."\n";
////////////19///////////
echo "Q19 <br>";
$x = '000547023.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
echo ' <br> ';
echo '<hr>';
////////////////20///////
echo "Q20 <br>";
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";
echo ' <br> ';
echo '<hr>';

////////////////21///////
echo "Q21 <br>";
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/')."\n";
echo ' <br> ';
echo '<hr>';

////////////////22///////
echo "Q22 <br>";
$my_url = 'http://www.example.com/5478631';
echo substr($my_url, strrpos($my_url, '/' )+1)."\n";
echo ' <br> ';
echo '<hr>';
////////////////23///////
echo "Q23 <br>";
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
echo ' <br> ';
echo '<hr>';
////////////////24///////
echo "Q24 <br>";
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
echo ' <br> ';
echo '<hr>';
////////////////25///////
echo "Q25 <br>";
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
  echo ' <br> ';
  echo '<hr>';
////////////////26///////
echo "Q26 <br>";
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"

?>