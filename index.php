<?php
$linkCss = '<link rel="stylesheet" href="style.css">';
$linkJS = '<script src="index.js" type="text/javascript"></script>';
$linkCatalog = 'href="page/catalog.php"';
$linkHome = '';
$linkHeader = 'lib/header.php';
$linkFooter = 'lib/footer.php';
$linkImg = 'img/';
$linkBasket = 'page/';
$linkJS = '';
$namePage = 'Electronic Shop - Главная';
$activePage = array('Home' => 'active', 'About' => '', 'Contact us' => '', 'Catalog' => '',);

require_once('lib/header.php');
?>
    
    <div class="hero-main">
        <div class="container">
            <div class="hero-text">
                <h4>Pro.Beyond.</h4>
                <h1>IPhone 14 <span>Pro</span></h1>
                <p>Created to change everything for the better. For everyone</p>
                <a href="page/catalog.html"><button>Shop Now</button></a>
            </div>
            <img src="img/Iphone.png" alt="">
        </div>
    </div>

    <div class="banners">
        <div class="left-banners">
            <div class="top-banner">
                <img src="img/PlayStation5.png" alt="">
                <div class="content">
                    <h3>Playstation 5</h3>
                    <p>Incredibly powerful CPUs, GPUs, and an SSD with integrated I/O will redefine your PlayStation experience.</p>
                </div>
            </div>
            <div class="bottom-banners">
                <div class="left-banner">
                    <img src="img/AirPodsMax.png" alt="">
                    <div class="content">
                        <h4>Apple<br>AirPods<br><span>Max</span></h4>
                        <p>Computational audio. Listen, it's powerful</p>
                    </div>
                </div>
                <div class="right-banner">
                    <img src="img/AppleVisionPro.png" alt="">
                    <div class="content">
                        <h4>Apple<br>Vision <span>Pro</span></h4>
                        <p>An immersive way to experience entertainment</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="big-banner">
            <div class="content">
                <h2>Macbook<br><span>Air</span></h2>
                <p>The new 15‑inch MacBook Air makes room for more of what you love with a spacious Liquid Retina display.</p>
                <button>Shop Now</button>
            </div>
            <img src="img/MacBookPro14.png" alt="">
        </div>
    </div>

    <div class="category">
        <div class="container">
            <div class="top">
                <h3>Browse By Category</h3>
                <div class="nav-btn">
                    <img src="img/Arrow-left.png" alt="">
                    <img src="img/Arrow-right.png" alt="">
                </div>
            </div>
            <div class="category-slider">
                <div class="slide">
                    <img src="img/Phones.png" alt="">
                    <h5>Phones</h5>
                </div>
                <div class="slide">
                    <img src="img/SmartWatches.png" alt="">
                    <h5>Smart Watches</h5>
                </div>
                <div class="slide">
                    <img src="img/Cameras.png" alt="">
                    <h5>Cameras</h5>
                </div>
                <div class="slide">
                    <img src="img/Headphones.png" alt="">
                    <h5>Headphones</h5>
                </div>
                <div class="slide">
                    <img src="img/Computers.png" alt="">
                    <h5>Computers</h5>
                </div>
                <div class="slide">
                    <img src="img/Gaming.png" alt="">
                    <h5>Gaming</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="products container">
        <div class="tags">
            <h3 class="active">New Arrival</h3>
            <h3>Bestseller</h3>
            <h3>Featured Products</h3>
        </div>
        <div class="products-catalog">
            <div class="line">
                <div class="product">
                    <div class="like" onclick="activelike(0)"><img src="img/Like.png" alt="" title="Нравится" class="likeProduct"></div>
                    <img src="img/Iphone14pro.png" alt="">
                    <p>Apple iPhone 14 Pro Max 128GB Deep Purple</p>  
                    <h3>$900</h3>
                    <form action="lib/productBasket.php" method="post"><button name="product">Buy Now</button></form>
                </div>
                <div class="product">
                    <div class="like" onclick="activelike(1)"><img src="img/Like.png" alt="" title="Нравится" class="likeProduct"></div>
                    <img src="img/Blackmagic.png" alt="">
                    <p>Blackmagic Pocket Cinema Camera 6k</p>
                    <h3>$2535</h3>
                    <button>Buy Now</button>
                </div>
                <div class="product">
                    <div class="like" onclick="activelike(2)"><img src="img/Like.png" alt="" title="Нравится" class="likeProduct"></div>
                    <img src="img/AppleWatch.png" alt="">
                    <p>Apple Watch Series 9 GPS 41mm Starlight Aluminium </p>
                    <h3>$399</h3>
                    <button>Buy Now</button>
                </div>
                <div class="product">
                    <div class="like" onclick="activelike(3)"><img src="img/Like.png" alt="" title="Нравится" class="likeProduct"></div>
                    <img src="img/AirPods.png" alt="">
                    <p>AirPods Max Silver Starlight Aluminium </p>
                    <h3>$549</h3>
                    <button>Buy Now</button>
                </div>
            </div>
            <div class="line">
                <div class="product">
                    <div class="like" onclick="activelike(4)"><img src="img/Like.png" alt="" title="Нравится" class="likeProduct"></div>
                    <img src="img/SamsungWatch.png" alt="">
                    <p>Samsung Galaxy Watch6 Classic 47mm Black</p>
                    <h3>$369</h3>
                    <button>Buy Now</button>
                </div>
                <div class="product">
                    <div class="like" onclick="activelike(5)"><img src="img/Like.png" alt="" title="Нравится" class="likeProduct"></div>
                    <img src="img/GalaxyFold.png" alt="">
                    <p>Galaxy Z Fold5 Unlocked | 256GB | Phantom Black</p>
                    <h3>$1799</h3>
                    <button>Buy Now</button>
                </div>
                <div class="product">
                    <div class="like" onclick="activelike(6)"><img src="img/Like.png" alt="" title="Нравится" class="likeProduct"></div>
                    <img src="img/GalaxyBuds.png" alt="">
                    <p>Galaxy Buds FE Graphite</p>
                    <h3>$99.99</h3>
                    <button>Buy Now</button>
                </div>
                <div class="product">
                    <div class="like" onclick="activelike(7)"><img src="img/Like.png" alt="" title="Нравится" class="likeProduct"></div>
                    <img src="img/Ipad.png" alt="">
                    <p>Apple iPad 9 10.2" 64GB Wi-Fi Silver (MK2L3) 2021</p>
                    <h3>$398</h3>
                    <button>Buy Now</button>
                </div>
            </div>
        </div>
    </div>

    <div class="second-banners">
        <div class="banner first">
            <div class="img-banner"><img src="img/PopularProducts.png" alt=""></div>
            <div class="content">
                <h2>Popular Products</h2>
                <p>iPad combines a magnificent 10.2-inch Retina display, incredible performance, multitasking and ease of use.</p>
                <button>Shop Now</button>
            </div>
        </div>
        <div class="banner second">
            <div class="img-banner"><img src="img/IpadPro.png" alt=""></div>
            <div class="content">
                <h2>Ipad Pro</h2>
                <p>iPad combines a magnificent 10.2-inch Retina display, incredible performance, multitasking and ease of use.</p>
                <button>Shop Now</button>
            </div>
        </div>
        <div class="banner third">
            <div class="img-banner"><img src="img/SamsungGalaxy.png" alt=""></div>
            <div class="content">
                <h2>Samsung Galaxy </h2>
                <p>iPad combines a magnificent 10.2-inch Retina display, incredible performance, multitasking and ease of use.</p>
                <button>Shop Now</button>
            </div>
        </div>
        <div class="banner fourth">
            <div class="img-banner"><img src="img/MacbookPro.png" alt=""></div>
            <div class="content">
                <h2>Macbook Pro</h2>
                <p>iPad combines a magnificent 10.2-inch Retina display, incredible performance, multitasking and ease of use.</p>
                <button>Shop Now</button>
            </div>
        </div>
    </div>

    <div class="discount-products">
        <div class="container">
            <h2>Discounts up to -50%</h2>
            <div class="products-row">
                <div class="product">
                    <div class="like" onclick="activelike()"><img src="img/Like.png" alt="" title="Нравится" class="test"></div>
                    <img src="img/Iphone14ProDiscount.png" alt="">
                    <p>Apple iPhone 14 Pro 512GB Gold (MQ233)</p>
                    <h3>$1437</h3>
                    <button>Buy Now</button>
                </div>
                <div class="product">
                    <div class="like" onclick="activelike()"><img src="img/Like.png" alt="" title="Нравится" class="test"></div>
                    <img src="img/AirPodsMaxDiscount.png" alt="">
                    <p>AirPods Max Silver Starlight Aluminium</p>
                    <h3>$549</h3>
                    <button>Buy Now</button>
                </div>
                <div class="product">
                    <div class="like" onclick="activelike()"><img src="img/Like.png" alt="" title="Нравится" class="test"></div>
                    <img src="img/AppleWatcheDiscount.png" alt="">
                    <p>Apple Watch Series 9 GPS 41mm Starlight Aluminium</p>
                    <h3>$399</h3>
                    <button>Buy Now</button>
                </div>
                <div class="product">
                    <div class="like" onclick="activelike()"><img src="img/Like.png" alt="" title="Нравится" class="test"></div>
                    <img src="img/Iphone14Pro2Discount.png" alt="">
                    <p>Apple iPhone 14 Pro 1TB Gold (MQ2V3)</p>
                    <h3>$1499</h3>
                    <button>Buy Now</button>
                </div>
            </div>
        </div>
    </div>

    <div class="summerSale">
        <div class="content">
            <h1>Big Summer <span>Sale</span></h1>
            <p>Commodo fames vitae vitae leo mauris in. Eu consequat.</p>
            <button>Shop Now</button>
        </div>
    </div>

<?php
require_once('lib/footer.php');
?>
