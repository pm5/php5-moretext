<?php

require __DIR__ . "/vendor/autoload.php";

$moretext = new Moretext\Client();
foreach ($moretext->get(5, [20, 30]) as $sentence) {
    echo $sentence . "\n";
}
