<?php
    // first we see what is the version of php
    echo "current php version " . phpversion() . "<br>";
    // showing the default timezone inside the php.ini file
    $defaulttime = date_default_timezone_get();

    echo "the default timezone is " . $defaulttime;
    echo "<br>";

    // change the default time to Madrid
    date_default_timezone_set("Europe/Madrid");
    $changedtime = date_default_timezone_get();
    echo "now it is changed to " . $changedtime;

    // find what is the execution time in php.ini
    $currentexetime = ini_get('max_execution_time');
    echo "<br>";
    echo "current execution time is " . $currentexetime;
?>