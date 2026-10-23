<?php

// Keep the gateway's existing URL while handling the request through Laravel.
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = __DIR__.'/index.php';
$_SERVER['PHP_SELF'] = '/index.php';

require __DIR__.'/index.php';
