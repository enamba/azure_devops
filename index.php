<?php
require_once("src/Calc.php");

$string = file_get_contents("config/app.json");
$json_a = json_decode($string, true);

header('version: ' . $json_a['version']);
header('environment: ' . $json_a['environment']);
header('database: ' . $json_a['databaseTarget']);

$a = $_GET['a'];
$b = $_GET['b'];
$operation = $_GET['op'];

if (!isset($a) || !isset($b) || !isset($operation)) 
{
    print '{"errorcode":"400","message":"parameters required: (number)a, (number)b and (string)op [sum|min]"}';
    return ;
}

try 
{
    $calculator = new Calc($a, $b);
    $result = $calculator->$operation();    
}
catch (Error $e) 
{
    print '{"errorcode":"500","message":"invalid operator: '.$operation.'"}';
    return;
}

print '{"a":"'.$a.'","b":"'.$b.'","operation":"'.$operation.'","result": "' . $result . '"}';
