<?php

include_once __DIR__ . '/../src/moretext.php';

$moretext = new Moretext\Client();
foreach ($moretext->get(5, [20, 30]) as $sentence) {
    echo $sentence . "\n";
}
