<?php

use Engine\Ignition;

/* ------------------------------------------------ */
/* -- This section for development purposes only -- */
/* ------------------------------------------------ */
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
require_once __DIR__ . '/vendor/debug/print_d.php';
/* ------------------------------------------------ */

require_once __DIR__ . '/vendor/engine/Ignition.php';

Ignition::start();

