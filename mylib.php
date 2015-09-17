<?php



//Palindrom Detector
function palindromDetector($string){
  $lowerCase = strtolower($string);
  $rstring = strrev ($lowerCase);
  if($lowerCase == $rstring) {
    echo " is a Palindrom!";
  } else {
      echo $string . "is not a Palindrom";
  }
}


echo palindromDetector($string) . "<br>";
echo Rstring($string) . "<br>";
//Write a function to reverse a string.
function Rstring($string)
{
  return strrev ($string );
}

//Write a function that checks if a string is all lower case.
function check_LowerCase($string) {
  $lowerCase = strtolower($string);
  if($string === $lowerCase) {
    echo $string . " is all lowercased";
  } else {
    echo $string . " not all lowercased.";
  }

}

echo "<br>" . check_LowerCase($string);

//Write a function that turns a unix timestamp into a readable date and time.
function dateTime() {
  return "Date: " . gmDate("m-d-Y") . "  |  Time: " . gmDate("H:i");
}

/*Write a function that converts and returns just the file name from a URL
example: ‘http://www.weblab.com/weblab/index.php
result: ‘index.php’*/
/*
function baseName() {
  echo $_SERVER['QUERY_STRING'];
}
*/

/*Write a function that returns the last sentence of a string.
example: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.’
result: 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.’*/


/*Write a function that returns the first part of an email address
example: david@drj.io
result: david */

/*Write a function that puts a list of items from a form into an array (text field)
example:
bread
milk
cheese
apples
result: [‘bread’,’milk’,’cheese’,’apples’]
Build an array of IPs and run a function on each ip to grab the Telize Geolocation information, using CURL*/

//Write a function that sorts the items of an array.

//Write a function that converts currency from one type to another.  (USD, EUR, YEN, GBP)

/*Write a function that converts an integer to currency with 2 decimal places and a dollar sign and commas.
Example: 1000 result: $1,000.00
example: 100 result: $100.00
example: 20001.50 result: $20001.50*/
function curConvert($string) {
  if(is_numeric($string)){
    echo "$" . $string . "<br>";
  }
}

echo curConvert($string);


//Write a function that takes a JSON string and converts it to an array and displays the result in a table.
