<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Planet Shopify | Online Shopping Site for Men</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title">Who We Are ?</h3>
          <hr />
          <img
            src="https://images.unsplash.com/photo-1490578474895-699cd4e2cf59?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&h=400&q=80"
            class="img-fluid d-block rounded mx-auto image-thumbnail">
          <div class="pt-4 pt-lg-0 content mt-2">
            <h3>Deserving provide pleasure as a bodily pleasures</h3>
            <p class="font-italic">
              we are glad to show you our skills.we know the many languages,web designing and photoshop etc.
            </p>
          </div>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-warning pt-3">
            <h1 class="title">LIVE SUPPORT</h1>
            <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3>
          </span>
          <hr>
          <p>Shopify is a renowned and trusted Traditional Wear Clothing Brand in Men's Wear,Our main focus is always on meeting customer's needs and requirements regarding Product Quality,Latest Designs as well as services.<br>
          Here,Customers can enjoy Shopping sitting at Home by Touch and Feel of the Fabric Quality,having as many trails,Expert advice,Personalized Fitting,which we generally miss during Online Shopping.<br>
          We are here for 24 hours to resolve customers Problems<br><br>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-md-6">
          <div>
            <iframe class="mb-10 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59354.47570074026!2d71.22105075!3d21.59939635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395880c72d516845%3A0x4e950cffb505bb12!2sAmreli%2C%20Gujarat%20365601%2C%20India!5e0!3m2!1sen!2sbg!4v1604379887864!5m2!1sen!2sbg" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
        </div>
      <div class="col-md-6">
        <div class="container d-flex justify-content-center card pb-3">
          <form class="col-md-12" action="https://formspree.io/EnterYourEmail" method="POST" name="_next">
            <h3 class="text-warning pt-3 title mx-auto">Contact Form</h3>
            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email"
                name="email">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
            </div>
            <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  


  </div>
  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
