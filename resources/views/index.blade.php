
@include('layuots1.header')

<div class="container col-2">
    <div class="row">
        <div class="col-md-12">
            <div id="main-banner" class="owl-carousel home-slider">
                <div class="item"> <a href="#"><img src="image/banners/Main-Banner1.jpg" alt="main-banner1" class="img-responsive" /></a> </div>
                <div class="item"> <a href="#"><img src="image/banners/Main-Banner2.jpg" alt="main-banner2" class="img-responsive" /></a> </div>
                <div class="item"> <a href="#"><img src="image/banners/Main-Banner3.jpg" alt="main-banner3" class="img-responsive" /></a> </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="cms_banner">
            <div class="col-md-4 cms-banner-left"> <a href="#"><img alt="#" src="image/banners/subbanner1.jpg"></a> </div>
            <div class="col-md-4 cms-banner-middle"> <a href="#"><img alt="#" src="image/banners/subbanner2.jpg"></a> </div>
            <div class="col-md-4 cms-banner-right"> <a href="#"><img alt="#" src="image/banners/subbanner3.jpg"></a> </div>
        </div>
    </div>
    <div class="row">

@include('layuots1.sitebar')

      
<div id="content" class="col-sm-9">
            <div class="customtab">
                <div id="tabs" class="customtab-wrapper">
                    <ul class='customtab-inner'>
                        <li class='tab'><a href="#tab-latest">Latest</a></li>
                        <li class='tab'><a href="#tab-special">Special</a></li>
                        <li class='tab'><a href="#tab-bestseller">Bestseller</a></li>
                    </ul>
                </div>
                <div id="tab-latest" class="tab-content">
                    <div class="box">
                        <div id="latest-slidertab" class="row owl-carousel product-slider">
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="#" title="iPod Classic">iPod Classic</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="#" title="iPod Classic">iPod Classic</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="#" title="iPod Classic">iPod Classic</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="#" title="iPod Classic">iPod Classic</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="#" title="iPod Classic">iPod Classic</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="#" title="iPod Classic">iPod Classic</a></h4>
                                        <p class="price product-price">$122.00<span class="price-tax">Ex Tax: $100.00</span></p>
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab-latest-->
                <!-- tab-latest-->
                <div id="tab-special" class="tab-content">
                    <div class="box">
                        <div id="special-slidertab" class="row owl-carousel product-slider">
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product4.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product5.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product5.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product6.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product7.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="#"> <img src="image/product/product6.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab-special-->
                <div id="tab-bestseller" class="tab-content">
                    <div class="box">
                        <div id="bestseller-slidertab" class="row owl-carousel product-slider">
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="#"> <img src="image/product/product7.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product8.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product1.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product2.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product3.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn" >Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                        <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                    </div>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="subbanner4" class="banner" >
                    <div class="item"> <a href="#"><img src="image/banners/subbanner4.jpg" alt="Sub Banner4" class="img-responsive" /></a> </div>
                </div>
                <div id="subbanner5" class="banner" >
                    <div class="item"> <a href="#"><img src="image/banners/subbanner5.jpg" alt="Sub Banner5" class="img-responsive" /></a> </div>
                </div>
                <h3 class="productblock-title">Featured</h3>
                <div class="box">
                    <div id="feature-slider" class="row owl-carousel product-slider">
                        <div class="item product-slider-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product4.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                    <button type="button" class="addtocart-btn" >Add to Cart</button>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="item product-slider-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product5.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                    <button type="button" class="addtocart-btn" >Add to Cart</button>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="item product-slider-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock"> <a href="product.html"> <img src="image/product/product6.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                    <button type="button" class="addtocart-btn" >Add to Cart</button>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="item product-slider-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock"> <a href="#"> <img src="image/product/product7.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                    <button type="button" class="addtocart-btn" >Add to Cart</button>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="item product-slider-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock"> <a href="#"> <img src="image/product/product8.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                    <button type="button" class="addtocart-btn" >Add to Cart</button>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="item product-slider-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock"> <a href="#"> <img src="image/product/product1.jpg" alt="iPhone" title="iPhone" class="img-responsive" /> </a>
                                    <div class="button-group">
                                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                        <button type="button" class="addtocart-btn" >Add to Cart</button>
                                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                                <div class="caption product-detail">
                                    <h4 class="product-name"><a href="product.html" title="iPhone">iPhone</a></h4>
                                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                    <button type="button" class="addtocart-btn" >Add to Cart</button>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog">
                    <div class="blog-heading">
                        <h3>Latest Blogs</h3>
                    </div>
                    <div class="blog-inner box">
                        <ul class="list-unstyled blog-wrapper" id="latest-blog">
                            <li class="item blog-slider-item">
                                <div class="panel-default">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="image/blog/blog_1.jpg" alt="#"></a> <span class="blog-hover"></span> <span class="blog-date">06/07/2015</span> <span class="blog-readmore-outer"><a href="#" class="blog-readmore">read more</a></span> </div>
                                    <div class="blog-content"> <a href="#" class="blog-name">
                                        <h2>Nunc rutrum scel potent</h2>
                                        </a>
                                        <div class="blog-desc">Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing...</div>
                                        <a href="#" class="blog-readmore">read more</a> <span class="blog-date">06/07/2015</span> </div>
                                </div>
                            </li>
                            <li class="item blog-slider-item">
                                <div class="panel-default">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="image/blog/blog_2.jpg" alt="#"></a> <span class="blog-hover"></span> <span class="blog-date">06/07/2015</span> <span class="blog-readmore-outer"><a href="#" class="blog-readmore">read more</a></span> </div>
                                    <div class="blog-content"> <a href="#" class="blog-name">
                                        <h2>Nunc rutrum scel potent</h2>
                                        </a>
                                        <div class="blog-desc">Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing...</div>
                                        <a href="singale-blog.html" class="blog-readmore">read more</a> <span class="blog-date">06/07/2015</span> </div>
                                </div>
                            </li>
                            <li class="item blog-slider-item">
                                <div class="panel-default">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="image/blog/blog_3.jpg" alt="#"></a> <span class="blog-hover"></span> <span class="blog-date">06/07/2015</span> <span class="blog-readmore-outer"><a href="singale-blog.html" class="blog-readmore">read more</a></span> </div>
                                    <div class="blog-content"> <a href="#" class="blog-name">
                                        <h2>Nunc rutrum scel potent</h2>
                                        </a>
                                        <div class="blog-desc">Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing...</div>
                                        <a href="singale-blog.html" class="blog-readmore">read more</a> <span class="blog-date">06/07/2015</span> </div>
                                </div>
                            </li>
                            <li class="item blog-slider-item">
                                <div class="panel-default">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="image/blog/blog_4.jpg" alt="#"></a> <span class="blog-hover"></span> <span class="blog-date">06/07/2015</span> <span class="blog-readmore-outer"><a href="#" class="blog-readmore">read more</a></span> </div>
                                    <div class="blog-content"> <a href="#" class="blog-name">
                                        <h2>Nunc rutrum scel potent</h2>
                                        </a>
                                        <div class="blog-desc">Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing...</div>
                                        <a href="#" class="blog-readmore">read more</a> <span class="blog-date">06/07/2015</span> </div>
                                </div>
                            </li>
                            <li class="item blog-slider-item">
                                <div class="panel-default">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="image/blog/blog_5.jpg" alt="#"></a> <span class="blog-hover"></span> <span class="blog-date">06/07/2015</span> <span class="blog-readmore-outer"><a href="#" class="blog-readmore">read more</a></span> </div>
                                    <div class="blog-content"> <a href="#" class="blog-name">
                                        <h2>Nunc rutrum scel potent</h2>
                                        </a>
                                        <div class="blog-desc">Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing...</div>
                                        <a href="#" class="blog-readmore">read more</a> <span class="blog-date">06/07/2015</span> </div>
                                </div>
                            </li>
                        </ul>
                        <div class="buttons text-right seeall">
                            <button class="btn btn-primary" onClick="location='blog.html';" type="button">See all Blogs</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="brand_carouse" class="owl-carousel brand-logo">
                <div class="item text-center"> <a href="#"><img src="image/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="image/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
            </div>
        </div>


      </div>
</div>
@include('layuots1.footer')
