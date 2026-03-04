<?php


function handleRegister()
{
    global $pdo;

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return require BASE_PATH . '/src/Views/register.php';
    }

    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $password_confirm = $_POST['password_confirm'] ?? '';

    $error = validateRegistration($username, $email, $password, $password_confirm, $pdo);

    if ($error) {
        return require BASE_PATH . '/src/Views/register.php';
    }

    if (createUser($pdo, $username, $email, $password, 'user')) {
        $success = "Account created successfully! You can now <a href='/?page=login'>login</a>.";
        return require BASE_PATH . '/src/Views/register.php';
    } else {
        $error = "An error occurred while creating your account. Please try again.";
        return require BASE_PATH . '/src/Views/register.php';
    }
}


function validateRegistration($username, $email, $password, $password_confirm, $pdo)
{
    if (empty($username)) {
        return "Username is required";
    }
    if (strlen($username) < 3) {
        return "Username must be at least 3 characters";
    }
    if (strlen($username) > 20) {
        return "Username must not exceed 20 characters";
    }
    if (!preg_match('/^[a-zA-Z0-9_-]+$/', $username)) {
        return "Username can only contain letters, numbers, underscores and hyphens";
    }
    if (usernameExists($pdo, $username)) {
        return "Username already taken";
    }

    if (empty($email)) {
        return "Email is required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format";
    }
    if (emailExists($pdo, $email)) {
        return "Email already registered";
    }

    if (empty($password)) {
        return "Password is required";
    }
    if (strlen($password) < 8) {
        return "Password must be at least 8 characters";
    }
    if ($password !== $password_confirm) {
        return "Passwords do not match";
    }

    return null;
}

?>

