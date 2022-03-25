<?php
require 'vendor/autoload.php';

echo "\nRunning app_alternative.php\n\n";

use HelloWorld\SayHello;
echo SayHello::world() . "\n";

use HelloCodeSeed\SayHello as SayCodeSeed;
echo SayCodeSeed::codeseed() . "\n";

if (getenv('SAY_HELLO_ENV') !== false) {
    echo SayCodeSeed::environment() . "\n\n";
}
