<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME ?? 'PalDeals'; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .header-separator { height: 2rem; background: #3d85ab; margin-bottom: 10px;width: 50%; border-radius: 15px; }
        header {color: white; padding: 10px; align-items: center; display: flex; justify-content: center;}
        main { display: flex; justify-content: center; }
        .games-panel { width: 60%; height: 47rem; background: #3d85ab98; border: 1px solid #ccc; border-radius: 10px; margin-right: 20px; }
        .selected-game { width: 60%; height: 47rem; background: #3d85ab98; border: 1px solid #bbb; border-radius: 10px; }
        footer { margin-top: 30px; padding-top: 10px; align-items: center; display: flex; justify-content: center;}
    </style>
</head>
<body>
    <header>
        <div class="header-separator"></div>
    </header>
    <main>
        <div class="games-panel"></div>
            <?php
            // This is where the games list will be displayed
            ?>
        <div class="selected-game">
            <?php
            // This is where the selected game details will be displayed
            ?>
        </div>
    </main>
    <footer>
        <div class="header-separator"></div>
    </footer>
</body>
</html>
