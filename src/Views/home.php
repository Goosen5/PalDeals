<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME ?? 'PalDeals'; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        header { background: #333; color: white; padding: 10px; }
        nav { margin: 10px 0; }
        nav ul { list-style: none; }
        nav li { display: inline; margin-right: 20px; }
        footer { margin-top: 30px; border-top: 1px solid #ccc; padding-top: 10px; }
    </style>
</head>
<body>
    <header>
        <h1><?php echo APP_NAME ?? 'PalDeals'; ?></h1>
    </header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/?page=about">About</a></li>
        </ul>
    </nav>
    <main>
        <h2>Welcome to <?php echo APP_NAME ?? 'PalDeals'; ?></h2>
        <p>This is your basic PHP application.</p>
    </main>
    <footer>
        <p>&copy; 2025 <?php echo APP_NAME ?? 'PalDeals'; ?></p>
    </footer>
</body>
</html>
