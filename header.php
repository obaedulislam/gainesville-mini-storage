  <!DOCTYPE html>
<html lang="en">
  <?php
    $pageName = basename($_SERVER['PHP_SELF']);
  ?>

<script>
    $(document).ready(function () {
      $("#toggleMenuMobile").click(function () {
        $("#toggleMenuItem").toggleClass("active");
      });
    });
</script>

<body>

  
  <header>
    <div class="container ">
      <div class="row overflow-hidden">
        <div class="col-4 col-sm-4  col-md-3 col-lg-3 logo-part">
          <a class="logo " href="index.php"><img src="images/logo.svg" alt = "Gainesville Mini Storage Logo"></a>
        </div>

        <div class="col-sm-12 col-md-9 col-lg-9 right-header menu-md">
          <ul class="navigation">
            <li><a <?php if($pageName == "unit-prices.php"){ echo 'class="active"'; } ?> href="unit-prices.php" >Unit Prices</a></li>
            <!-- <li><a  href="size-guide.php" >Size Guide</a></li> -->
            <li><a <?php if($pageName == "nearby.php"){ echo 'class="active"'; } ?> href="nearby.php">Nearby</a></li>
            <li><a <?php if($pageName == "faqs.php"){ echo 'class="active"'; } ?> href="faqs.php">FAQ</a></li>
            <li><a <?php if($pageName == "contact.php"){ echo 'class="active"'; } ?> href="contact.php">Contact Us</a></li>
            <li><a <?php if($pageName == "pay-online.php"){ echo 'class="active"'; } ?> href="pay-online.php">Pay Online</a></li>
          </ul>
        </div>

        <div class="col-8 col-sm-8  menu-text menu-mob">
          
          <ul class="navigation-menu ul-list">
             <li><a id="toggleMenuMobile" class="hamburger-menu"><span><img src="images/header/hamburger.svg" alt=""></span></a>
                <ul id="toggleMenuItem" class="ul-list ">
                    <div>
                      <li><a <?php if($pageName == "index.php" || $pageName == ""){ echo 'class="active"'; } ?> href="index.php" ><i class="icon-home"></i> <span> Home</span></a></li>
                      <li><a <?php if($pageName == "unit-prices.php"){ echo 'class="active"'; } ?> href="unit-prices.php"><i class="icon-unit-prices"></i> <span> Unit Prices</span></a></li>
                      <!-- <li><a href="size-guide.php" ><i class="icon-size-guide"></i> <span>Size Guide</span></a></li> -->
                      <li><a <?php if($pageName == "nearby.php"){ echo 'class="active"'; } ?> href="nearby.php"><i class="icon-location"></i> <span>Nearby</span></a></li>
                      <li><a <?php if($pageName == "faqs.php"){ echo 'class="active"'; } ?> href="faqs.php"><i class="icon-info"></i> <span>FAQ</span></a></li>
                      <li><a <?php if($pageName == "contact.php"){ echo 'class="active"'; } ?> href="contact.php"><i class="icon-contact-msg"></i> <span>Contact Us</span></a></li>
                      <li><a <?php if($pageName == "pay-online.php"){ echo 'class="active"'; } ?> href="pay-online.php"><i class="icon-pay-card"></i> <span>Pay Online</span></a></li>  
                    </div>
                    
                    <div class="affiliate other">
                      <div class="affiliate-text">
                        <p class="mt-0">Affiliate by: </p>
                      </div>
                      <div class="u-haul ms-2">
                        <a href="https://www.uhaul.com/Auth/OrderLookUp/" target="_blank"><img src="images/home/banner/u-haul.svg" alt="U-haul"></a>
                      </div>
                    </div>
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

</body>