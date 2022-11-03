<?php

require 'lib.php';

echonl('--=== Bulls and Cows ===--');
echonl('--------------------------');
echonl('');

echo 'Generating a random number .... ';

$secret = mt_rand(1000, 9999);

echonl('Done!');

$saved = file_put_contents('secret.txt', $secret);
if ($saved == false) {
    error_log ('Failed to save to "secret.txt".');
}

echonl("It's a " . $secret . "!");


