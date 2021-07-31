<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists(__DIR__ . '/../storage/framework/maintenance.php')) {
    require __DIR__ . '/../storage/framework/maintenance.php';
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__ . '/../bootstrap/app.php';
//
//function numToWordConverter($num)
//{
//    if (is_int($num) !== true || $num > 999999 || $num < 0) {
//        throw new Exception("Invalid input");
//    }
//    $wordArr = [];
//    $num = str_split((string)$num);
//    $num = array_chunk(array_reverse($num), 3); // separate digits into chunks of three
//    for ($x = 0; $x < count($num); $x++) {
//        $chunked = $num[$x];
//        for ($i = 0; $i < count($chunked); $i++) {
//            if ($i === 0) { // ones Or Thousands
//                $temp = retrieveWord($chunked[$i]);
//                if ($x === 1) { // check if we're already in the second chunk, if yes -> ones = thousandth place
//                    $temp = $temp . " Thousand";
//                }
//                array_push($wordArr, $temp);
//            } elseif ($i === 1) { // tens place
//                $temp = $chunked[$i] . $chunked[$i - 1];
//                if ((int)$temp > 9 && (int)$temp < 20) {
//                    array_push($wordArr, retrieveWord($temp));
//                    array_shift($wordArr);
//                } else {
//                    array_push($wordArr, retrieveWord($chunked[$i] . "0"));
//                }
//            } else { // hundredths place
//                array_push($wordArr, retrieveWord($chunked[$i]) . " Hundred");
//            }
//        }
//    }
//    return implode(" ", array_reverse($wordArr));
//}
//
//function retrieveWord(string $num): string
//{
//    switch ($num) {
//        case "0":
//            return "";
//        case "1":
//            return "One";
//        case "2":
//            return "Two";
//        case "3":
//            return "Three";
//        case "4":
//            return "Four";
//        case "5":
//            return "Five";
//        case "6":
//            return "Six";
//        case "7":
//            return "Seven";
//        case "8":
//            return "Eight";
//        case "9":
//            return "Nine";
//        case "10":
//            return "Ten";
//        case "11":
//            return "Eleven";
//        case "12":
//            return "Twelve";
//        case "13":
//            return "Thirteen";
//        case "14":
//            return "Fourteen";
//        case "15":
//            return "Fifteen";
//        case "16":
//            return "Sixteen";
//        case "17":
//            return "Seventeen";
//        case "18":
//            return "Eighteen";
//        case "19":
//            return "Nineteen";
//        case "20":
//            return "Twenty";
//        case "30":
//            return "Thirty";
//        case "40":
//            return "Forty";
//        case "50":
//            return "Fifty";
//        case "60":
//            return "Sixty";
//        case "70":
//            return "Seventy";
//        case "80":
//            return "Eighty";
//        case "90":
//            return "Ninety";
//    }
//}
//
//dd(
//    numToWordConverter(12345),
//    numToWordConverter(200),
//    numToWordConverter(1999),
//    numToWordConverter(999999)
//);
//---- v2 - comscentre version

function numToWordConverter($num)
{
    if ($num > 999999 || preg_match('/\.\d{3,}/', (string)$num)) {
//        throw new Exception("Invalid input");
        return [
            'invalid',
            $num
        ];
    }
    $num = explode('.', $num);
    return $num;
    $wordArr = [];
    $num = str_split((string)$num);
    $num = array_chunk(array_reverse($num), 3); // separate digits into chunks of three
    for ($x = 0; $x < count($num); $x++) {
        $chunked = $num[$x];
        for ($i = 0; $i < count($chunked); $i++) {
            if ($i === 0) { // ones Or Thousands
                $temp = retrieveWord($chunked[$i]);
                if ($x === 1) { // check if we're already in the second chunk, if yes -> ones = thousandth place
                    $temp = $temp . " Thousand";
                }
                array_push($wordArr, $temp);
            } elseif ($i === 1) { // tens place
                $temp = $chunked[$i] . $chunked[$i - 1];
                if ((int)$temp > 9 && (int)$temp < 20) {
                    array_push($wordArr, retrieveWord($temp));
                    array_shift($wordArr);
                } else {
                    array_push($wordArr, retrieveWord($chunked[$i] . "0"));
                }
            } else { // hundredths place
                array_push($wordArr, retrieveWord($chunked[$i]) . " Hundred");
            }
        }
    }
    return implode(" ", array_reverse($wordArr));
}

function retrieveWord(string $num): string
{
    switch ($num) {
        case "0":
            return "";
        case "1":
            return "One";
        case "2":
            return "Two";
        case "3":
            return "Three";
        case "4":
            return "Four";
        case "5":
            return "Five";
        case "6":
            return "Six";
        case "7":
            return "Seven";
        case "8":
            return "Eight";
        case "9":
            return "Nine";
        case "10":
            return "Ten";
        case "11":
            return "Eleven";
        case "12":
            return "Twelve";
        case "13":
            return "Thirteen";
        case "14":
            return "Fourteen";
        case "15":
            return "Fifteen";
        case "16":
            return "Sixteen";
        case "17":
            return "Seventeen";
        case "18":
            return "Eighteen";
        case "19":
            return "Nineteen";
        case "20":
            return "Twenty";
        case "30":
            return "Thirty";
        case "40":
            return "Forty";
        case "50":
            return "Fifty";
        case "60":
            return "Sixty";
        case "70":
            return "Seventy";
        case "80":
            return "Eighty";
        case "90":
            return "Ninety";
    }
}

try {
    dd(
        numToWordConverter(123.45),
        numToWordConverter(123.455),
        numToWordConverter(123)
    );
} catch (\Exception $e) {
    dd($e->getMessage());
}


$kernel = $app->make(Kernel::class);

$response = tap($kernel->handle(
    $request = Request::capture()
))->send();

$kernel->terminate($request, $response);
