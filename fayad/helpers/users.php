<?php

$users = [
    ['email' => 'user1@test.com', 'password' => '123456', 'token' => 'abc123'],
    ['email' => 'user2@test.com', 'password' => '123456', 'token' => 'xyz789'],
];

function find_user($email, $password) {
    global $users;

    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            return $user;
        }
    }

    return null;
}