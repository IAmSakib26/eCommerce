<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $sSiteTitle; ?></title>
    <meta name="description" content="<?php echo $sSiteTitle; ?>">
    <meta name="keywords" content="<?php echo $sSiteTitle; ?>">
    <!-- <meta http-equiv="refresh" content="600"> -->
    <meta name="author" content="<?php echo $sAuthor; ?>">
    <meta name="Developer" content="<?php echo $sDeveloper; ?>">
    <meta name="resource-type" content="document">
    <meta name="contact" content="<?php echo $sEmail; ?>">
    <meta name="copyright"
        content="Copyright (c) <?php echo date("Y"); ?>. All Rights &reg; Reserved by <?php echo $sSiteURL; ?>.">

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="googlebot-news" content="index, follow">
    <meta name="msnbot" content="index, follow">

    <meta property="fb:app_id" content="<?php echo $sAppId; ?>">
    <meta property="og:site_name" content="<?php echo $sSiteName; ?>">
    <meta property="og:title" content="<?php echo $sSiteTitle; ?>">
    <meta property="og:description" content="<?php echo $sSiteTitle; ?>">
    <meta property="og:url" content="<?php echo $sSiteURL; ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo $sLogoURLfb; ?>">
    <meta property="og:locale" content="en_US">

    <link rel="image_src" href="<?php echo $sLogoURLfb; ?>">

    <link rel="canonical" href="<?php echo $sSiteURL; ?>">
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo $sFavicon; ?>">
    <link type="image/x-icon" rel="icon" href="<?php echo $sFavicon; ?>">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php echo $sCSSBootStrap;
    echo $sCSSFontAwesome;
    echo $sCSSEMM; ?>
</head>

<body>
    <?php echo $sFbRoot; ?>
    <?php include_once("common/headertow.php"); ?>
    <main>
        <section class="SecHeading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="BGTitle">Popular</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="PNavBar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#">Tranding</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">BestSeller</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">New</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">On Sale</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="ImgGallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ProductCard">
                            <picture>
                                <img src="https://images.pexels.com/photos/52518/jeans-pants-blue-shop-52518.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="">
                            </picture>
                            <p class="SMTitle">Demin Jeans</p>
                            <p class="Price">$80.99</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ProductCard">
                            <picture>
                                <img src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="">
                            </picture>
                            <p class="SMTitle">Demin Jeans</p>
                            <p class="Price">$80.99</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ProductCard">
                            <picture>
                                <img src="https://images.pexels.com/photos/4456815/pexels-photo-4456815.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="">
                            </picture>
                            <p class="SMTitle">Demin Jeans</p>
                            <p class="Price">$80.99</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ProductCard">
                            <picture>
                                <img src="https://images.pexels.com/photos/4495705/pexels-photo-4495705.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="">
                            </picture>
                            <p class="SMTitle">Demin Jeans</p>
                            <p class="Price">$80.99</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ImgGallerytwo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="Banner">
                            <h2 class="BGTitle">New Winter Collection</h2>
                            <p class="SMTitle">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                                Vestibulum ac diam sit</p>
                            <p class="SMTitle">amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor
                                eget felis portt</p>
                            <p class="SMTitle">tor volutpat.</p>
                            <a href="#"><button class="shop-btn">All Catagories</button></a>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ProductCard">
                                    <picture>
                                        <img src="https://images.pexels.com/photos/52518/jeans-pants-blue-shop-52518.jpeg?auto=compress&cs=tinysrgb&w=600"
                                            alt="">
                                    </picture>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="SMTitle">Demin Jeans</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="Price">$80.99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ProductCard">
                                    <picture>
                                        <img src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=600"
                                            alt="">
                                    </picture>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="SMTitle">Demin Jeans</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="Price">$80.99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ProductCard">
                                    <picture>
                                        <img src="https://images.pexels.com/photos/4456815/pexels-photo-4456815.jpeg?auto=compress&cs=tinysrgb&w=600"
                                            alt="">
                                    </picture>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="SMTitle">Demin Jeans</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="Price">$80.99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ProductCard">
                                    <picture>
                                        <img src="https://images.pexels.com/photos/4495705/pexels-photo-4495705.jpeg?auto=compress&cs=tinysrgb&w=600"
                                            alt="">
                                    </picture>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p class="SMTitle">Demin Jeans</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="Price">$80.99</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="DiscountBanner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="Bannertow">
                            <h2 class="BGTitle">SEASON SALE</h2>
                            <h2 class="Title">UP TO 20% OFF</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="NewsLetter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="LetterBox">
                            <form>
                                <h2 class="Title">Subscrib to Newletter:</h2>
                                <input type="email" class="form-control" placeholder="Your email">
                                <button type="submit" class="btn">Subscrib</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="collection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="collectionHead">
                            <h2 class="BGTitle">From Our Collection</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="SMTitle">
                                    Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget
                                    consectetur sed, convallis at tellus.
                                </h3>
                            </div>
                            <div class="col-lg-6">
                                <div class="ButtonGroup">
                                    <button class="shop-btn">Spring</button>
                                    <button class="shop-btn">Summer</button>
                                    <button class="shop-btn">Fall</button>
                                    <button class="shop-btn">Winter</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ProductCard">
                                    <picture>
                                        <img src="https://images.pexels.com/photos/52518/jeans-pants-blue-shop-52518.jpeg?auto=compress&cs=tinysrgb&w=600"
                                            alt="">
                                    </picture>
                                    <p class="SMTitle">Demin Jeans</p>
                                    <p class="Price">$80.99</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ProductCard">
                                    <picture>
                                        <img src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=600"
                                            alt="">
                                    </picture>
                                    <p class="SMTitle">Demin Jeans</p>
                                    <p class="Price">$80.99</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ProductCard">
                                    <picture>
                                        <img src="https://images.pexels.com/photos/4456815/pexels-photo-4456815.jpeg?auto=compress&cs=tinysrgb&w=600"
                                            alt="">
                                    </picture>
                                    <p class="SMTitle">Demin Jeans</p>
                                    <p class="Price">$80.99</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ProductCard">
                                    <picture>
                                        <img src="https://images.pexels.com/photos/4495705/pexels-photo-4495705.jpeg?auto=compress&cs=tinysrgb&w=600"
                                            alt="">
                                    </picture>
                                    <p class="SMTitle">Demin Jeans</p>
                                    <p class="Price">$80.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ProductCard">
                                    <picture>
                                        <img src="https://images.pexels.com/photos/52518/jeans-pants-blue-shop-52518.jpeg?auto=compress&cs=tinysrgb&w=600"
                                            alt="">
                                    </picture>
                                    <p class="SMTitle">Demin Jeans</p>
                                    <p class="Price">$80.99</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ProductCard">
                                    <picture>
                                        <img src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=600"
                                            alt="">
                                    </picture>
                                    <p class="SMTitle">Demin Jeans</p>
                                    <p class="Price">$80.99</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ProductCard">
                                    <picture>
                                        <img src="https://images.pexels.com/photos/4456815/pexels-photo-4456815.jpeg?auto=compress&cs=tinysrgb&w=600"
                                            alt="">
                                    </picture>
                                    <p class="SMTitle">Demin Jeans</p>
                                    <p class="Price">$80.99</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="ProductCard">
                                    <picture>
                                        <img src="https://images.pexels.com/photos/4495705/pexels-photo-4495705.jpeg?auto=compress&cs=tinysrgb&w=600"
                                            alt="">
                                    </picture>
                                    <p class="SMTitle">Demin Jeans</p>
                                    <p class="Price">$80.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="toggleButtom">
                                    <button class="toggleBtn">See More</button>
                                </div>
                            </div>
                        </div>
                        <div class="More">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="ProductCard">
                                        <picture>
                                            <img src="https://images.pexels.com/photos/52518/jeans-pants-blue-shop-52518.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                alt="">
                                        </picture>
                                        <p class="SMTitle">Demin Jeans</p>
                                        <p class="Price">$80.99</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="ProductCard">
                                        <picture>
                                            <img src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                alt="">
                                        </picture>
                                        <p class="SMTitle">Demin Jeans</p>
                                        <p class="Price">$80.99</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="ProductCard">
                                        <picture>
                                            <img src="https://images.pexels.com/photos/4456815/pexels-photo-4456815.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                alt="">
                                        </picture>
                                        <p class="SMTitle">Demin Jeans</p>
                                        <p class="Price">$80.99</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="ProductCard">
                                        <picture>
                                            <img src="https://images.pexels.com/photos/4495705/pexels-photo-4495705.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                alt="">
                                        </picture>
                                        <p class="SMTitle">Demin Jeans</p>
                                        <p class="Price">$80.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="ProductCard">
                                        <picture>
                                            <img src="https://images.pexels.com/photos/52518/jeans-pants-blue-shop-52518.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                alt="">
                                        </picture>
                                        <p class="SMTitle">Demin Jeans</p>
                                        <p class="Price">$80.99</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="ProductCard">
                                        <picture>
                                            <img src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                alt="">
                                        </picture>
                                        <p class="SMTitle">Demin Jeans</p>
                                        <p class="Price">$80.99</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="ProductCard">
                                        <picture>
                                            <img src="https://images.pexels.com/photos/4456815/pexels-photo-4456815.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                alt="">
                                        </picture>
                                        <p class="SMTitle">Demin Jeans</p>
                                        <p class="Price">$80.99</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="ProductCard">
                                        <picture>
                                            <img src="https://images.pexels.com/photos/4495705/pexels-photo-4495705.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                alt="">
                                        </picture>
                                        <p class="SMTitle">Demin Jeans</p>
                                        <p class="Price">$80.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="StoryBehind">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="StoryOne"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="StoryTwo">
                            <h2 class="BGTitle">Story Behind</h2>
                            <img class="img100" src="<?php echo $sLogoURL2?>" alt="">
                            <p class="SMTitle">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                                Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit
                                tortor eget felis porttitor volutpat.
                                Accumsan id imperdiet et, porttitor at sem.
                                Vestibulum ac diam sit amet quam vehisuscipit tortor eget felis.</p>
                            <a href="">
                                <button class="shop-btn">Contact Us</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once("common/footer.php"); ?>
    <?php echo $sJSjQuery;
    echo $sBackUpTop;
    echo $sJSBootStrap;
    echo $sJSEMM; ?>

</body>

</html>