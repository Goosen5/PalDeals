<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME ?? 'PalDeals'; ?></title>
    <link rel="stylesheet" href="/assets/css/home.css">
</head>
<body>
    <header>
        <div class="header-separator"></div>
    </header>
    <main>
        <div class="games-panel">
            <?php
            $games = [
                ['name' => 'Elden Ring', 'platform' => 'Steam', 'price' => 39.99, 'oldPrice' => 59.99, 'discount' => 33, 'genre' => 'RPG', 'developer' => 'FromSoftware', 'description' => 'Rise, Tarnished, and become an Elden Lord in the Lands Between.'],
                ['name' => 'Cyberpunk 2077', 'platform' => 'Steam', 'price' => 29.99, 'oldPrice' => 59.99, 'discount' => 50, 'genre' => 'RPG', 'developer' => 'CD Projekt RED', 'description' => 'Explore Night City in this open-world action adventure RPG.'],
                ['name' => 'Baldur\'s Gate 3', 'platform' => 'Steam', 'price' => 46.99, 'oldPrice' => 59.99, 'discount' => 22, 'genre' => 'RPG', 'developer' => 'Larian Studios', 'description' => 'Gather your party and return to the Forgotten Realms.'],
                ['name' => 'Hogwarts Legacy', 'platform' => 'Steam', 'price' => 28.99, 'oldPrice' => 59.99, 'discount' => 52, 'genre' => 'Action', 'developer' => 'Avalanche Software', 'description' => 'Experience Hogwarts in the 1800s and uncover ancient secrets.'],
                ['name' => 'God of War', 'platform' => 'Steam', 'price' => 24.99, 'oldPrice' => 49.99, 'discount' => 50, 'genre' => 'Action', 'developer' => 'Santa Monica Studio', 'description' => 'Kratos and Atreus journey through the Norse realms.'],
                ['name' => 'Red Dead Redemption 2', 'platform' => 'Rockstar', 'price' => 21.99, 'oldPrice' => 59.99, 'discount' => 63, 'genre' => 'Adventure', 'developer' => 'Rockstar Games', 'description' => 'An epic tale of life in America at the dawn of the modern age.'],
            ];
            ?>

            <div class="panel-toolbar">
                <input id="searchInput" type="text" placeholder="Search games..." />
                <select id="platformFilter">
                    <option value="all">All platforms</option>
                    <option value="Steam">Steam</option>
                    <option value="Rockstar">Rockstar</option>
                </select>
            </div>

            <div id="gameGrid" class="game-grid">
                <?php foreach ($games as $index => $game): ?>
                    <div
                        class="game-card<?php echo $index === 0 ? ' active' : ''; ?>"
                        data-name="<?php echo htmlspecialchars($game['name']); ?>"
                        data-platform="<?php echo htmlspecialchars($game['platform']); ?>"
                        data-price="<?php echo number_format($game['price'], 2); ?>"
                        data-old-price="<?php echo number_format($game['oldPrice'], 2); ?>"
                        data-discount="<?php echo (int) $game['discount']; ?>"
                        data-genre="<?php echo htmlspecialchars($game['genre']); ?>"
                        data-developer="<?php echo htmlspecialchars($game['developer']); ?>"
                        data-description="<?php echo htmlspecialchars($game['description']); ?>"
                    >
                        <div class="card-top">
                            <span class="badge-platform"><?php echo htmlspecialchars($game['platform']); ?></span>
                            <span class="badge-discount">-<?php echo (int) $game['discount']; ?>%</span>
                        </div>
                        <div class="cover-placeholder"></div>
                        <h3 class="card-title"><?php echo htmlspecialchars($game['name']); ?></h3>
                        <div class="card-prices">
                            <span class="price-current">$<?php echo number_format($game['price'], 2); ?></span>
                            <span class="price-old">$<?php echo number_format($game['oldPrice'], 2); ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
            
        <div class="selected-game">
            <div class="hero">
                <h2 id="detailTitle" class="hero-title"><?php echo htmlspecialchars($games[0]['name']); ?></h2>
            </div>
            <div class="detail-price-row">
                <span id="detailDiscount" class="badge-discount">-<?php echo (int) $games[0]['discount']; ?>%</span>
                <span id="detailPrice" class="price-current">$<?php echo number_format($games[0]['price'], 2); ?></span>
                <span id="detailOldPrice" class="price-old">$<?php echo number_format($games[0]['oldPrice'], 2); ?></span>
            </div>

            <ul class="detail-meta">
                <li><strong>Platform:</strong> <span id="detailPlatform"><?php echo htmlspecialchars($games[0]['platform']); ?></span></li>
                <li><strong>Genre:</strong> <span id="detailGenre"><?php echo htmlspecialchars($games[0]['genre']); ?></span></li>
                <li><strong>Developer:</strong> <span id="detailDeveloper"><?php echo htmlspecialchars($games[0]['developer']); ?></span></li>
            </ul>

            <p id="detailDescription" class="detail-description"><?php echo htmlspecialchars($games[0]['description']); ?></p>

            <button class="buy-button">Buy now</button>
        </div>
    </main>
    <footer>
        <div class="header-separator"></div>
    </footer>

    <script src="/assets/js/home.js"></script>
</body>
</html>
