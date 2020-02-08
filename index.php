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

//ex6, combineNames function is redundant, $arr array was not used, adding parameters on combineNames
echo $break = "<br>";
$arr = [];
function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as $param) {
        if ($param == "") {
            $param = randomHeroName();
            array_push($arr, $param) ;
        }
    }
    return implode($params, " - ");
}


function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes)-1)][rand(0, 10)];

    return $randname;
}

echo "Here is the name: " . combineNames(randomHeroName(),randomHeroName());

//ex7, date given must be an  integer, so using (int)  to display date correctly
echo $break = "<br>";
function copyright(int $year) {
    echo "&copy; $year BeCode";
}
//print the copyright
echo $break = "<br>";
copyright((int)date('Y'));

//ex8, two removed 2nd return in function login and concatonated 'welcome john and smith. replaced third return with an else statement.
echo $break = "<br>";
function login(string $email, string $password) {
    if($email == 'john@example.be' || $password == 'pocahontas') {
        echo 'Welcome John'.' '.'Smith';

    }else{
        echo 'No access';
    }

}
//should greet the user with his full name (John Smith)
$login = login('john@example', 'pocahontas');
//no access
echo $break = "<br>";
$login = login('john@example', 'dfgidfgdfg');
echo $break = "<br>";
//no access
$login = login('wrong@example', 'wrong');

//ex 9,
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) == true) {
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}
//invalid link
isLinkValid('http://www.google.com/hack.pdf');
//invalid link
isLinkValid('https://google.com');
//VALID link
isLinkValid('http://google.com');
//VALID link
isLinkValid('http://google.com/test.txt');

?>

