<?php
    echo "current php version " . phpversion() . "<br>";
    $defaulttime = date_default_timezone_get();

    echo "the default timezone is " . $defaulttime;
    echo "<br>";

    date_default_timezone_set("Europe/Madrid");
    $changedtime = date_default_timezone_get();

    echo "now it is changed to " . $changedtime;
?>