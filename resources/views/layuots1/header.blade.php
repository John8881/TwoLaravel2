<!DOCTYPE html>
<html lang="en">
<head>
<title>E-Commerce</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="image/catalog/cart.png" rel="icon" />
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href="css/stylesheet.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="javascript/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link href="javascript/owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
<script src="javascript/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="javascript/template_js/jstree.min.js"></script>
<script type="text/javascript" src="javascript/template_js/template.js"></script>
<script src="javascript/common.js" type="text/javascript"></script>
<script src="javascript/global.js" type="text/javascript"></script>
<script src="javascript/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
</head>
<body class="account-register col-2">
<div class="preloader loader" style="display: block;"> <img src="image/loader.gif"  alt="#"/></div>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="top-left pull-left">
                        <div class="language">
                            <form action="#" method="post" enctype="multipart/form-data" id="language">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="image/flags/gb.png" alt="English" title="English"> <i class="fa fa-caret-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><img src="image/flags/lb.png" alt="Arabic" title="Arabic"> Arabic</a></li>
                                        <li><a href="#"><img src="image/flags/gb.png" alt="English" title="English"> English</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                        <div class="currency">
                            <form action="#" method="post" enctype="multipart/form-data" id="currency">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <strong>$</strong> <i class="fa fa-caret-down"></i> </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="top-right pull-right">
                        <div id="top-links" class="nav pull-right">
                            <ul class="list-inline">
                                <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span>My Account</span> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"></i> <span>Wish List</span><span> (0)</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-inner">
            <div class="col-sm-4 col-xs-6 header-left">
                <div class="shipping">
                    <div class="shipping-img"></div>
                    <div class="shipping-text">Free Shipping <span class="shipping-detail">Free on all products</span></div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 header-middle">
                <div class="header-middle-top">
                    <div id="logo"> <a href="index.html"><img src="image/logo.png" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-6 header-right">
                <div id="cart" class="btn-group btn-block">
                    <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"><span id="cart-total">1 item(s) - $254.00</span><i class="fa fa-caret-down"></i></button>
                    <ul class="dropdown-menu pull-right cart-dropdown-menu">
                        <li>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="text-center"><a href="#"><img class="img-thumbnail" title="iPhone" alt="iPhone" src="image/product/7product50x59.jpg"></a></td>
                                        <td class="text-left"><a href="#">iPhone</a></td>
                                        <td class="text-right">x 1</td>
                                        <td class="text-right">$254.00</td>
                                        <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                        <li>
                            <div>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="text-right"><strong>Sub-Total</strong></td>
                                            <td class="text-right">$210.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                            <td class="text-right">$2.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>VAT (20%)</strong></td>
                                            <td class="text-right">$42.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Total</strong></td>
                                            <td class="text-right">$254.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="text-right"> <span class="btn-viewcart"><a href="cart.html"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a></span> <span class="btn-checkout"><a href="checkout.html"><strong><i class="fa fa-share"></i> Checkout</strong></a></span> </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="search" class="input-group">
                    <input type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                    </span> </div>
            </div>
        </div>
    </div>
</header>
<nav id="menu" class="navbar">
    <div class="nav-inner container">
        <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
            <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse">
            <ul class="main-navigation">
                <li><a href="index.html"   class="parent"  >Home</a> </li>
                <li><a href="/product"   class="parent"  >Electronics</a> </li>
                <li><a href="category.html"   class="parent"  >Mobile</a> </li>
                <li><a href="category.html"   class="parent"  >Fashio & Beauty</a> </li>
                <li><a href="category.html"   class="parent"  >Audio</a> </li>
                <li><a href="category.html"   class="parent"  >Home & Family</a> </li>
                <li><a href="#" class="active parent">Page</a>
                    <ul>
                        <li><a href="category.html">Category Page</a></li>
                        <li><a href="cart.html">Cart Page</a></li>
                        <li><a href="checkout.html">Checkout Page</a></li>
                        <li><a href="blog.html" >Blog Page</a></li>
                        <li><a href="singale-blog.html" >Singale Blog Page</a></li>
                        <li><a href="register.html">Register Page</a></li>
                        <li><a href="contact.html">Contact Page</a></li>
                    </ul>
                </li>
                <li><a href="blog.html" class="parent"  >Blog</a></li>
                <li><a href="about-us.html" >About us</a></li>
                <li><a href="contact.html" >Contact Us</a> </li>
            </ul>
        </div>
    </div>
</nav>