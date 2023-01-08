<?php

require "vendor/autoload.php";

use \Hisoka\Env\Data;

$env = Data::getEnv('.env.dev');

echo json_encode( $env );