<?php

function outputUntitled($values, $options = null)
{
    $headers = ['X-BEAR-Output: untitled', 'Content-Type: text/html; charset=utf-8'];

    return new BEAR_Ro('<pre>' . print_r($values, true) . '</pre>', $headers);
}
