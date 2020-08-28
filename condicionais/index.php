<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$climate = 'cold';


if ($climate == 'cold')
    echo "It's freezing!" . '<br><br>';


$bool = '1';

$boolReturn = $bool == 1 ? 'bool is igual to 1' : 'bool is igual to 1';

echo $boolReturn . '<br><br>';

$boolReturn = $bool === 1 ? 'bool is igual to 1' : 'bool is igual to 1';

echo $boolReturn . '<br><br>';

$boolReturn = $bool != 1 ? 'bool is igual to 1' : 'bool is igual to 1';

echo $boolReturn . '<br><br>';

$boolReturn = $bool !== 1 ? 'bool is igual to 1' : 'bool is igual to 1';

echo $boolReturn . '<br><br>';

$phrase = "My father has one dog blue and pink";

if (strpos($phrase, 'cachorro'))
    echo "I FIND THE DOG";
else
    echo "DOESN'T FIND ANY DOG";

echo '<br><br>';

if (strpos($phrase, 'My') !== false)
    echo "I find the My";
else
    echo "Doesn't find any My";

echo '<br><br>';

switch ($climate) {
    case 'cold':
        echo "I love cold climate";
        break;
    case 'warm':
        echo "Warm is better than cold";
        break;
    case 'hot':
        echo "I hate hot climate";
        break;
    default:
        echo "I just liked warm and cold climates";
        break;
}

echo '<br><br>';

echo "de $climatse olah";
