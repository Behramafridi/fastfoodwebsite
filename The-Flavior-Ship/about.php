<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'config/site-css.php' ?>
  <style>
       * {
  font-family: "Poppins", sans-serif;
}
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

     <!-- start content body -->
     <div class="body_top_container">
      <div class="About_Us container">
          <h1>About Us</h1>
          <p>Home / <span style="color: greenyellow;">About</span> </p>
      </div>
  </div>
  <!-- About Text main Container  start-->

  <div class="About_main_container">


    <!-- Contant Container start-->
    <div class="About_container_text container">

        <!-- About text-left-heading class start-->
        <div class="About_text col-sm-5">
            <h1>Welcome to The Flavours Ship</h1>
            <p>
              <h2 style="font-weight: bold;">"THE FLAVOURS SHIP"</h2>
              
              
              Welcome to THE FLAVOURS SHIP, where culinary excellence meets warm hospitality. Situated in the heart of UK, we have been serving the community with exceptional dining experiences since September 2020.
              
             
              <h2>Our Story</h2>
              THE FLAVOURS SHIP is more than just a place to eat; it's a testament to our passion for food, culture, and community. Our journey began when Mr Adrian, a seasoned chef with a lifelong dream of creating a dining haven, decided to transform a vision into reality.
              
              With years of experience in the culinary world and a dedication to quality, Mr.Adrian set out to create a restaurant that would not only tantalize taste buds but also capture the essence of Fast Food Restaurant. Every dish on our menu is a reflection of Mr Adrian's commitment to using fresh, locally-sourced ingredients and time-honored recipes.
              
             
              <h2>Our Cuisine</h2>
              At THE FLAVOURS SHIP, we specialize in Fast Food Restaurant, offering a diverse menu that caters to a wide range of tastes. From classic favorites to innovative creations, our kitchen team works tirelessly to bring you the flavors of UK in every bite.
              
            
              <h2>Our Team</h2>
              Our talented team is at the heart of what makes THE FLAVOURS SHIP special. From our skilled chefs who infuse each dish with creativity and passion to our friendly and attentive waitstaff, everyone here is dedicated to ensuring your visit is nothing short of exceptional.
              
              
              <h2>Community Involvement</h2>
              We believe in giving back to the community that has supported us. [Restaurant Name] actively participates in local initiatives, partners with local suppliers, and strives to reduce our environmental footprint. We're committed to making a positive impact in [City/Town] and beyond.
              
              
              <h2>Visit Us</h2>
              We invite you to experience The FLAVOURS SHIP for yourself. Whether you're looking for an intimate dinner, a family celebration, or a special occasion, we're ready to make your visit memorable. Our cozy ambiance, delectable dishes, and attentive service await you.
              
              Thank you for choosing The FLAVOURS SHIP as your dining destination. We look forward to serving you and becoming a part of your culinary journey.
              
              </p>
        </div>
        <!-- About text-left-heading class end-->

        <!-- About text-img start-->
        <div class="image col-sm-5">
            <img src="images/restaurant.avif" alt="">

        </div>
        <!-- About text-right-img end-->

    </div>
    <!-- Contant Container end-->

    <!-- Start About-Cards Container -->

    <div class="about_cards container">
        <div class="about_cards_text">
            <!-- <h1>01</h1> -->
            <h2>Blanket Food</h2>
            <p>"At Blanket Food, we believe the best dishes are the ones that remind you of childhood. A portion of great food should make you feel like you are wrapped in a warm blanket.
              At our location in Boston or online, you will find the best dishes you didn't know you craved: extra-creamy mac and cheese, hot chicken casserole, fried dumplings like your mama makes, and many more.
              Forget about the daily stress and come relax with us. After tasting any of our menu items, you will never want to leave!"</p>
        </div>

        <div class="about_cards_text ">
            <!-- <h1>02</h1> -->
            <h2>Terramia</h2>
            <p>“Here, at Terramia, in the center of London, we don’t accept compromises. Not about our food. All our ingredients are sourced from local producers to ensure quality and freshness.
              That's why our menu is seasonal. Today, we may serve you creamy mushroom soup, and tomorrow we may have a classic ratatouille on the menu. But the taste is always the same: finger-licking good!      
              Don't hesitate to pay us a visit if you share our passion for fresh dishes cooked with only the best ingredients. We promise an experience that will keep you coming back for more!”</p>
        </div>

        <div class="about_cards_text ">
           
            <h2>Deliciosa</h2>
            <p>"Here, at Deliciosa, we understand cravings. We know how important it is to get your food fast, and we have a 1-hour delivery guarantee, or you get your money back.
              While we prepare our food fast, we develop the flavor slowly. Our dough rises over the night, and our meat is always marinated. That's why every chicken tender, every beef skewer, and every bun taste like heaven.             
              Don’t let hunger take control of you. Beat it with Deliciosa!"</p>
        </div>

    </div>
    <!-- End About-Cards Container -->

</div>
<!-- About Text main Container end -->
  <!-- end content body -->

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