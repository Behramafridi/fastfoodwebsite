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

 
body {
  
    to left bottom,
    
    #051327,
    #040f1f,
    #010a18
  );

  background-size: 800%;
  animation: animateClr 1s infinite cubic-bezier(0.62, 0.28, 0.23, 0.99);
}
input[type="text"],
input[type="email"],
input[type="tel"],
textarea{
  border: none;
  border-bottom: 2px solid rgb(128, 126, 126);
  background: transparent; 
  text-transform: capitalize;
  padding: 1rem 0.4rem;
  color: white !important;
}
textarea{
  background: transparent !important;
  color: white !important;
}
label{
  color: white !important;
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

     <!-- start body content -->
     <div class="body_contact-container">
      <div class="About_Us container">
          <h1>Contact Us</h1>
          <p>Home / <span style="color: greenyellow;">Contact</span> </p>
      </div>
  </div>
  <!-- About Text main Container  start-->

  <div class="container d-flex justify-content-between ">

    <div class="contact col-sm-6 col-xs-12" style="text-align: center;">
        <h1>Contact details</h1>
        <h2 style="font-weight: bolder;">Call us</h2>
        <h4>0141 611 1510</h4>
        <h4>0141 611 1510</h4>

        <h2 style="font-weight: bolder;">Email us</h2>
           
        <a href="mailto:some@email.com" class="btn btn-primary">clearbusinessbyadrian@gmail.com</a>
       
        <h2 style="font-weight: bolder;">Find us</h2>
        <h4>T37 The Park, Ruthin, Clwyd, LL15 1PW</h4>    
    </div>

    <div class="image col-sm-5 col-xs-12">
      <img src="images/contactus.webp" alt="">    
    </div>

<div class="clearfix">&nbsp;</div>
<hr>
    <div class="form-back col-sm-12 col-xs-12 ">
      
      <form action="#" method="post">
      <div class="row form-group">

        <div class="col-sm-4">
        <label for="">Name:</label>
        <input type="text" placeholder="first name" name="" id="" class="form-control">
      </div>

       <div class="col-sm-4">
        <label for="">Email:</label>
        <input type="text" placeholder="first name" name="" id="" class="form-control">
      </div>

        <div class="col-sm-4">
        <label for="">Phone:</label>
        <input type="text" placeholder="first name" name="" id="" class="form-control">
      </div>
      </div>

      <div class="clearfex">&nbsp;</div>

      <div class="row form-group">
      <div class="col-sm-12">
        <label for="">Message</label>
        <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
      </div>
      </div>

     
      <div class="text-end mt-4" style="text-align:center;padding:30px;">
        <input type="submit" class="btn p-4 btn-outline-dark" type="submit" value="Send Message" />
      </div>
    </div>
  </form>

   
        
    </div>
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