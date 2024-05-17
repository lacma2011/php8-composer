<?php
require './vendor/autoload.php';

use Carbon\Carbon;

printf("Right now is %s\n", Carbon::now()->toDateTimeString());
printf(
    "Right now in Vancouver is %s\n",
    Carbon::now('America/Vancouver')
);
printf("Tomorrow will be %s\n", Carbon::now()->addDay());
