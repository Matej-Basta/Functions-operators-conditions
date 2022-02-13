<?php

function headline($text) {
    return "<h1>$text</h1>";
}

$inches = 12;

function inchesToCentimetres($inches) {
    return $inches * 2.54;
}

// echo inchesToCentimetres($inches);


$celsius = 100;

function celsiusToFahrenheit($celsius) {
    return $celsius * 9.5 + 32;
}

// echo celsiusToFahrenheit($celsius);

$temperature = 36.5;

function isHealthy($temperature, $type = "c") {
    switch($type) {
        case "c":
            $celsius = $temperature;
            break;
        case "f":
            $celsius = ($temperature - 32) / 9.5;
            break;
    }

    return $celsius < 37 ? "true" : "false";
}

// echo isHealthy(983, "f");

$number = 42;

function evenOrOdd($number) {
    return $number % 2 === 0 ? "even" : "odd";
}

// echo evenOrOdd(--$number);

$weekday = "Friday";

function sayWeekDay($day) {
    echo "Today is " . $day .  ".";
}

// sayWeekDay($weekday);

$year_of_birth = 1999;

function sayBirthday($year) {
    $this_year = date("Y");
    echo "I was born in " . $year . " so this year I am celebrating my " . $this_year - $year . ". birthday.";
}

// sayBirthday($year_of_birth);

function assessHeight($height) {
    if ($height >= 180) {
        return "tall";
    } elseif ($height >= 160) {
        return "average";
    } else {
        return "small";
    }
}

// echo assessHeight(145);

function getLanguageUse($language) {
    switch(strtolower($language)) {
        case "php":
        case "python":
        case "ruby":
            return "serverside";
            break;
        case "javascript":
            return "clientside";
            break;
        default:
            return "I don't know";
    }
}

// echo getLanguageUse("Php"); 

$time_served = 0;

// while($time_served < 10) {
//     echo "The prisoner has served " . $time_served++ . " years. <br>";
// }

// do {
//     echo "The prisoner has served " . $time_served++ . " years. <br>";
// } while($time_served < -4);

// for ($i = 1; $i < 6; $i++) {
//     echo "The prisoner has " . 5 - $i . " more years to serve. <br>";
// }

// for ($i = 10; $i >= 0; $i--) {
//     echo "The prisoner has " . $i . " more years to serve. <br>";
//     if ($i > 5) {
//         continue;
//     }
//     if ($i == 2) {
//         echo "Paroled!";
//         break;
//     }
//     echo "Going to a parole hearing... <br>";
// }


// $array = array();
// for($i = 1; $i <= 100; $i++) {
//     array_push($array, $i);
// }
 
// $string = "I am a simple string";
 
// // Create a variable $arrayDouble containing the double of each value of $array
// $arrayDouble = array_map(function($element) {return $element*2;}, $array);
// print_r($arrayDouble);
// echo "<br>";
// echo "<br>";
// // Create two variables $arrayEven and $arrayOdd containing the Even numbers contained in $array and the Odd numbers contained in $array
// $arrayEven = array_filter($array, function($element) {return $element % 2 === 0;});

// $arrayOdd = array_filter($array, function($element) {return $element % 2 === 1;});
// print_r($arrayEven);
// echo "<br>";
// echo "<br>";
// print_r($arrayOdd);
// echo "<br>";
// echo "<br>";
 
// // Create a variable $arrayProduct containing the product of each numbers of $array
// $arrayProduct = array_reduce($array, function($element1, $element2) {return $element1 * $element2;});
// $differentApproach = array_product($array);
// print_r($arrayProduct);
// echo "<br>";
// echo "<br>";
// print_r($differentApproach);
// echo "<br>";
// echo "<br>";


// // Create a variable $stringUpper containing the $string value in uppercase
// $stringUpper = strtoupper($string);
// print_r($stringUpper);
// echo "<br>";
// echo "<br>";
 
// // Create a variable $stringFirstUp containing the $string value with the first character in uppercase
// $stringFirstUp = ucwords($string);
// print_r($stringFirstUp);


// function square(float $val) 
// {
//     return $val*$val;
// }
 
// function squareRoot(float $val)
// {
//     return sqrt($val);
// }
 
// function calcHypotenuse(float $firstSideLength, float $secondSideLength) 
// {
//     /**
//      * Complete the code to calculate the length of the hypotenuse from the length of the
//      * first side and the second side using the square and squareRoot functions.
//      */
// $squared_length = square($firstSideLength) + square($secondSideLength);


//     $hypotenuseLength = null;
    
//     $hypotenuseLength = squareRoot($squared_length);
 
//     return $hypotenuseLength;
// }
 
// $firstSideLength = null;
// do {
//     $firstSideLength = readline("Please enter the first side length: ");
// } while($firstSideLength == null);
 
// $secondSideLength = null;
// do {
//     $secondSideLength = readline("Please enter the second side length: ");
// } while($secondSideLength == null);

 
// echo calcHypotenuse($firstSideLength, $secondSideLength);´

// $radius = null;
// do {
//     $radius = readline("Please enter the radius: ");
// } while($radius == null);
 
// $height = null;
// do {
//     $height = readline("Please enter the heigth: ");
// } while($height == null);

// function literInBottle($radius, $height) {
//     return pi() * $radius**2 * $height / 1000;
// }
 
// echo literInBottle($radius, $height);

// function compare($num1, $num2) {
//     return $num1 <=> $num2;
// }

// function giveClue($diff) {
//     switch($diff) {
//         case -1:
//             echo "The given number is too high.\n";
//             return true;
//             break;
//         case 1:
//             echo "the given number is too low.\n";
//             return true;
//             break;
//         case 0:
//             echo "success";
//             return false;
//             break;
//     }
// }

// function getGivenNumber() {
//     return readline("Please give a number: ");
// }

// function replay() {
//     switch(readline("Do you want to replay? (y/n) ")) {
//         case "y":
//             return true;
//             break;
//         case "n":
//             return false;
//             break;

//         default:
//             return true;
//     }
// }

// function play() {
//     $number = rand(0, 100);
    
    
//     do {
//         $givenValue = getGivenNumber();
//     } while (giveClue(compare($number, $givenValue)));
// }

// do {
//     play();
// } while(replay());

// $message = "I love coding";
// $length = strlen($message);

// echo "The length of the message '{$message}' is {$length}.";


// $calling_codes = [
//     'AR' => '+54',
//     'CZ' => '+420',
//     'DE' => '+49',
//     'HU' => '+36',
//     'US' => '+1'
//   ];
 
//   $country_names = [
//     'US' => 'USA',
//     'HU' => 'Hungary',
//     'CZ' => 'Czechia',
//     'AR' => 'Argentina',
//     'DE' => 'Germany',
//     'DK' => 'Denmark',
//     'IN' => 'India'
//   ];

//   $newArray = [];

//   foreach($calling_codes as $key => $value) {
//       $newArray[] = "The calling code of {$country_names[$key]} is {$value}.";
//   };

//   var_dump($newArray);

$cities = [
    "Tokyo" => 150, 
    "Mexico City" => 60,
    "New York City" => 200,
    "Mumbai" => 80,
    "Seoul" => 130,
    "Shanghai" => 90,
    "Lagos" => 60,
    "Buenos Aires" => 80,
    "Cairo" => 50,
    "London" => 180,
];

ksort($cities);

// $cities[] = "Los Angeles";
// $cities[] = "Calcutta";
// $cities[] = "Beijing";

// asort($cities);

// foreach($cities as $value) {
//     echo "<li>{$value}</li>";
// }

// $counter = count($cities);


// while($counter > 0) {
//     echo "{$cities[count($cities) - $counter]}, ";
//     $counter--;
// }

foreach($cities as $city => $price) {
    echo "A night in {$city} costs {$price} dollars. <br>";
};


?>