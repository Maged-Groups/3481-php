<?php

$valid_tokens = ['abc123', 'xyz789'];

function check_token($token) {
    global $valid_tokens;

    if ($token === '') return false;
    if (!in_array($token, $valid_tokens)) return false;

    return true;
}