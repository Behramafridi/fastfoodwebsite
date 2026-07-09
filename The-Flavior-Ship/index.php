<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'config/site-css.php' ?>
  <style>
    .card_container {
      width: 100%;
      height: 300px;
      display: flex;
      justify-content: center;
      border: 2px solid black;
    }

    .nav-search input[type=text] {
      width: 50%;
      height: 20px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      background-color: white;
      padding: 12px 20px 12px 40px;
    }

    .Ccenter {
      width: 75px;
      height: 75px;
      border-radius: 50px;
      box-shadow: 2px 2px 10px rgba(102, 95, 95, 0.534);
      position: absolute;
      top: 55%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;

    }

    .Ccenter .bi {
      font-size: 50px;
      padding: 10px;
    }

    .startmenu{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    background-image: linear-gradient(to right, black, rgba(18, 148, 48, 0.4)), url(images/burrito.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    background-attachment: fixed;
    }
  </style>
</head>

<body class="cms-index-index cms-home-page">
  <div id="page">
    <!-- Header -->
    <header>
      <!-- top-bar start -->
      <?php include 'config/top-bar.php' ?>
      <!-- top-bar end -->

      <!-- Navigation -->
      <?php include 'config/nav-bar.php' ?>
      <!-- end nav -->

    </header>

    <!-- Slider -->
    <div id="thm-slideshow" class="thm-slideshow">
      <div class="container" style="width:200%;margin-top:-1%;margin-left:-2%;">
        <div class="row">
          <div class="col-md-9">
            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
              <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                <ul>
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                    data-thumb='images/kamal.jpeg' style="margin-top:19%;"><img src='images/kamal.jpeg'
                      data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' style="margin-top:19%;" />
                    <div class="info">
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500'
                        data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                        data-elementdelay='0.1' data-endelementdelay='0.1'><span>Fast Food</span> </div>
                      <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500'
                        data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                        data-elementdelay='0.1' data-endelementdelay='0.1'><span>Restaurant</span> </div>
                      <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500'
                        data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none'
                        data-elementdelay='0.1' data-endelementdelay='0.1'></div>
                      <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500'
                        data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                        data-endelementdelay='0.1'><a href='#' class="buy-btn">Order Now</a> </div>
                    </div>
                  </li>
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                    data-thumb='images/khani.jpeg'><img src='images/khani.jpeg' alt="slide-img"
                      data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                    <div class="info">
                      <div class='tp-caption ExtraLargeTitle sft slide2  tp-resizeme ' data-endspeed='500'
                        data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none'
                        data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1'><span>Fast Food</span>
                      </div>
                      <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500'
                        data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none'
                        data-elementdelay='0.1' data-endelementdelay='0.1'>Restaurant </div>
                      <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500'
                        data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none'
                        data-elementdelay='0.1' data-endelementdelay='0.1'>Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500'
                        data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1'
                        data-endelementdelay='0.1'><a href='#' class="buy-btn">Order Now </a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- our features -->
    <div class="our-features-box">
      <div class="container">
        <ul>
          <li>
            <div class="feature-box need-help">
              <div class="icon-truck"></div>
              <div class="content">FREE SHIPPING on order over $99</div>
            </div>
          </li>
          <li>
            <div class="feature-box free-shipping">
              <div class="icon-support"></div>
              <div class="content">Need Help +0141 611 1510</div>
            </div>
          </li>
          <li>
            <div class="feature-box money-back">
              <div class="icon-money"></div>
              <div class="content">Money Back Guarantee</div>
            </div>
          </li>
          <li class="last">
            <div class="feature-box return-policy">
              <div class="icon-return"></div>
              <div class="content">30 days return Service</div>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="content-page">
      <div class="container">
        <!-- featured category fashion -->
        <div class="category-product">

          <div class="navbar nav-menu">
            <div class="navbar-collapse">
              <ul class="nav navbar-nav">
                <li>
                  <div class="new_title">
                    <h2>New Products</h2>
                  </div>
                </li>

              </ul>
            </div>
          </div>

          <div class="product-bestseller">
            <div class="product-bestseller-content">
              <div class="product-bestseller-list">
                <div class="tab-container">
                  <div class="tab-panel active" id="tab-1">
                    <div class="category-products">
                      <ul class="products-grid">

                        <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                          <div class="item-inner">
                            <div class="item-img">
                              <div class="item-img-info"> <a class="product-image" title="Burger Inn"
                                  href="product_detail.html"> <img alt="Burger Inn" src="images/Burger Inn.jpg"> </a>
                                <div class="box-hover">
                                  <ul class="add-to-links">
                                    <li><a class="link-quickview" href="quick_view.html">Quick View</a> </li>
                                    <li><a class="link-wishlist" href="wishlist.html">Wishlist</a> </li>
                                    <li><a class="link-compare" href="compare.html">Compare</a> </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Burger Inn" href="#"> Burger Inn
                                     </a> </div>
                                <div class="item-content">
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div style="width:80%" class="rating"></div>
                                      </div>
                                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                          class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span
                                          class="price">$50.00</span> </span> </div>
                                  </div>
                                  <div class="action">
                                    <button class="button btn-cart" type="button" title=""
                                      data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>

                        <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                          <div class="item-inner">
                            <div class="item-img">
                              <div class="item-img-info"> <a class="product-image" title="Pizza Bianca"
                                  href="#"> <img alt="Pizza Bianca" src="images/Fiza binans.jpg"> </a>
                                <div class="box-hover">
                                  <ul class="add-to-links">
                                    <li><a class="link-quickview" href="quick_view.html">Quick View</a> </li>
                                    <li><a class="link-wishlist" href="wishlist.html">Wishlist</a> </li>
                                    <li><a class="link-compare" href="compare.html">Compare</a> </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Pizza Bianca" href="#"> Pizza Bianca
                                   </a> </div>
                                <div class="item-content">
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div style="width:80%" class="rating"></div>
                                      </div>
                                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                          class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span
                                          class="price">$20.00</span> </span> </div>
                                  </div>
                                  <div class="action">
                                    <button class="button btn-cart" type="button" title=""
                                      data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>

                        <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                          <div class="item-inner">
                            <div class="item-img">
                              <div class="item-img-info"> <a class="product-image" title="Mr chicken"
                                  href="product_detail.html"> <img alt="Retis lapen casen" src="images/Mr chicken.jpg"> </a>
                                <div class="box-hover">
                                  <ul class="add-to-links">
                                    <li><a class="link-quickview" href="quick_view.html">Quick View</a> </li>
                                    <li><a class="link-wishlist" href="wishlist.html">Wishlist</a> </li>
                                    <li><a class="link-compare" href="compare.html">Compare</a> </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Mr chicken" href="#"> Mr chicken
                                     </a> </div>
                                <div class="item-content">
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div style="width:80%" class="rating"></div>
                                      </div>
                                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                          class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span
                                          class="price">$99.00</span> </span> </div>
                                  </div>
                                  <div class="action">
                                    <button class="button btn-cart" type="button" title=""
                                      data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>

                        <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                          <div class="item-inner">
                            <div class="item-img">
                              <div class="item-img-info"> <a class="product-image" title="choped leaf"
                                  href="product_detail.html"> <img alt="choped leaf"
                                    src="images/choped leaf.jpg"> </a>
                                <div class="new-label new-top-left">new</div>
                                <div class="box-hover">
                                  <ul class="add-to-links">
                                    <li><a class="link-quickview" href="quick_view.html">Quick View</a> </li>
                                    <li><a class="link-wishlist" href="wishlist.html">Wishlist</a> </li>
                                    <li><a class="link-compare" href="compare.html">Compare</a> </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Choped Leaf
                                    </a> </div>
                                <div class="item-content">
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div style="width:80%" class="rating"></div>
                                      </div>
                                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                          class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span
                                          class="price"> $156.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span
                                          class="price"> $167.00 </span> </p>
                                    </div>
                                  </div>
                                  <div class="action">
                                    <button class="button btn-cart" type="button" title=""
                                      data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- tab product end-->

                </div>
              </div>
            </div>
            <div>
            </div>
          </div>
        </div>
      </div>


      <!-- online course start -->
      <div class="main_online_course_container">

        <div class="online_course_learn container-fulid " style="position: relative;">

          <span
            style="text-align: center; color: white; position: absolute; top:30%; left: 50%; transform: translate(-50%,-50%);">
            <h1 style="font-family: fantasy; text-shadow: 5px 5px 5px black;">The Flavours Ship</h1>
            <h3 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight: bold; text-shadow: 5px 5px 5px black;">Fast Food Restaurant</h3>
          </span>

          <div class="Learn_Feature container pb-4"
            style="position: absolute; top:80%; left: 50%; transform: translate(-50%,-50%);">

          </div>
        </div>

        <!-- Card container start -->
        <div class="card-container col-sm-12 ">
         
           <div class="body_card popular-cards hid_card1 col-sm-3" style="color: black; background-color: rgba(247, 255, 205, 0.685);">
            <img src="images/milk shak.jpg" alt="" srcset="">
            <a href="#" class="p-2"></a>
            <h2>Milk Shak</h2>
            <div class="card_footer">
                <div class="CF p-1" style="text-align: left; border-right: 1px solid rgba(0, 0, 0, 0.2);">3 Review
                </div>
                <div class="CF p-1" style="text-align: right;"><del style="font-size: small;">$35 </del><br><span
                        style="font-size: large;">$27</span></div>
            </div>
        </div>
          

          <div class=" body_card popular-cards hid_card1 col-sm-3" style="color: black; background-color: rgba(247, 255, 205, 0.685);">
            <img src="images/burrito.jpg" alt="" srcset="">
            <a href="#" class="p-2"></a>
            <h2>Burrito </h2>
            <div class="card_footer">
                <div class="CF p-1" style="text-align: left; border-right: 1px solid rgba(0, 0, 0, 0.2);">3 Review
                </div>
                <div class="CF p-1" style="text-align: right;"><del style="font-size: small;">$31 </del><br><span
                        style="font-size: large;">$25</span></div>
            </div>
        </div>

        <div class=" body_card popular-cards hid_card1 col-sm-3" style="color: black; background-color: rgba(247, 255, 205, 0.685);">
          <img src="images/ribs.jpg" alt="" srcset="">
          <a href="#" class="p-2"></a>
          <h2>Ribs</h2>
          <div class="card_footer">
              <div class="CF p-1" style="text-align: left; border-right: 1px solid rgba(0, 0, 0, 0.2);">3 Review
              </div>
              <div class="CF p-1" style="text-align: right;"><del style="font-size: small;">$50 </del><br><span
                      style="font-size: large;">$35</span></div>
          </div>
      </div>
        <!-- Card container end -->
    </div>
      </div>
      <!-- online course end -->

      <!-- check out start -->

        <div class="heading col-sm-12" style="text-align: center;">
          <h1>checkkout Our Menu</h1>
          <h4>--- FOOD MENU LIST ---</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="clearfix">&nbsp;</div>

        <div class="container startmenu d-flex justify-content-between" style="border: 2px solid rgba(0, 0, 0, 0.2); margin:10px;">
          
        <div class="left col-sm-3">
        <h1>Start Menu..</h1>
        <br>
          <h4>Italian Rasam.....$39.23</h4>
          <h5>Aliquet iusto orci.....</h5>
          <br>
          <h4>Sausage Casaoulel.....$19.13</h4>
          <h5>Aliquet iusto orci.</h5>
          <br>
          <h4>Sea Ceviche.....$24.12</h4>
          <h5>Aliquet iusto orci.</h5>
          <br>
          <h4>Truffle Ravioli....$13.22</h4>
          <h5>Aliquet iusto orci.</h5>
          <br>
          <h4>Hamburger Veg....$17.34</h4>
          <h5>Aliquet iusto orci.</h5>
        </div>

        <div class="right col-sm-3">
          <h1>...</h1>
          <br>
          <h4>Burger Cheese....$23.20</h4>
          <h5>Aliquet iusto orci.</h5>
          <br>
          <h4>Cheese Pizza....$17.12</h4>
          <h5>Aliquet iusto orci.</h5>
          <br>
          <h4>French Fries....$9.23</h4>
          <h5>Aliquet iusto orci.</h5>
          <br>
          <h4>Meat Burger....$13.77</h4>
          <h5>Aliquet iusto orci.</h5>
          <br>
          <h4>Veg Chompsey....$11.38</h4>
          <h5>Aliquet iusto orci.</h5>
        </div>

        <!-- <div class="image col-sm-5">
            <img src="images/restaurant.avif" alt="">
        </div> -->

        </div>
      
      <!-- check out end -->

    </div>
    <!-- footer start -->
    <?php include 'config/footer.php' ?>
    <!-- End Footer -->

  </div>


  <!-- mobile menu -->
  <?php include 'config/mobile-menu.php' ?>
  <!-- mobile menu end -->

  <!-- JavaScript -->
  <?php include 'config/js-site.php' ?>
  <!-- JavaScript end -->

</body>
</html>