<?php
require 'classes/Product.php';
require 'classes/ProductCatalogue.php';
session_start();
$codeSession = $_GET["code"];
$catalogue = new ProductCatalogue('products.json');
$product = $catalogue->getProduct($codeSession);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css"></link>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" media="screen"></link>
    <link rel="stylesheet" href="css/detailPage.css" media="screen"></link>
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
    <p class="covidText">covid-19 information <a href="#" style="color: gray;">here</a></p>
    <section class="webshop">
    <div class="webshop__content">
                <div class="product">
                    <div class="shoes">
                    <img src="<?php echo $product->getImage() ?>"></img>
                    <img src="<?php echo $product->getDetail1() ?>"></img>
                    <img src="<?php echo $product->getDetail2() ?>"></img>
                    <img src="<?php echo $product->getDetail3() ?>"></img>
                    <img src="<?php echo $product->getDetail4() ?>"></img>
                    </div>
                    <div class="information">
                    <h3><?php echo $product->getTitle() ?></h3>
                    <p class="siz">
                        size
                    </p>
                    <div class="sizes">
                        <button>EU 36</button>
                        <button>EU 37</button>
                        <button>EU 38</button>
                        <button>EU 39</button>
                        <button>EU 40</button>
                        <button>EU 41</button>
                        <button>EU 42</button>
                        <button>EU 43</button>
                        <button>EU 44</button>
                        <button>EU 45</button>
                        <button>EU 47</button>
                        <button class="special">EU 48</button>
                        <button class="special">EU 49</button>
                        <button class="special">EU 50</button>
                    </div>
                    <div class="buttons">
                    <a href="cart.php?action=add_product&code=<?php echo $product->getCode() ?>"><button class="clickAdd1">CHECK OUT</button></a>
                    <button class="clickAdd2">FAVOURITE <i class="far fa-heart"></i></button>
                    </div>
                    <p class="info">This product is only available this month.</p>
                </div>
                </div>
            </div>
        </section>
        <p class="head-shoe-detail">You might also like this</p>
    <div class="owl-carousel owl-theme">
        <div class="item"><img src="img/schoen1.png"></div>
        <div class="item"><img src="img/schoen2.png"></div>
        <div class="item"><img src="img/schoen3.png"></div>
        <div class="item"><img src="img/schoen4.png"></div>
        <div class="item"><img src="img/schoen5.png"></div>
        <div class="item"><img src="img/schoen6.png"></div>
    </div>
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