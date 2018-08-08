<?php
/*
lecture 50 

[1] str_repeat(string required,repeat)
[2] str_shuffle(string)
[3] strlen(string)

lecture 51

[4] addslashes(string) 
[5] stripslashes(string)
[6] strip_tags(string,skiped tags optional)

lecture 52

[7] strtolower(string)
[8] strtoupper(string)
[9] lcfirst(string)
[10] ucfirst(string)
[11] ucwords(string)

lecture 53

[12] trim(string ,charlist optional)
[13] rtrim(string ,charlist optional)
[14] ltrim(string ,charlist optional)

lecture 54 

[15] str_word_count(string ,format optional , charlist optional )

lecture 55 

[16] parse_str(string,array optional)
[17] nl2br(String,true)

 lecture 56

 [18] strpos(string,find required ,offset optional)
 [19] stripos(string,find required,offset optional)
 [20] strrpos(string,find required,offset optional)
 [21] strripos(string,find required,offset optional)

 lecture 57

 [22] strstr(string,search,before search)
 [23] stristr(string,search,before search)
 [24] strchr(string,search,before search)

 lecture 58

 [25] strcmp(string1,srting2)
 [26] strncmp(string1,string2,length)
 [27] strrev(string)

*/
//************************************************************************************************************

// lecture 50 
/*
[1] str_repeat(string , # of repeats must >0)
this function take the string and repeat it as numbers of repeats this number must be >0
*/
$str="mohammed";

$rep=str_repeat($str,10);
echo $rep;
/*
mohammed mohammed mohammed mohammed mohammed mohammed mohammed mohammed mohammed mohammed
*/

/*
[2]str_shuffle(string) this function mixed characters of the string like moHedamm , EmmDAhaom .. and so on

*/

echo "<br>";
$sh=str_shuffle($str);
echo $sh;
/*
aomemhmd   hmoadmme ... so on 
*/

/*
[3] strlen(string) this function return the length of the string 
*/ 
echo "<br>";
$len=strlen($str);
echo $len;
// output 8

//-------------------------------------------------------------------------------------------------------------
// lecture 51

/*

[4] addslashes(string )  if you write single or double qouts  at your string when you save this string in data 							base this string will harm the DB and if one write bad code(haker) in the input file 						  and he use single or double qouts so this code  will harm the DB
						 so this function provide slash (\) before the single or double qouts  so the compiler skiped it 
*/
echo "<br>";
$str="aabb'ccdd";
$adslash=addslashes($str);
echo $adslash ;
/*
aabb\'ccdd
*/
echo "<br>";	
echo addslashes("ff- vv'dd '.' rr ;; g mli ] r p ");
// out put       ff- vv\'dd \'.\' rr ;; g mli ] r p
/*
[5] stripslahes(string) this function is opsite to the addslashes 
	stripslahes delete the slashes that the compiler add it to the original string
	the job of stripslahes function is to clean the slahes that compiler add it to original string 
*/
	echo "<br>";	

	echo stripslashes("ff- vv\'dd \'.\' rr \\;; g mli ] r p");
	//out put          ff- vv'dd '.' rr ;; g mli ] r p

/*
[6] strip_tags (string , skip tags optinal )  this function is important it belong to security 
		      	if there are hacker , if he write some scripts in the inputs fields so he can
		      	access to database , so this function make compiler skip the tags of html javascript
		      	and all scripts that will harm your website
		      	if you need to skiped some tags that don't harm the website like <span> <li> <b>
		      	you can write it in the second argument

		    */

    echo "<br>";
	$str6="i love <b >AI</b>  go to this course <a href='http://www.AI.com'>AI web site </a> to learn <i>AI </li> ";
	echo $str6;
// out put =>  i love AI go to this course AI web site to learn AI
	echo "<br>";
	$strip=strip_tags($str6);
	echo $strip;	
// out put => i love AI go to this course AI web site to learn AI 
// but in browser two outputs will be difference

//------------------------------------------------------------------------------------------------------------
// lecture 52

/*
[7] strtolower(string) =>string to lower  , this function  convert all charcters of string to lower case
*/
echo "<br>";
echo strtolower("MOhammed MOStafa"); // OUTPUT mohammed mostafa

/*
[8] strtoupper(string) =>string to upper  , this function  convert all charcters of string to upper case
*/
echo "<br>";
echo strtoupper(" mohammed mostafa"); // OUTPUT   MOHAMMED MOSTAFA

/*
[9] lcfirst(string) =>lower case first   , this function  convert only first  charcter first word  of string to lower case and left other characters as original string 
*/
echo "<br>";
echo lcfirst("MOHAMMED Mostafa"); 
// OUTPUT   mOHAMMED Mostafa / notice you must sure that first character isnot space because function convert the first character of the first word of string 

/*
[9] ucfirst(string) =>upper case first   , this function  convert only first  charcter of  first word  of string to upper case and left other characters as original string 
*/
echo "<br>";
echo ucfirst("mOHAMMED mOStafa");  //  output => MOHAMMED mOStafa


/*
[10] ucwords(string) =>upper case words   , this function  convert only first charcter of all words  of string to upper case and left other charcters in word as original string 
*/
echo "<br>";
echo ucwords("mohammed mostafa");  //  output => Mohammed Mostafa

//------------------------------------------------------------------------------------------------------------
// lecture 53
/*
[11] trim(string , char list ) trim (ميلقت	  ) like cut pranches of tree 
							  this function is important in security what this function do is delete some charcters that if user(hacker) write it into the input field he can acces to database , this function automatically delete specific characters and if you need to add more you can write them in char list 
							  this characters are ( \0   => null 
							  						\t   => tap
							  						\n   => new line
							  						\r   => carriage return
							  						\x0B => Vertical tap
							  						" "  => space           ) 
							  in some cases you need to trim from start of string or end of string 
							  so use rtrim , ltrim 			
					note => if you use second parameter so function cannot trim (\0 \t \n \r \x0B " ") automatically you should write them with other words or characters in second parameter 

*/
echo "<br>";
$v11 ="mohammed mostafa \t \t \x0B "  ;
var_dump($v11) ;  
// output                            => string 'mohammed mostafa 	 	  ' (length=23)
echo "<br>";
echo var_dump(trim($v11)); // output => string 'mohammed mostafa' (length=16) 
// notice the length 
echo "<br>";
$v11_1="hello world";
var_dump($v11_1); //string 'hello world' (length=11)
var_dump(trim($v11_1,"d")); //string 'hello worl' (length=10)
var_dump(trim($v11_1,"do"));//string 'hello worl' (length=10) the function cannot trim o
/* 
important notice : to trim the string you should start with first character in string or last character
so you should start with h or d then to trim other charcters you cannot trim any charctre in string 
this functin work like as  tree you trim the outer branch if you will trim anoter branch 
you should trim next one , you cannot trim from middle of tree so you strat with d the next character will be  l if you write it in the char list parameter , or you can start with h then next char will e , if you 
write the char o or w the function cannot trim them , there is only way to delete o or w , it when you start with h then e then l then o , if there are more than one same character in the string so write it once in its order then function will trim it from all string 
*/

var_dump(trim($v11_1,"do he")); //string 'llo worl' (length=8)
var_dump(trim($v11_1,"do he w "));  // string 'llo worl' (length=8) the function cannot trim w 
var_dump(trim($v11_1,"dl hel <br>"));// string 'o wor' (length=5) trim the next char it automatically at hel(l)o
var_dump(trim("new world \t\t \0 "));
/*
[12] ltrim(string, char list ) this function trim from left only but you should write them in char list paramter


*/
$v11_2="world , welcome \t\t \x0B  " ;
var_dump($v11_2); //string 'world , welcome 		   ' (length=22)
echo "<br>"; 
var_dump(ltrim($v11_2)); //string 'world , welcome 		   ' (length=22)
echo "<br>"; 
var_dump(ltrim($v11_2, "wo  me")); //string 'rld , welcome 		   ' (length=20)

/*
[13] rtrim(string, char list ) this function trim from right only but you should write characters in char list paramter

*/	

//------------------------------------------------------------------------------------------------------------
// lecture 54
/*

[15] str_word_count (string ,  format optional ,char list optional) this function count number of words , it has three status  depend on second parameter
 ( format  ): in case  (0) => this is default statue to str_word_count function in this case function count number of words in string and return integer , in some cases you can write a special character like & , but function don't count this special char so if you need function count this special char you should write them in char list parameter ,
 in ( format ):(1)=> in this case function will count words of string 
but it will return the result as array 
in ( format ) :(2) => function will return result as assosiative array , the key of the elements will be index of first char of the word 

*/
$v15="hello every body how are you ";
echo str_word_count ($v15);// 6 
$v15= " hello every body how are you & welcome"; 
echo "<br>";
echo str_word_count ($v15); // 7 count welcome and don't count &
echo "<br>";
echo str_word_count ($v15,0); // 7 count welcome and don't count &
echo "<br>";
echo str_word_count ($v15,0,"&");  // 8 in this case after you implement 
// in case (1)
echo "<br>";
$v15="hello every body how are you ";
echo str_word_count ($v15);
//echo str_word_count($v15,1); // error because function return array so we need print_r or for
echo "<pre>";
print_r(str_word_count( $v15,1));
echo "</pre>";
/*
output
Array
(
    [0] => hello
    [1] => every
    [2] => body
    [3] => how
    [4] => are
    [5] => you
)
*/
// in case ():

echo "<br>";
$v15="hello every body how are you ";
echo str_word_count ($v15);
//echo str_word_count ($v15,2);// error because function return array so we need print_r or for
echo "<pre>";
print_r(str_word_count( $v15,2));
echo "</pre>";
/*
Array
(
    [0] => hello  
    [6] => every
    [12] => body
    [17] => how
    [21] => are
    [25] => you

     if you count charactrers 1h 2e 3l 4l 5o 6e (every) 7v 8e 9e 10r 11y 12b(body) and so on

     so this are differences between three cases in format 0 1 2 but notice in every case special 
     characters don't count by function until you write them in charlist parameter 
)
*/

//-------------------------------------------------------------------------------------------------
// lecture 55

/*
[16] parse_str(string,array) this function make analysis to the string , that mean if you have a link as string and in it there are values such name= " some thing" & password = " some thing"
&eamil= " some thing" so if you need this informatoin sepratly from string this function do that 
in second parameter the function return element and it's value as asscoiative array the name and 
password , and email all as key and some thing are them values 
but it should write in this syntax exactly => name=" "&email=" "&pass=" "&soon="..."
*/

$v16="name= mohammed&password=123&email= mohammed.com ";
//echo $name; // error before parse_srt()
parse_str($v16);
echo $name . "<br>" . $password . "<br>" .$email; // output mohammed 123 mohammed.com
// if you want this function return information as array you should write name of arrat in second paeameter 
$v16="name= mohammed&password=123&email= mohammed.com ";
parse_str($v16,$array16);
echo "<pre>";
print_r($array16);
echo "</pre>";
/*
output 

Array
(
    [name] =>  mohammed
    [password] => 123
    [email] =>  mohammed.com 
)
*/

/*
[17] nl2br(string,xhtml true or false) this function convert \n (newline) to br(breakline html tag)
that is because \n don't affect on text on browser but it's effect appear at sourse page
although br affect appear in browser so new line appear in text , second parameter xhtml 
true mean if you need to write br tag with close / => <br /> and false mean opposite <br >
and default value is true
*/
$v17="new line \n in this new page \n welocme user ";
echo $v17."<br>"; 
/*
output in browser 
new line in this new page welocme user
output in page sourse 
new line 
 in this new page 
 welocme user 
 */

 // using function 
 echo nl2br($v17);
 /*
 notice difference 
 at browser 
 new line 
in this new page 
welocme user

at page sourse 
new line <br />
 in this new page <br />
 welocme user */

// incase of false 
echo "<br>"; 
echo nl2br($v17,false);
/*
output in browser 
new line 
in this new page 
welocme user

out put in page sourse 
new line <br>
 in this new page <br>
 welocme user 
 */


//-------------------------------------------------------------------------------------------------
// lecture 56
/*
 [18] strpos(string,find , offset) string position this function search about some thing in the string
 parameter (string)-> required ,,,, 
 parameter (find)-> required and it is the thing you search about 
 in string like word ,number , special character ,
 parameter (offset)-> it determine where you start in some cases you sure that the word near to 
 middle of all string so you don't need to start from beganing of array you may start from position 25 if all string has  pobably 60 words or start from position 27 and so on 
 the default value is 0 that mean function will begain from first word (from first char of first word ) you can write minus number in this case you will start from right of string but 
 notice the index of string is still start from left as any string 
*/
$v18="i love php , js , html, css , jq and mysql , js is very easy ";
echo "<br/>". strpos($v18, "js")."<br/>";// output 13 
// if you make offset start from 15 so function will search after 15 and will not select js at position 13 

echo strpos($v18,"js",15)."<br/>";// output 45 
/*
[19]stripos(string,find,offset) string case insensitive position this function has all properties of strpos() but allow you search 
with case in sensitive that mean if in function there are PHP capital in the string  and if you write php small case function will find this PHP although difference in two cases  
*/
// in case strpos() function 
echo strpos($v18,"CSS")."<br/>"; // function found nothing 
// in case stripos() function 
echo stripos($v18,"CSS")."<br/>";// 24 function found css at position 24
/*

[20] strrpos(string,find,offset) string right position this function like others but it start search from right
*/
echo strrpos($v18,"html",-5); // 18 although function start search from right but indexing is still from left that mean index of chars not change by change of search 
/*
[21] strripos() same thing start from right but case in sensitive
*/

//-------------------------------------------------------------------------------------------------
// lecture 57
/*
 [22] strstr(srting,search,before search) this function search about string in basic string that we write in first parameter , in second parameter we write a word or string so function search about it but if function found this string it will return all string after the string you search about
third parameter before search : the default value is false ->that mean function will return the string you search about and all string after it , but in case of true function will return string before the string you search about 
*/
$v22="progrmers say that php is simple and js ";
echo strstr($v22,"php");	// out put php is simple and js
echo strstr($v22,"php",true); // out put progrmers say that
echo "<br>";
echo str_replace("php" ,"python",  strstr($v22,"php")); // output python is simple and js 
/*
[23]stristr(srting,search,before search) same thing as strstr() but here case is insensitive 
that mean PHP =php only in the stristr()functoin not strstr()
*/
echo "<br>" . $v22;
echo stristr($v22,"PHP");//  php is simple and js

/*
[24]strchr(srting,search,before search) same thing as strstr() exactly
*/
//-------------------------------------------------------------------------------------------------
// lecture 58

/*
[25] strcmp(string1,string2) string compare -> this function make compare between two strings 
 	 from point of view length , so function has three returns 
 	 first (return =0 )=> that mean both strings are equal in length
 	 second (retun >0 )=> that mean string 1 is largre than string two (string 2 less than str 1)
 	 third (return <0 )=> that mean string 1 is less than string two (string 2 larger than str 1)

*/
 	 $v25="mohammed"; $v25_="mohammed";
 	 echo "<br>" . strcmp($v25,$v25_); // 0

 $v25="mohammed98"; $v25_="mohammed";
 echo "<br>" . strcmp($v25,$v25_); // 2

  $v25="mohammed"; $v25_="mohammed mostafa";
 echo "<br>" . strcmp($v25,$v25_); // -8
 /*
 [26] strncmp(string1,string2,length) string length compare 
	this same thing as strcmp() function but third parameter allow you to compare in specific 
	length that mean if you have string it's length is 100 , parameter length allow you determine where function will search , if you may write 50 so function will compare in first 50 characters 
 */
	$v25="mohammed mostafa"; $v25_="mohammed ";
echo "<br>" . strncmp($v25,$v25_ ,8 /* #of characters of mohammed  */); 
/* output 0 that mean first 8 characters are equal */
$v25="mohammed mostafa"; $v25_="mohammed ";
echo "<br>" . strncmp($v25,$v25_ ,10 ); //  1 >0 mean string 1 is larger than string 2

/*
[27] strrev(string) this function reverse string
*/