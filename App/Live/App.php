<?php

require_once 'BEAR.php';

define('_BEAR_APP_HOME', realpath(dirname(__DIR__)));
BEAR::init(BEAR::loadConfig(_BEAR_APP_HOME . '/App/app.yml', true));
