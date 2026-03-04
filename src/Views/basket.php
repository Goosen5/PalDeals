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
            <a class="back-home-btn" href="/" title="Retour à l'accueil">
                <span class="arrow-left">&#8592;</span>
            </a>
            <div class="count-diamond"> <!--rotated div to act as a diamond--> 
                <div class="count-diamond-inner"> 
                    <span class="count">3</span><!--inner div to rotate back the text-->
                </div>
            </div>
            <div class="basket-items">
                <div class="basket-row">
                    <span>Jeu 1</span>
                    <span>Prix</span>
                </div>
                <div class="basket-row">
                    <span>Jeu 2</span>
                    <span>Prix</span>
                </div>
                <div class="basket-row">
                    <span>Jeu 3</span>
                    <span>Prix</span>
                </div>
            </div>
            <div class="separator"></div>
            <div class="total">
                <span>Total</span>
                <span>89.97$</span>
            </div>
            <!-- <button class="checkout-button">Checkout</button> -->
             <button class="checkout-button">Checkout</button>
        </div>
    </div>
</main>