<?php
require 'classes/Product.php';
require 'classes/ProductCatalogue.php';
require 'classes/ShoppingCart.php';

session_start();

/**
 * Als er nog geen winkelwagen is opgeslagen in de sessie
 * dan wordt hij hier aangemaakt en in de sessie opgeslagen
 */
if (empty($_SESSION['cart'])) {
    $_SESSION['cart'] = new ShoppingCart();
}

$productCatalogue = new ProductCatalogue('products.json');
$shoppingCart = $_SESSION['cart'];

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'add_product':
            $product_code = $_GET['code'];
            $product = $productCatalogue->getProduct($product_code);
            $shoppingCart->addProduct($product);
            header('Location: cart.php');
            break;
        case 'remove_item':
            $item_index = $_GET['item_index'];
            $shoppingCart->removeItem($item_index);
            header('Location: cart.php');
            break;
        case 'remove_all_items':
            $item_index = $_GET['item_index'];
            $shoppingCart->removeAll($item_index);
            header('Location: cart.php');
            break;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Winkelwagen</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
    <div class="popup">
        <div class="popup-content">
            <a class="close"><i class="far fa-times-circle"></i></a>
            <img class="imgPopup" src="img/logo.png" style="width: 250px; margin-top: 50px;" alt="">
            <p class="text1Pop">get weekly updates on the stocks and start your own subscription</p>
            <p class="text2Pop">This product is only available this month.</p>
            <input class="inputPop" type="text" placeholder="Username">
            <input class="inputPop" type="text" placeholder="Password">
            <input class="inputPopExtra" type="text" placeholder="First Name">
            <input class="inputPopExtra2" type="text" placeholder="Last Name">
            <input class="inputPopExtra3" type="text" placeholder="Country">
            <a class="ForgotPass">Forgot password</a>
            <p class="mem">Not a Member? <a class="memActive">Join us</a></p>
            <p class="mem2">Already a member? <a class="memActive2" >Sign in</a></p>
            <button class="popBut">SIGN IN</button>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<div class="Nav-bar">
        <a href="homepage.php"><img  src="img/logo.png" id="img"></a>
        <div class="nav">
        <div class="grid">
            <a id="button" href="homepage.php">Home</a>
            <a id="button" href="men.php">Mens</a>
            <a id="button" href="kid.php">Kids</a>
            <a id="button" href="women.php">Womens</a>
            <a id="button" href="abbonnementen.html">Subscription</a>
            </div>
            <div class="normal">
            <a id="button" href="men.php">Mens</a>
            <a id="button" href="kid.php">Kids</a>
            <a id="button" href="women.php">Womens</a>
            <a id="button" href="abbonnementen.html">Subscription</a>
            </div>
            <input id="searchMobile" type="search" placeholder="Search..." />
            <a id="shopMobile" href="cart.php"> <i class="fas fa-shopping-cart" style="
                font-size: 1.4em; margin-top: 20px; color: black;
            "></i></a>
        </div>

        <a id="persMobile" href="#">Join us</a>

        <div class="sideMen">
        <input id="search" type="search" placeholder="Search..." />
        <a id="shop" href="cart.php"> <i class="fas fa-shopping-cart" style="
            font-size: 1.8em; color: black;
        "></i></a>
        <a id="pers"><i class="fas fa-user-alt" style="font-size: 1.8em; color: black;"></i></a>
        </div>
    </div>
<section class="webshop">
    <div class="webshop__content">
        <div class="shopping-cart">
            <div class="infoSub">
                <p class="redLet">FREE DELIVERY FOR PRIME MEMBERS</p>
                <p class="let">Become a prime member to get fast and free delivery. <a href="abbonnementen.html">Join us</a></p>
            </div>
        <p class="bag">BAG</p>
        <div class="sum">
        <p class="summary">SUMMARY</p>
                <div class="limitContext">
                <p>Limit of shoes this month</p>
                <p class="special"><?php echo $shoppingCart->getTotalprice()?>/2</p>
                </div>
                <div class="deliveryContext">
                <p>Estimated Delivery</p>
                <p>$0.00</p>
                </div>
                <p class="line2"></p>
                <div class="total">
                <p class="price">Total <p class="price2"><?php echo $shoppingCart->getTotalprice()?>/<?php echo $shoppingCart->getTotalprice()?></p>
                </div>
                <?php foreach ($shoppingCart->getProducts() as $index => $product): ?>
                <?php endforeach; ?>
                <p class="line2"></p>
                <a href="cart.php?action=remove_all_items&item_index=<?php echo $index?>" class="cart__remove"><button class="clickAdd1">CHECK OUT</button></a>
         </div>

         <?php if ($shoppingCart->hasProducts()): ?>

                <?php foreach ($shoppingCart->getProducts() as $index => $product): ?>
                    <div class="shopping-cart__item">    
                        <img src="<?php echo $product->getImage() ?>">
                        <div class="info">
                        <h4><?php echo $product->getTitle() ?> </h4>
                        <p><?php echo $product->getDescription() ?></p>
                        <a href="cart.php?action=remove_item&item_index=<?php echo $index?>" class="cart__remove">Remove</a>
                        </div>
                        <p class="line"></p>
                    </div>
                <?php endforeach; ?>
                <div class="sumMobile">
        <p class="summary">SUMMARY</p>
                <div class="limitContext">
                <p>Limit of shoes this month</p>
                <p class="special"><?php echo $shoppingCart->getTotalprice()?>/2</p>
                </div>
                <div class="deliveryContext">
                <p>Estimated Delivery</p>
                <p>$0.00</p>
                </div>
                <p class="line2"></p>
                <div class="total">
                <p class="price">Total <p class="price2"><?php echo $shoppingCart->getTotalprice()?>/<?php echo $shoppingCart->getTotalprice()?></p>
                </div>
                <?php foreach ($shoppingCart->getProducts() as $index => $product): ?>
                <?php endforeach; ?>
                <p class="line2"></p>
                <a href="cart.php?action=remove_all_items&item_index=<?php echo $index?>" class="cart__remove"><button class="clickAdd1">CHECK OUT</button></a>
         </div>
            <?php else: ?>

                <p class="spec">Je hebt nog niets in je winkelmandje</p>

            <?php endif; ?>
        </div>
    </div>
</div>
            </section>
    <footer>
        <div class="combined">
            <div class="footTextHead">
                <a class="head" href="">GET HELP</a>
                <a class="head" href="">FIND STORE</a>
                <a class="head" href="">SIGN UP</a>
                <a class="head" href="">BECOME A MEMBER</a>
                <a class="head" href="">STUDENT DISCOUNT</a>
                <a class="head" href="">FEEDBACKS</a>
            </div>
            <div class="footText1">
                <a class="head" href="">GET HELP</a>
                <a class="side" href=""> Order status</a>
                <a class="side" href=""> Shipping and Delivery</a>
                <a class="side" href=""> Returns</a>
                <a class="side" href=""> Payments Options</a>
                <a class="side" href=""> Contact Us</a>
            </div>
            <div class="footText2">
                <a class="head" href="">ABOUT THRIFTSHOP</a>
                <a class="side" href=""> News</a>
                <a class="side" href=""> Careers</a>
                <a class="side" href=""> Investors</a>
                <a class="side" href=""> Sustainability</a>
            </div>
            <div class="tussen2">
                <ul>
                    <a class="colo" href="https://www.instagram.com/joey.kuijl/" target="_blank"><i style="font-size: 275%; @media screen and (max-width: 480px){ font-size: 150%; }" class="fab fa-instagram"></i></a>
                    <a class="colo" href="https://www.facebook.com/joey.vanderkuijl.90/" target="_blank"><i style="font-size: 275%; @media screen and (max-width: 480px){ font-size: 150%; }" class="fab fa-facebook-square"></i></a>
                    <a class="colo" href="https://www.linkedin.com/in/joey-van-der-kuijl-7377801a3/" target="_blank"><i style="font-size: 275%; @media screen and (max-width: 480px){ font-size: 150%; }" class="fab fa-linkedin"></i></a>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>