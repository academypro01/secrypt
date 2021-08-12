<?php
// set your own key here
$your_key = "[type_your_secret_key_here]";
define("ENCRYPT_KEY", hash("sha256", $your_key));