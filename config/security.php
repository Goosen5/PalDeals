<?php

function hash_password(string $password): string{
    return password_hash($password, PASSWORD_DEFAULT);
}

function verify_password(string $password, string $hash): bool{
    return password_verify($password, $hash);
}
?>

