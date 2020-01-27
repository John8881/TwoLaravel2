@include('qaz.header')

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
        @include('qaz.sitebar')

        <div id="content" class="col-sm-9">
            <div class="customtab">
                <div id="tabs" class="customtab-wrapper">
                    <ul class='customtab-inner'>
                        <li class='tab'><a href="#tab-latest">Новые</a></li>
                        <li class='tab'><a href="#tab-special">Дешевые</a></li>
                        <li class='tab'><a href="#tab-bestseller">Больше скидка</a></li>
                    </ul>
                </div>
                <div id="tab-latest" class="tab-content">
                    <div class="box">
                        <div id="latest-slidertab" class="row owl-carousel product-slider">

    
                            @isset($prod)
                            @foreach ($prod as $prods)
                                
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="{{ route('products.show', ['product' => $prods->id]) }}"><img src="{{ asset('/storage/' . $prods->file) }}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a></div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name">{{$prods->name}}</h4>
                                        <p class="price product-price">&#8381 {{$prods->old_price}}  <span class="price-old">{{$prods->price}}</span></p>
                                        <div class="rating">Sale: {{$prods->sale}}%</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endisset
                            
                            

                        </div>
                    </div>
                </div>
              {{-- tab-latest --}}


                <div id="tab-special" class="tab-content">
                    <div class="box">
                        <div id="special-slidertab" class="row owl-carousel product-slider">
                            
                            
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a></div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name">iPod Classic</h4>
                                        <p class="price product-price">&#8381 122.00  <span class="price-old">$272.00</span></p>
                                        <div class="rating">Sale: 50%</div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                {{-- tab-special --}}

                <div id="tab-bestseller" class="tab-content">
                    <div class="box">
                        <div id="bestseller-slidertab" class="row owl-carousel product-slider">

                            
                            <div class="item">
                                <div class="product-thumb transition">
                                    <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a></div>
                                    <div class="caption product-detail">
                                        <h4 class="product-name">iPod Classic</h4>
                                        <p class="price product-price">&#8381 122.00  <span class="price-old">$272.00</span></p>
                                        <div class="rating">Sale: 50%</div>
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


                <h3 class="productblock-title">Вы просматривали</h3>
                <div class="box">
                    <div id="feature-slider" class="row owl-carousel product-slider">


                        <div class="item product-slider-item">
                            <div class="product-thumb transition">
                                <div class="image product-imageblock"> <a href="product.html"><img src="image/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a></div>
                                <div class="caption product-detail">
                                    <h4 class="product-name">iPod Classic</h4>
                                    <p class="price product-price">&#8381 122.00  <span class="price-old">$272.00</span></p>
                                    <div class="rating">Sale: 50%</div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>



                <div class="blog">
                    <div class="blog-heading">
                        <h3>Рекламные баннеры</h3>
                    </div>
                    <div class="blog-inner box">
                        <ul class="list-unstyled blog-wrapper" id="latest-blog">
                            <li class="item blog-slider-item">
                                <div class="panel-default">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="image/blog/blog_1.jpg" alt="#"></a> <span class="blog-hover"></span><span class="blog-readmore-outer"><a href="#" class="blog-readmore">read more</a></span> </div>
                                    <div class="blog-content"> 
                                        <a href="#" class="blog-name"><h2>Заглавие</h2></a>
                                        <div class="blog-desc">Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing...</div>
                                    </div>
                                </div> 
                            </li>
                            <li class="item blog-slider-item">
                                <div class="panel-default">
                                    <div class="blog-image"> <a href="#" class="blog-imagelink"><img src="image/blog/blog_1.jpg" alt="#"></a> <span class="blog-hover"></span><span class="blog-readmore-outer"><a href="#" class="blog-readmore">read more</a></span> </div>
                                    <div class="blog-content"> 
                                        <a href="#" class="blog-name"><h2>Заглавие</h2></a>
                                        <div class="blog-desc">Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing...</div>
                                        </div>
                                </div>
                            </li>
                        </ul>
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
                </div>
        </div>
    </div>
</div>

@include('qaz.footer')