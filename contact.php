<!DOCTYPE html>
<html lang="en">

  <!--|| Bundle File Start ||-->
  <?php include "bundle.php" ?>
  <!--|| Bundle File End ||--> 


<body>
  <!--|| Header Section Start ||-->
  <?php include "header.php" ?>
  <!--|| Header Section End ||-->

  <!--|| Main Section Start ||-->
  <main>

    <!--|| Banner Section Start ||-->
      <section class="banner-section contact-us-banner">
        <div class="container text-center ">
          <div class="row banner-content">
              <h2>Contact Us</h2>           
          </div>
            <!--Banner content End -->

          <div class="row">
            <div class="affiliate other">
              <div class="u-haul ms-2">
                <a href="https://www.uhaul.com/Locations/Self-Storage-near-Gainesville-TX-76240/013532/" target="_blank"><img src="images/home/banner/u-haul.svg" alt="U-haul"></a>
              </div>
            </div>
          </div>
          <!--U-Haul Logo End-->
        </div>
      </section>
    <!--|| Banner Section End ||-->

    <!--|| Contact Form Section Start ||-->
    <section class="contact-form-section first-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 order-md-0 order-1">
                    <div class="contact-form">
                        <p>Our team at the office is amazing. No matter what doubts or questions you bring to us, your phone calls will always be answered quickly and with a great attitude. We will be sure to address your concerns in a timely manner, so feel free to send us a message. You can use the contact form on this page at any time. (Se habla español.)</p>
                        <div class="form-section">
                            <form id="submitGMScontactForm">
                                <div id="sendContactInfoSuccess" class="success"></div>
                                <div id="sendContactInfoError" class="error"></div>
                                <div class="input-field">
                                    <label for="firstName">First Name<span style="color: red;">*</span></label><br>
                                    <input type="text" name="firstName" name="fname">
                                </div>
                                <div class="input-field">
                                    <label for="lastName">Last Name<span style="color: red;">*</span></label><br>
                                    <input type="text" name="lastName" name="lname">
                                </div>
                                <div class="input-field">
                                    <label for="email">Email<span style="color: red;">*</span></label><br>
                                    <input type="email" name="email" name="email">
                                </div>
                                <div class="input-field">
                                    <label for="phone">Phone<span style="color: red;">*</span></label><br>
                                    <input type="text" name="phone" name="phone">
                                </div>
                                <div class="input-field">
                                    <label for="facility">Facility<span style="color: red;">*</span></label><br>
                                    <!-- <input type="text" name="facility" facility="facility"> -->
                                    <select name="facility" id="" class="form-control">
                                      <option>Select One</option>
                                      <option>Gainesville Mini Storage   - 2537 FM 51, Gainesville, TX 76240</option>
                                    </select>
                                </div>
                                <div class="input-field">
                                    <label for="questions">Questions or comments<span style="color: red;">*</span></label><br>
                                    <input type="text" name="questions" name="questions">
                                </div>
                            </form>

                            <div class="submit-btn">
                                <button class="button primary-button"><i class="icon-fluent-arrow-right"></i>Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Form part end-->

                <div class="col-md-4 d-flex align-items-center order-md-1 order-0">
                    <div class="contact-info">
                        <h5 class="mb-xl-4 mb-lg-2 mb-3">Gainesville Mini Storage</h5>
                        <p class="mb-xl-3 mb-lg-2">2537 FM 51</p>
                        <p class="mb-xl-5 mb-lg-3 mb-2">Gainesville, TX 76240</p>
                        <a href="tel:+(940) 400-2297"><h6>(940) 400-2297</h6></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--|| Contact Form Section End ||-->

  </main>
  <!--|| Main Section End ||-->

   <!--|| Footer Section Start ||-->
  <?php include "footer.php" ?>
  <!--|| Footer Section End ||-->

</body>
</html>