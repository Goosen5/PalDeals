<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME ?? 'PalDeals'; ?></title>
    <link rel="stylesheet" href="/assets/css/basket.css">
</head>
<body>
    <header>
        <div class="header-separator"></div>
    </header>
    <main>
        <div class="main-panel">
            <div class="count-diamond"> <!--rotated div to act as a diamond--> 
                <div class="count-diamond-inner"> <!--inner div to rotate back the text-->
                    <span class="count">3</span>
                </div>
            </div>
            <div class="basket-items">
                <div class="basket-item">
                    <div class="item-info">
                        <h3 class="item-title">Elden Ring</h3>
                        <p class="item-price">€59.99</p>
                    </div>
                <button class="remove-button">Remove</button>
                </div>
            </div>

        </div>
    </div>
</main>