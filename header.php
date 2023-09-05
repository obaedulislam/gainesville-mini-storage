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
            <li><a href="size-guide.php">Size Guide</a></li>
            <li><a href="nearby.php">Nearby</a></li>
            <li><a href="faqs.php">FAQ</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="pay-online.php">Pay Online</a></li>
          </ul>
        </div>

        <div class="col-8 col-sm-8  menu-text menu-mob">
          
          <ul class="navigation-menu ul-list">
             <li><a id="toggleMenuMobile" class="hamburger-menu"><span><img src="images/header/hamburger.svg" alt=""></span></a>
                    <ul id="toggleMenuItem" class="ul-list d-flex align-items-center">
                        <div>
                          <li><a href="unit-prices.php">Unit Prices</a></li>
                          <li><a href="size-guide.php">Size Guide</a></li>
                          <li><a href="nearby.php">Nearby</a></li>
                          <li><a href="faqs.php">FAQ</a></li>
                          <li><a href="contact.php">Contact Us</a></li>
                          <li><a href="pay-online.php">Pay Online</a></li>  
                        </div>
                    </ul>
          
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

</body>