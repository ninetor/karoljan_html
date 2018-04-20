<?php

$params = require('admietnasc/params.php');
require('admietnasc/engine.php');
$resultsTextArray=require('admietnasc/results.php');
$results = isset($_SESSION['CUR_USER']) && isset($_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['RESULTS'])
    ? $_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['RESULTS']
    : 0;
$results = round(($results / 5) * 100);

$results = in_array($results, array(0, 10, 20))
    ? 20
    : $results
;

$finalArray=array();

foreach($resultsTextArray as $key=> $res){
   if($results >= $res['percent_min'] AND $results <= $res['percent_max']){
       $finalArray=$res;

   }
}

$finalArray['slogan']=str_replace("[[##percent##]]", $results, $finalArray['slogan']);
