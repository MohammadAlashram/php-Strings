<?php

// $x = 'hello world! . welcome to orange coding academy';
// $y = ucwords($x); 
// echo "$y";
// echo "<hr>";


// $trans = array("Happy Birthday" => "عيد ميلاد سعيد", "Mr" => "سيد" , "Mohammad" => "محمد" , "Yacoub" => "يعقوب" , "Take a break and enjoy a cup of tea" => "خذلك بريك انت مو انت وانت جوعان , واستمتع بكوب من الشاي");

// echo strtr("Happy Birthday Mr Mohammad Yacoub , Take a break and enjoy a cup of tea ", $trans);
// echo "<hr>";

// echo convert_uudecode("!L+22;W9E(%!(4\"$`\n`");

// echo "hello world";
// echo "<hr>";

// $x = "hello world";
// $x = strtoupper($x);
// echo $x;
// echo "<hr>";

// $y = "HELLO WORLD";
// $y = strtolower($y);
// echo $y;
// echo "<hr>";

// echo ucfirst("hello world!");
// echo "<hr>";

// $z = "hello world! . welcome to orange coding academy";
// $z = ucwords($z); 
// echo "$z";
// echo "<hr>";

// ///////////////////////////////////////

// $names  = "Mohammad Firas Ayham Lara Hamzeh Slameh";
// $firstName = explode(" ", $names);
// echo $firstName[0];
// echo " | ";
// echo $firstName[1]; 
// echo " | ";
// echo $firstName[2]; 
// echo " | ";
// echo $firstName[3]; 
// echo " | ";
// echo $firstName[4]; 
// echo " | ";
// echo $firstName[5]; 
// echo "<hr>";

// $numbers  = "0 8 2 3 0 7";
// $firstNum = explode(" ", $numbers);
// echo $firstNum[0];
// echo $firstNum[1]; 
// echo ":";

// echo $firstNum[2]; 
// echo $firstNum[3]; 
// echo ":";

// echo $firstNum[4]; 
// echo $firstNum[5]; 
// echo "<hr>";

// $str2 = "082307";
// $array=(str_split($str2,2));
// echo implode(":",$array);
// echo "<hr>";


///////////////////////////////

// $varname = "35465768"; 
// echo strval($varname); 
// echo '<hr>';

/////////////////////////////////

// $word = "jumps";
// $mystring = "The quick brown fox jumps over the lazy dog";
 
// Test if string contains the word 
// if(strpos($mystring, $word) !== false){
//     echo "Word Found!" . " " . $word;
//     echo "<hr>";
// } else{
//     echo "Word Not Found!";
//     echo "<hr>";
// }

///////////////////////////////

// $url = 'www.example.com/public_html/index.php';
// $file_name = substr(strrchr($url, "/"), 1);
// echo $file_name."\n"; 
// echo '<br>';
// echo '<hr>';

/////////////////////////////////

// $ayham  = 'Ayham@example.com';
// $user = strstr($ayham, '@', true);
// echo $user."\n";
// echo '<hr>';

/////////////////////////////////

// $string1 = 'Ayham@example.com';
// echo substr($string1,-3)."\n";
// echo '<hr>';

/////////////////////////////////

// $num1=65.45;
// $num2=104.35;
// echo number_format(($num1+$num2),2);
// echo "<hr>";

/////////////////////////////////

// function password_generate() 
// {
//   $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
//   return substr(str_shuffle($data), 0, 8);
// }
//   echo password_generate(7)."\n";
//   echo ' <br> ';
//   echo '<hr>';

/////////////////////////////////

// $str = 'the quick brown fox jumps over the lazy dog.';
// echo preg_replace('/the/', 'That', $str, 1)."\n";   
// echo ' <br> ';
// echo '<hr>';

//////////////////////////////////

// $str1 = 'football';
// $str2 = 'footboll';
// $str_pos = strspn($str1 ^ $str2, "\0");
// printf('First difference between two strings at position %d: "%s" vs "%s"',
// $str_pos, $str1[$str_pos], $str2[$str_pos]);
// printf("\n");
// echo ' <br> ';
// echo '<hr>';

//////////////////////////////////

// $str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp  above the world so high,\nLike a diamond in the sky.";
// $arra1 = explode("\n", $str);
// var_dump($arra1);
// echo "<hr>";

//////////////////////////////////

// $path = 'www.orange.com/index.php';
// $file = basename($path, ".php"); 
// echo $file."\n";
// echo '<hr>';

//////////////////////////////////

















    
// $x = 102;
// if ($x >=101 ) {
//     echo "Please Enter Valid Number ";
// }elseif($x >=90){
//     echo "A";
// }elseif($x >=80){
//     echo "B";
// }elseif($x >=70){
//     echo "C";
// }elseif($x >=50){
//     echo "D";
// }elseif($x <=49 && $x >= 0){
//     echo "Fail";
// }elseif($x <=-1){
//     echo "Please Enter Valid Number ";
// }

// $x = 10;
// $y = 20;

// if($x == $x && $y == $y ){
//     $x = $y;
//     echo "<hr>" . $x; 
//     $y = $y - 0.5*$x;  
//     echo "<hr>" . $y;
// }

// if($y == 20){
// $y = $x;
// echo "<hr>" . $y;
// }

// $x = 10;
// $y = 20;

function convertXtoY (){
    $x = 10;
    $y = 20;
    if($x == $x ){
        $x = $y;
        echo  $x . "<hr>"; 
    }
}
convertXtoY();



function convertYtoX (){
    $x = 10;
    $y = 20;
    if($y == $y ){
        $y = $x;
        echo  $y . "<hr>"; 
    }
}
convertYtoX();




?>