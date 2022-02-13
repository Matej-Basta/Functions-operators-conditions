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

?>