<?php

ini_set('display_errors',1);

echo "<h1>Midgard2 installed: " . mgd_version() . "</h1>"; 

$re = new ReflectionExtension("midgard2");
$names = array();

echo "<h2>Available types: </h2>";

foreach ($re->getClasses() as $class_ref) {
        echo " - " . $class_ref->getName() . "</br>";
}

?>
