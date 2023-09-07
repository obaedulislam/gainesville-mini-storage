  <!DOCTYPE html>
<html lang="en">

  <!--|| Bundle File Start ||-->
  <?php include "bundle.php" ?>
  <!--|| Bundle File End ||-->
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
            <li><a href="unit-prices.php">Unit Prices</a></li>
            <!-- <li><a href="size-guide.php" >Size Guide</a></li> -->
            <li><a href="nearby.php">Nearby</a></li>
            <li><a href="faqs.php">FAQ</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="pay-online.php">Pay Online</a></li>
          </ul>
        </div>

        <div class="col-8 col-sm-8  menu-text menu-mob">
          
          <ul class="navigation-menu ul-list">
             <li><a id="toggleMenuMobile" class="hamburger-menu"><span><img src="images/header/hamburger.svg" alt=""></span></a>
                    <ul id="toggleMenuItem" class="ul-list ">
                        <div>
                          <li><a href="index.php" class="active"><i class="icon-home"></i> <span> Home</span></a></li>
                          <li><a href="unit-prices.php"><i class="icon-unit-prices"></i> <span> Unit Prices</span></a></li>
                          <!-- <li><a href="size-guide.php" ><i class="icon-size-guide"></i> <span>Size Guide</span></a></li> -->
                          <li><a href="nearby.php"><i class="icon-location"></i> <span>Nearby</span></a></li>
                          <li><a href="faqs.php"><i class="icon-info"></i> <span>FAQ</span></a></li>
                          <li><a href="contact.php"><i class="icon-contact-msg"></i> <span>Contact Us</span></a></li>
                          <li><a href="pay-online.php"><i class="icon-pay-card"></i> <span>Pay Online</span></a></li>  
                        </div>
                    </ul>
          
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

</body>