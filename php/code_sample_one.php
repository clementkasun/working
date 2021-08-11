<?Php

----------------------------Array----------------------

$cars = array("Volvo","BMW","Toyota");

var_dump($cars);//retrieve array object and data

---------------------------String----------------------

echo strlen("Hello world!"); // outputs 12

echo str_word_count("Hello world!"); // outputs 2

echo str_word_count("Hello world!"); // outputs 2

echo strpos("Hello world!", "world"); // outputs 6 // search for text within text

echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!


--------------------------PHP Numbers -----------------

One thing to notice about PHP is that it provides automatic data type conversion.
So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. 
Then, if you assign a string to the same variable, the type will change to a string.

-------------------------------------------Integers ------------------------------------------

2, 256, -256, 10358, -179567 are all integers.

Here are some rules for integers:

An integer must have at least one digit
An integer must NOT have a decimal point
An integer can be either positive or negative
Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
PHP has the following predefined constants for integers:

PHP_INT_MAX - The largest integer supported
PHP_INT_MIN - The smallest integer supported
PHP_INT_SIZE -  The size of an integer in bytes
PHP has the following functions to check if the type of a variable is integer:

is_int()
is_integer() - alias of is_int()
is_long() - alias of is_int()

------------------------------------------------Float-------------------------------------

A float is a number with a decimal point or a number in exponential form.

2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.

The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.

PHP has the following predefined constants for floats (from PHP 7.2):

PHP_FLOAT_MAX - The largest representable floating point number
PHP_FLOAT_MIN - The smallest representable positive floating point number
PHP_FLOAT_MAX - The smallest representable negative floating point number
PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
PHP has the following functions to check if the type of a variable is float:

is_float()
is_double() - alias of is_float()

------------------------------------------------Infinity------------------------------------

A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

is_finite()
is_infinite()

------------------------------------------------NaN-----------------------------------------

NaN stands for Not a Number.

NaN is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:

is_nan()

------------------------------------------------is_numeric----------------------------------

# The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.

$x = 5985;
var_dump(is_numeric($x));

------------------------------------------------Casting Strings-----------------------------

Sometimes you need to cast a numerical value into another data type.

The (int), (integer), or intval() function are often used to convert a value to an integer.


------------------------------------------------Math Functions------------------------------


echo(pi());//pi value // 3.1415926535898

------------------------------------------------min() and max()-----------------------------

echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150

------------------------------------------------abs()---------------------------------------

echo(abs(-6.7));  // returns 6.7

------------------------------------------------sqrt()--------------------------------------

echo(sqrt(64));  // returns 8

------------------------------------------------round()--------------------------------------

echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0

------------------------------------------------rand()--------------------------------------

echo(rand());

------------------------------------------------rand(from, to)-----------------------------------

To get more control over the random number, you can add the optional min and max parameters to specify the lowest 
integer and the highest integer to be returned.For example, if you want a random integer between 10 and 100 (inclusive), 
use rand(10, 100):

echo(rand(10, 100));

------------------------------------------------Constant -----------------------------------------

A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.


define(name, value, case-insensitive)

Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;


Array constant

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];

Constants are automatically global and can be used across the entire script.

----------------------------------------Operators------------------------------------

PHP divides the operators in the following groups:

Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators

---------------------------------------PHP Arithmetic Operators-----------------------------------

+	Addition	                  $x + $y	Sum of $x and $y	
-	Subtraction	                  $x - $y	Difference of $x and $y	
*	Multiplication	              $x * $y	Product of $x and $y	
/	Division	                  $x / $y	Quotient of $x and $y	
%	Modulus	                      $x % $y	Remainder of $x divided by $y	
**	Exponentiation	              $x ** $y	Result of raising $x to the $y th power


---------------------------------------PHP Assignment Operators-----------------------------------

x = y	          x = y	       The left operand gets set to the value of the expression on the right	
x += y	          x = x + y	   Addition	
x -= y	          x = x - y	   Subtraction	
x *= y	          x = x * y	   Multiplication	
x /= y	          x = x / y	   Division	
x %= y	          x = x % y	   Modulus

---------------------------------------PHP Comparison Operators-----------------------------------

==	       Equal	                 $x == $y	Returns true if $x is equal to $y	
===	       Identical	             $x === $y	Returns true if $x is equal to $y, and they are of the same type	
!=	       Not equal	             $x != $y	Returns true if $x is not equal to $y	
<>	       Not equal	             $x <> $y	Returns true if $x is not equal to $y	
!==	       Not identical             $x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
>	       Greater than	             $x > $y	Returns true if $x is greater than $y	
<	       Less than	             $x < $y	Returns true if $x is less than $y	
>=	       Greater than or equal to	 $x >= $y	Returns true if $x is greater than or equal to $y	
<=	       Less than or equal to	 $x <= $y	Returns true if $x is less than or equal to $y	
<=>	       Spaceship	             $x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.


--------------------------------------PHP Increment / Decrement Operators--------------------------

++$x	Pre-increment	Increments $x by one, then returns $x	
$x++	Post-increment	Returns $x, then increments $x by one	
--$x	Pre-decrement	Decrements $x by one, then returns $x	
$x--	Post-decrement	Returns $x, then decrements $x by one

--------------------------------------PHP Logical Operators----------------------------------------

and	 And	$x and $y	True if both $x and $y are true	
or	 Or	    $x or $y	True if either $x or $y is true	
xor	 Xor	$x xor $y	True if either $x or $y is true, but not both	
&&	 And	$x && $y	True if both $x and $y are true	
||	 Or	    $x || $y	True if either $x or $y is true	
!	 Not	!$x	        True if $x is not true

--------------------------------------PHP String Operators-----------------------------------------

.	Concatenation	            $txt1 . $txt2	Concatenation of $txt1 and $txt2	
.=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1

--------------------------------------PHP Array Operators-----------------------------------------

+	Union	      $x + $y	 Union of $x and $y	
==	Equality	  $x == $y	 Returns true if $x and $y have the same key/value pairs	
===	Identity	  $x === $y	 Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
!=	Inequality	  $x != $y	 Returns true if $x is not equal to $y	
<>	Inequality	  $x <> $y	 Returns true if $x is not equal to $y	
!==	Non-identity  $x !== $y	 Returns true if $x is not identical to $y

--------------------------------------PHP Conditional Assignment Operators------------------------

?:	 Ternary	        $x = expr1 ? expr2 : expr3	      Returns the value of $x.The value of $x is expr2 if expr1 = TRUE. The value of $x is expr3 if expr1 = FALSE	
??	 Null coalescing	$x = expr1 ?? expr2               Returns the value of $x.The value of $x is expr1 if expr1 exists, and is not NULL.If expr1 does not exist, or is NULL, the value of $x is expr2.Introduced in PHP 7

--------------------------------------PHP Conditional Statements----------------------------------

Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif...else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed

--------------------------------------PHP - The if Statement--------------------------------------

if (condition) {
  code to be executed if condition is true;
}

ex: 

$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}

--------------------------------------PHP - The if...else Statement------------------------------

if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
}

ex: 

<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

--------------------------------------PHP - The if...elseif...else Statement---------------------

if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}

ex: 

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

------------------------------------PHP switch Statement------------------------------------------

Use the switch statement to select one of many blocks of code to be executed.

switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

----------------------------------PHP Loops-------------------------------------

Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.
Loops are used to execute the same block of code again and again, as long as a certain condition is true.

In PHP, we have the following loop types:

while -        loops through a block of code as long as the specified condition is true
do...while -   loops through a block of code once, and then repeats the loop as long as the specified condition is true
for -          loops through a block of code a specified number of times
foreach -      loops through a block of code for each element in an array

The following chapters will explain and give examples of each loop type.

---------------------------------The PHP while Loop-----------------------------

The while loop executes a block of code as long as the specified condition is true.

while (condition is true) {
  code to be executed;
}$x = 1;

ex:

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

---------------------------------The PHP do...while Loop-------------------------

do {
  code to be executed;
} while (condition is true);

ex: 

$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. 
This means that the do...while loop will execute its statements at least once, even if the condition is false. See example below.

ex2:

$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

---------------------------------The PHP for Loop---------------------------------

The for loop is used when you know in advance how many times the script should run.

for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}

ex:

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

--------------------------------The PHP foreach Loop------------------------------

The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

foreach ($array as $value) {
  code to be executed;
}

For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.

ex:

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

-----------------------------------------PHP Break---------------------------------

You have already seen the break statement used in an earlier chapter of this tutorial. It was used to "jump out" of a switch statement.
The break statement can also be used to jump out of a loop.This example jumps out of the loop when x is equal to 4:

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}

----------------------------------------PHP Continue-------------------------------

The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.This example skips the value of 4:

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}

----------------------------------------PHP Functions------------------------------

The real power of PHP comes from its functions.PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.
PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.Please check out our PHP reference for a complete overview of the PHP built-in functions.

Besides the built-in PHP functions, it is possible to create your own functions.

A function is a block of statements that can be used repeatedly in a program.
A function will not execute automatically when a page loads.
A function will be executed by a call to the function.

function functionName() {
  code to be executed;
}

Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.

Tip: Give the function a name that reflects what the function does!

In the example below, we create a function named "writeMsg()". The opening curly brace ( { ) indicates the beginning of the function code, and the closing curly brace ( } ) indicates the end of the function. The function outputs "Hello world!". To call the function, just write its name followed by brackets ():

ex:

function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function

-----------------------------------------PHP Function Arguments--------------------------------------

Information can be passed to functions through arguments. An argument is just like a variable.Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.
The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function, which outputs several different first names, but an equal last name:

ex1:

function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

ex2:

function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

----------------------------------------PHP is a Loosely Typed Language--------------------------------------

In the example above, notice that we did not have to tell PHP which data type the variable is.
PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.
In the following example we try to send both a number and a string to the function without using strict:

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.
In the following example we try to send both a number and a string to the function, but here we have added the strict declaration:

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown

//The strict declaration forces things to be used in the intended way.

----------------------------------------PHP Default Argument Value-------------------------------------------

declare(strict_types=1); // strict requirement
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

---------------------------------------PHP Functions - Returning values--------------------------------------

declare(strict_types=1); // strict requirement
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

---------------------------------------PHP Return Type Declarations-----------------------------------------

PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.
To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.
In the following example we specify the return type for the function:

declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2);

You can specify a different return type, than the argument types, but make sure the return is the correct type:

declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);

-----------------------------------------------Passing Arguments by Reference-----------------------------------------

In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.
When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:

function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;

---------------------------------------------PHP Global Variables - Superglobals---------------------------------------

Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
The next chapters will explain some of the superglobals, and the rest will be explained in later chapters.

-------------------------------------------------------PHP $GLOBALS----------------------------------------------------

$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).
PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
The example below shows how to use the super global variable $GLOBALS:

$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;

------------------------------------------------------PHP Superglobal - $_SERVER---------------------------------------

$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.The example below shows how to use some of the elements in $_SERVER:

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

Element/Code	                Description

$_SERVER['PHP_SELF']	        Returns the filename of the currently executing script
$_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using
$_SERVER['SERVER_ADDR']	        Returns the IP address of the host server
$_SERVER['SERVER_NAME']	        Returns the name of the host server (such as www.w3schools.com)
$_SERVER['SERVER_SOFTWARE']	    Returns the server identification string (such as Apache/2.2.24)
$_SERVER['SERVER_PROTOCOL']	    Returns the name and revision of the information protocol (such as HTTP/1.1)
$_SERVER['REQUEST_METHOD']	    Returns the request method used to access the page (such as POST)
$_SERVER['REQUEST_TIME']	    Returns the timestamp of the start of the request (such as 1377687496)
$_SERVER['QUERY_STRING']	    Returns the query string if the page is accessed via a query string
$_SERVER['HTTP_ACCEPT']	        Returns the Accept header from the current request
$_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
$_SERVER['HTTP_HOST']	        Returns the Host header from the current request
$_SERVER['HTTP_REFERER']	    Returns the complete URL of the current page (not reliable because not all user-agents support it)
$_SERVER['HTTPS']	            Is the script queried through a secure HTTP protocol
$_SERVER['REMOTE_ADDR']	        Returns the IP address from where the user is viewing the current page
$_SERVER['REMOTE_HOST']	        Returns the Host name from where the user is viewing the current page
$_SERVER['REMOTE_PORT']	        Returns the port being used on the users machine to communicate with the web server
$_SERVER['SCRIPT_FILENAME']	    Returns the absolute pathname of the currently executing script
$_SERVER['SERVER_ADMIN']	    Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
$_SERVER['SERVER_PORT']	        Returns the port on the server machine being used by the web server for communication (such as 80)
$_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages
$_SERVER['PATH_TRANSLATED']	    Returns the file system based path to the current script
$_SERVER['SCRIPT_NAME']	        Returns the path of the current script
$_SERVER['SCRIPT_URI']	        Returns the URI of the current page

------------------------------------------------------PHP $_REQUEST--------------------------------------------------

PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. In this example, we point to this file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice.
Then, we can use the super global variable $_REQUEST to collect the value of the input field:

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

-----------------------------------------------------------------PHP $_POST--------------------------------------------------

PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.
The example below shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag.
In this example, we point to the file itself for processing form data. If you wish to use another PHP file to process form data, replace that with the filename of your choice. Then, we can use the super global variable $_POST to collect the value of the input field:

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

----------------------------------------------------------PHP $_GET----------------------------------------------

PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".
$_GET can also collect data sent in the URL.Assume we have an HTML page that contains a hyperlink with parameters:

<html>
<body>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>
</html>

When a user clicks on the link "Test $GET", the parameters "subject" and "web" are sent to "test_get.php", and you can then access their values in "test_get.php" with $_GET.
The example below shows the code in "test_get.php":

<html>
<body>

<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>

</body>
</html>

--------------------------------------------------What is a Regular Expression?---------------------------------------

A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.
A regular expression can be a single character, or a more complicated pattern.Regular expressions can be used to perform all types of text search and text replace operations.

Syntax
In PHP, regular expressions are strings composed of delimiters, a pattern and optional modifiers.

$exp = "/w3schools/i";
In the example above, / is the delimiter, w3schools is the pattern that is being searched for, and i is a modifier that makes the search case-insensitive.

The delimiter can be any character that is not a letter, number, backslash or space. The most common delimiter is the forward slash (/), but when your pattern contains forward slashes it is convenient to choose other delimiters such as # or ~.

-------------------------------------------------Regular Expression Functions-----------------------------------------

PHP provides a variety of functions that allow you to use regular expressions. The preg_match(), preg_match_all() and preg_replace() functions are some of the most commonly used ones:

Function	Description
preg_match()	Returns 1 if the pattern was found in the string and 0 if not
preg_match_all()	Returns the number of times the pattern was found in the string, which may also be 0
preg_replace()	Returns a new string where matched patterns have been replaced with another string

------------------------------------------------Using preg_match()----------------------------------------------------

The preg_match() function will tell you whether a string contains matches of a pattern.

Use a regular expression to do a case-insensitive search for "w3schools" in a string:

<?php
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); // Outputs 1
?>

-----------------------------------------------Using preg_match_all()------------------------------------------------

The preg_match_all() function will tell you how many matches were found for a pattern in a string.

Use a regular expression to do a case-insensitive count of the number of occurrences of "ain" in a string:

<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4
?>

----------------------------------------------Using preg_replace()--------------------------------------------------

The preg_replace() function will replace all of the matches of the pattern in a string with another string.

Use a case-insensitive regular expression to replace Microsoft with W3Schools in a string:

<?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"
?>

---------------------------------------------Regular Expression Modifiers-------------------------------------------

Modifiers can change how a search is performed.

Modifier	Description

i	        Performs a case-insensitive search
m	        Performs a multiline search (patterns that search for the beginning or end of a string will match the beginning or end of each line)
u	        Enables correct matching of UTF-8 encoded patterns

---------------------------------------------Regular Expression Patterns--------------------------------------------

Brackets are used to find a range of characters:

Expression	Description

[abc]	    Find one character from the options between the brackets
[^abc]	    Find any character NOT between the brackets
[0-9]	    Find one character from the range 0 to 9

-----------------------------------------------------Metacharacters-------------------------------------------------

Metacharacters are characters with a special meaning:

Metacharacter	Description

|	            Find a match for any one of the patterns separated by | as in: cat|dog|fish
.	            Find just one instance of any character
^	            Finds a match as the beginning of a string as in: ^Hello
$	            Finds a match at the end of the string as in: World$
\d	            Find a digit
\s	            Find a whitespace character
\b	            Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b
\uxxxx	        Find the Unicode character specified by the hexadecimal number xxxx

----------------------------------------------------Quantifiers------------------------------------------------------

Quantifiers define quantities:

Quantifier	Description

n+	        Matches any string that contains at least one n
n*	        Matches any string that contains zero or more occurrences of n
n?			Matches any string that contains zero or one occurrences of n
n{x}		Matches any string that contains a sequence of X n's
n{x,y}		Matches any string that contains a sequence of X to Y n's
n{x,}		Matches any string that contains a sequence of at least X 

Note: If your expression needs to search for one of the special characters you can use a backslash ( \ ) to escape them. For example, to search for one or more question marks you can use the following expression: $pattern = '/\?+/';

-----------------------------------------------------Grouping---------------------------------------------------------

You can use parentheses ( ) to apply quantifiers to entire patterns. They also can be used to select parts of the pattern to be used as a match.
Use grouping to search for the word "banana" by looking for ba followed by two instances of na:

<?php
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str); // Outputs 1
?>

-----------------------------------------------------Form Handling----------------------------------------------------

/*
                                         Think SECURITY when processing PHP forms!

This page does not contain any form validation, it just shows how you can send and retrieve form data.
However, the next pages will show how to process PHP forms with security in mind! Proper validation of form data is important to protect your form from hackers and spammers!

*/

//GET vs. POST
Both GET and POST create an array (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)). This array holds key/value pairs, where keys are the names of the form controls and values are the input data from the user.
Both GET and POST are treated as $_GET and $_POST. These are superglobals, which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
$_GET is an array of variables passed to the current script via the URL parameters.$_POST is an array of variables passed to the current script via the HTTP POST method.


//When to use GET?
Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL). GET also has limits on the amount of information to send. The limitation is about 2000 characters. However, because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.
GET may be used for sending non-sensitive data.

Note: GET should NEVER be used for sending passwords or other sensitive information!

//When to use POST?
Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request) and has no limits on the amount of information to send.
Moreover POST supports advanced functionality such as support for multi-part binary input while uploading files to server.However, because the variables are not displayed in the URL, it is not possible to bookmark the page.

Developers prefer POST for sending form data.

/*
                                                            Think SECURITY when processing PHP forms!
															
These pages will show how to process PHP forms with security in mind. Proper validation of form data is important to protect your form from hackers and spammers!

*/

Field	   Validation Rules

Name	   Required. + Must only contain letters and whitespace
E-mail	   Required. + Must contain a valid email address (with @ and .)
Website	   Optional. If present, it must contain a valid URL
Comment	   Optional. Multi-line input field (textarea)
Gender	   Required. Must select one

----------------------------------------------------What is the $_SERVER["PHP_SELF"]--------------------------------------------

The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.
So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page. This way, the user will get error messages on the same page as the form.

What is the htmlspecialchars() function?
The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.

###################################################Big Note on PHP Form Security##################################################

The $_SERVER["PHP_SELF"] variable can be used by hackers!

If PHP_SELF is used in your page then a user can enter a slash (/) and then some Cross Site Scripting (XSS) commands to execute.
Cross-site scripting (XSS) is a type of computer security vulnerability typically found in Web applications. XSS enables attackers to inject client-side script into Web pages viewed by other users.

---------------------------------------------------------PHP - Validate Name-------------------------------------------------

The code below shows a simple way to check if the name field only contains letters, dashes, apostrophes and whitespaces. If the value of the name field is not valid, then store an error message:

$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed";
}

The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.

---------------------------------------------------------PHP - Validate E-mail-----------------------------------------------

The easiest and safest way to check whether an email address is well-formed is to use PHP filter_var() function.

In the code below, if the e-mail address is not well-formed, then store an error message:

$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}

--------------------------------------------------------PHP - Validate URL---------------------------------------------------

The code below shows a way to check if a URL address syntax is valid (this regular expression also allows dashes in the URL). If the URL address syntax is not valid, then store an error message:

$website = test_input($_POST["website"]);
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "Invalid URL";
}

--------------------------------------------------------The PHP Date() Function---------------------------------------------

The PHP date() function formats a timestamp to a more readable date and time.

Syntax:

date(format,timestamp)

Parameter	Description
format	    Required. Specifies the format of the timestamp
timestamp	Optional. Specifies a timestamp. Default is the current date and time

A timestamp is a sequence of characters, denoting the date and/or time at which a certain event occurred.



--------------------------------------------------------Get a Date-------------------------------------------------

The required format parameter of the date() function specifies how to format the date (or time).

Here are some characters that are commonly used for dates:

d - Represents the day of the month (01 to 31)
m - Represents a month (01 to 12)
Y - Represents a year (in four digits)
l (lowercase 'L') - Represents the day of the week
Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.

The example below formats today date in three different ways:

Example:

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

