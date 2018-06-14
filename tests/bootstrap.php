<?php

error_reporting(E_ERROR);

$_SERVER['bearmode'] = 100;
require_once dirname(__DIR__) . '/App.php';
restore_error_handler();
restore_exception_handler();


