<?php

function respond($data, $status = 200) {
    http_response_code($status);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

function respond_error($message, $status = 400) {
    respond(['error' => $message], $status);
}