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
        <div class="banner-container text-center ">
          <div class="row banner-content">
              <h2>Contact Us</h2>           
          </div>
        </div>
      </section>
    <!--|| Banner Section End ||-->

    <!--|| Contact Form Section Start ||-->
    <section class="contact-form-section first-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form">
                        <p>Our team at the office is amazing. No matter what doubts or questions you bring to us, your phone calls will always be answered quickly and with a great attitude. We will be sure to address your concerns in a timely manner, so feel free to send us a message. You can use the contact form on this page at any time. (Se habla español.)</p>
                        <div class="form-section">
                            <form action="">
                                <div class="input-field">
                                    <label for="firstName">First Name*</label><br>
                                    <input type="text" name="firstName" id="first-name">
                                </div>
                                <div class="input-field">
                                    <label for="firstName">Last Name*</label><br>
                                    <input type="text" name="lastName" id="last-name">
                                </div>
                                <div class="input-field">
                                    <label for="email">Email*</label><br>
                                    <input type="email" name="email" id="email">
                                </div>
                                <div class="input-field">
                                    <label for="phone">Phone*</label><br>
                                    <input type="text" name="phone" id="phone">
                                </div>
                                <div class="input-field">
                                    <label for="facility">Facility*</label><br>
                                    <input type="text" name="facility" id="facility">
                                </div>
                                <div class="input-field">
                                    <label for="questions">Questions or comments*</label><br>
                                    <input type="text" name="questions" id="questions">
                                </div>
                            </form>

                            <div class="submit-btn">
                                <button class="button primary-button"><i class="icon-fluent-arrow-right"></i>Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Form part end-->

                <div class="col-md-4 d-flex align-items-center ">
                    <div class="contact-info">
                        <h5 class="mb-4">Gainesville Mini Storage</h5>
                        <p class="mb-3">2537 FM 51</p>
                        <p class="mb-5">Gainesville, TX 76240</p>
                        <h6>(940) 400-2297</h6>
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