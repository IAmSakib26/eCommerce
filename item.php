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
    echo $sCSSEMM;
    echo $sCSSKiron; ?>
</head>

<body>
    <?php echo $sFbRoot; ?>
    <?php include_once("common/header.php"); ?>
    <?php include_once("common/headertow.php"); ?>
    <main>
        <section class="itemDetail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dispaly">
                            <picture>
                                <img class="displayImg" src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=600" alt="" class="img100">
                            </picture>
                            <div class="subDisplay">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="">
                                            <picture>
                                                <img class="subImg" src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="">
                                            <picture>
                                                <img class="subImg" src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="">
                                            <picture>
                                                <img class="subImg" src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="detail">
                            <h2 class="BGTitle">Winter - Demin Jeans</h2>
                            <p class="SMTitle">$89.66</p>
                        </div>
                        <div class="custom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <button class="size">size <i class="fas fa-caret-down"></i></button>
                                    <div class="sizeValue">
                                        <p class="SMTitle">S</p>
                                        <p class="SMTitle">L</p>
                                        <p class="SMTitle">XL</p>
                                        <p class="SMTitle">XXL</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                <button class="qty">QTY <i class="fas fa-caret-down"></i></button>
                                    <div class="qtyValue">
                                        <p class="SMTitle">1</p>
                                        <p class="SMTitle">2</p>
                                        <p class="SMTitle">3</p>
                                        <p class="SMTitle">4</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="customColor">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="red">
                                                    <p class="SMTitle">red</p>
                                                    <div class="color"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="green">
                                                <p class="SMTitle">green</p>
                                                    <div class="color"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="blue">
                                                <p class="SMTitle">blue</p>
                                                    <div class="color"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="black">
                                                <p class="SMTitle">black</p>
                                                    <div class="color"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="buy">
                                    <button class="shop-btn">BUY NOW</button>
                                </div>
                            </div>
                        </div>
                        <div class="detailTxt">
                            <h2 class="BGTitle">Details</h2>
                            <hr>
                            <p class="SMTitle">
                            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat.
                            </p>
                        </div>
                        <div class="delivery">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="SMTitle">Delivery</p>
                                </div>
                                <div class="col-lg-6">
                                    <div class="Dplus">
                                    <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                                <div class="deliveryOpt">
                                    <input class="form-control" type="text" placeholder="Your Address">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="style">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="SMTitle">Style</p>
                                </div>
                                <div class="col-lg-6">
                                    <div class="Splus">
                                    <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                                <div class="styleOpt">
                                    <input class="form-control" type="text" placeholder="Style you want">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ImgGallery">
            <div class="container">
                <div class="similarHeading">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="BGTitle">Similar Items</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ProductCard">
                            <picture>
                                <img class="Sone" src="https://images.pexels.com/photos/52518/jeans-pants-blue-shop-52518.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="">
                            </picture>
                            <p class="SMTitle">Demin Jeans</p>
                            <p class="Price">$80.99</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ProductCard">
                            <picture>
                                <img class="Stwo" src="https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="">
                            </picture>
                            <p class="SMTitle">Demin Jeans</p>
                            <p class="Price">$80.99</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ProductCard">
                            <picture>
                                <img class="Sthree" src="https://images.pexels.com/photos/4456815/pexels-photo-4456815.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="">
                            </picture>
                            <p class="SMTitle">Demin Jeans</p>
                            <p class="Price">$80.99</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ProductCard">
                            <picture>
                                <img class="Sfour" src="https://images.pexels.com/photos/4495705/pexels-photo-4495705.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="">
                            </picture>
                            <p class="SMTitle">Demin Jeans</p>
                            <p class="Price">$80.99</p>
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