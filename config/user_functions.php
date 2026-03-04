<?php

function createUser($pdo, $username, $email, $password, $role = 'user')
{
    try {
        $statement = $pdo->prepare("
            INSERT INTO users (username, email, password, role)
            VALUES (:username, :email, :password, :role)
        ");

        return $statement->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => hash_password($password),
            ':role' => $role
        ]);
    } catch (Exception $e) {
        error_log("Error creating user: " . $e->getMessage());
        return false;
    }
}


function getUserByUsername($pdo, $username)
{
    try {
        $statement = $pdo->prepare("
            SELECT id, username, email, password, role, created_at
            FROM users
            WHERE username = :username
            LIMIT 1
        ");

        $statement->execute([':username' => $username]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    } catch (\Exception $e) {
        error_log("Error finding user: " . $e->getMessage());
        return null;
    }
}


function getUserByEmail($pdo, $email)
{
    try {
        $statement = $pdo->prepare("
            SELECT id, username, email, password, role, created_at
            FROM users
            WHERE email = :email
            LIMIT 1
        ");

        $statement->execute([':email' => $email]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    } catch (\Exception $e) {
        error_log("Error finding user: " . $e->getMessage());
        return null;
    }
}


function getUserById($pdo, $id)
{
    try {
        $statement = $pdo->prepare("
            SELECT id, username, email, password, role, created_at
            FROM users
            WHERE id = :id
            LIMIT 1
        ");

        $statement->execute([':id' => $id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    } catch (\Exception $e) {
        error_log("Error finding user: " . $e->getMessage());
        return null;
    }
}


function usernameExists($pdo, $username)
{
    try {
        $statement = $pdo->prepare("SELECT COUNT(*) as count FROM users WHERE username = :username");
        $statement->execute([':username' => $username]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result['count'] > 0;
    } catch (\Exception $e) {
        error_log("Error checking username: " . $e->getMessage());
        return false;
    }
}


function emailExists($pdo, $email)
{
    try {
        $statement = $pdo->prepare("SELECT COUNT(*) as count FROM users WHERE email = :email");
        $statement->execute([':email' => $email]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result['count'] > 0;
    } catch (\Exception $e) {
        error_log("Error checking email: " . $e->getMessage());
        return false;
    }
}

?>

