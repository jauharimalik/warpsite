<?php

require 'vendor/autoload.php';

use Ws\Ws_start;

$ws_start = new Ws_start();
$rupiah = $ws_start->boot("Ws\Lib\Rupiah");
echo $rupiah::format_rupiah(5000);

//echo $ws_start->klass(format_rupiah(5000));