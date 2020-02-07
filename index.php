<?php
declare(strict_types= 1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

//ex1: declared was not defined, function was not called
function new_exercise() {
    $x = 1;
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}
new_exercise();

//ex 2, array starts with an index of 0 not 1

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];
echo $monday;

// ex3, FRENCH TICKS!!
echo $break = "<br>";
$str = "Debugged ! also very fun";
echo substr($str, 0, 10);

//ex4, by using "&" before $day, it will take the string, -3 it and then put  it back into the array
echo $break = "<br>";
foreach ($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}
print_r($week);

//ex5, loop keeps going, i used an if statement to break the loop when it reaches to the letter z
echo $break = "<br>";
$arr = [];
for ($letter = 'a', $letter !='aa'; $letter <= 'z'; $letter++) {
    array_push($arr, $letter);
    if ($letter  == 'z'){
        break;
    }
}
print_r($arr);

//ex6,
$arr = [];

function combineNames($str1, $str2) {
    $params = [$str1, $str2];
    foreach($params as $param) {
          array_push($arr, param) ;

    }
    echo implode($params, " - ");
}
//combineNames();
function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}


function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    
  //  $randname = array_rand($hero_firstnames,1 )."-".array_rand($hero_lastnames,1);
    $randFirstName = array_rand($hero_firstnames,1 );
    $randLastname = array_rand($hero_lastnames,1);
   // $randFirstName = $hero_firstnames[$randFirstName];
    //$randLastname = $hero_lastnames[$randLastname];
    $randname = $hero_firstnames[$randFirstName]."-".$hero_lastnames[$randLastname];
    return $randname;

}

echo "Here is the name: " . randomHeroName();

?>

