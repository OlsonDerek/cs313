<?php

// set the cookie if they are done
setcookie('voted', 'true', time() + 1000000);

// write the results to the file
$file = file_get_contents('metrics.txt');

// make an array so we can manipulate some stuff in the file
$array = explode(";", $file);

// update the total votes
$array[1] = $array[1] + 1;

$count = count($array);

for ($i = 0; $i < $count; $i++) {
        if($array[$i] == $_POST['band'] || $array[$i] == $_POST['eat'] ||
           $array[$i] == $_POST['data'] || $array[$i] == $_POST['know'] ||
           $array[$i] == $_POST['right'])
        {
                $array[$i + 1] = $array[$i + 1] + 1;
        }
}

$file = implode(";", $array);

file_put_contents('metrics.txt', $file);

header('Location: http://dokinetix.com/Survey/results.php');

?>