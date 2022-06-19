<?php
include('database.inc.php');
include('function.inc.php');
include('constant.inc.php');
?>
<!DOCTYPE html>
<html>
<title><?php echo FRONT_SITE_NAME ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/index_style.css">
<link rel="stylesheet" href="assets/css/index_font.css">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('media/banner/bg.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">

  </div>
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">FOOD ORDERING PANEL</h1>
    <hr class="w3-border-grey" style="margin:auto;width:100%">
    <p class="w3-large w3-center">
    <div class="slider-btn">
        <a href="<?php echo FRONT_SITE_PATH?>main_menu">Order Now</a>
    </div>
    </p>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    <h5 class="animated">Project by VIT Bhopal Students</h5>
  </div>
</div>

</body>
</html>
