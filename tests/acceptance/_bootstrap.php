<?php

require 'bootstrap/autoload.php';

$app = require 'bootstrap/app.php';

$app->instance('request', new \Illuminate\Http\Request);
$app->make('Illuminate\Contracts\Http\Kernel')->bootstrap();
