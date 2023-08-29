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
      <section class="banner-section size-guide-banner">
        <div class="banner-container text-center ">
          <div class="row banner-content">
              <h2>Size Guide</h2>
              <p>Do you need help finding the perfect unit size? All you need is an idea of everything you intend to store and a few moments to spare. Simply enter the items into the calculator and be sure to include the quantity of each item. If you have additional questions, don’t hesitate to get in touch with a storage expert!</p>
          </div>
        </div>
      </section>
    <!--|| Banner Section End ||-->

     <!--|| Storage Calculator Section Start ||-->
     <section class="storage-calculator-section  unit-filter-section">
      <div class="container">
        <div class="row first-padding">
            <div class="feature-head ">
              <p class="feature-num">01</p>
              <h3 >Storage Calculator</h3>
            </div>
        </div>
        <!--Heading Row End -->

        <div class="row">
          <div class="col-md-2 col-12">

            <div class="category ">
              <ul>
                <li><a href="#view-all" class="active">Bedroom</a></li>
                <li><a href="#small">Kitchen</a></li>
                <li><a href="#medium">Living & Dining</a></li>
                <li><a href="#large">Office</a></li>
                <li><a href="#vehicle">Outdoors</a></li>
              </ul>
            </div>
            <!--Category Item End-->
          </div>

          <div class="col-md-10 col-12">
            <div class="category-details">
                <div class="single-unit heading">
                  <div class="row">
                    <div class="col-md-4 col-6 head-size">
                      <p>Size</p>
                    </div>
                    <div class="col-md-4 head-unit">
                      <p class="common-pl">Unit Details</p>
                    </div>
                     <div class="col-md-4 col-6 head">
                       <p class="common-pl">Price</p>
                    </div>
                  </div>
                </div>
                <!--Single Unit Heading End -->

                <div class="single-unit">
                  <div class="row wrapper">
                    <div class="col-md-4 col-6 store-size">
                        <p>Bed, King Size</p>                   
                    </div>
                    <div class="col-md-4 store-unit-details">
                        <p class="unit-details common-pl">approximately 70 cubic feet</p>                
                    </div>
                     <div class="col-md-4 col-4 unit-price-count">
                        <div class="row">
                          <div class="col-md-8 col-12">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="plus-minus d-flex common-pl">
                                  <a href="#">
                                    <i class="icon-plus"></i>
                                  </a>
                                  <a href="#">
                                    <i class="icon-minus ms-3"></i>
                                  </a>
                              </div>
                              <div class="input-count"> 
                                <input type="text" id="count" name="count">
                              </div>
                            </div>
                          </div>

                          <div class="col-md-4 col-12 d-flex align-items-center">
                            <p class="refresh">Refresh</p>
                          </div>
                        </div>         
                    </div>
                  </div>
                </div>
                <!--Single Unit Heading End -->

                <div class="single-unit">
                  <div class="row wrapper">
                    <div class="col-md-4 col-6 store-size">
                        <p>Bed, Double Size</p>                   
                    </div>
                    <div class="col-md-4 store-unit-details">
                        <p class="unit-details common-pl">approximately 55 cubic feet</p>                
                    </div>
                     <div class="col-md-4 col-4 unit-price-count">
                        <div class="row">
                          <div class="col-md-8 col-12">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="plus-minus d-flex common-pl">
                                  <a href="#">
                                    <i class="icon-plus"></i>
                                  </a>
                                  <a href="#">
                                    <i class="icon-minus ms-3"></i>
                                  </a>
                              </div>
                              <div class="input-count"> 
                                <input type="text" id="count" name="count">
                              </div>
                            </div>
                          </div>

                          <div class="col-md-4 col-12 d-flex align-items-center">
                            <p class="refresh">Refresh</p>
                          </div>
                        </div>         
                    </div>
                  </div>
                </div>
                <!--Single Unit Heading End -->

                <div class="single-unit">
                  <div class="row wrapper">
                    <div class="col-md-4 col-6 store-size">
                        <p>Bed, Single</p>                   
                    </div>
                    <div class="col-md-4 store-unit-details">
                        <p class="unit-details common-pl">approximately 40 cubic feet</p>                
                    </div>
                     <div class="col-md-4 col-4 unit-price-count">
                        <div class="row">
                          <div class="col-md-8 col-12">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="plus-minus d-flex common-pl">
                                  <a href="#">
                                    <i class="icon-plus"></i>
                                  </a>
                                  <a href="#">
                                    <i class="icon-minus ms-3"></i>
                                  </a>
                              </div>
                              <div class="input-count"> 
                                <input type="text" id="count" name="count">
                              </div>
                            </div>
                          </div>

                          <div class="col-md-4 col-12 d-flex align-items-center">
                            <p class="refresh">Refresh</p>
                          </div>
                        </div>         
                    </div>
                  </div>
                </div>
                <!--Single Unit Heading End -->

            </div>
          </div>
        </div>
        <!--All Calculation End-->
      </div>
     </section>
     <!--|| Storage Calculator Section End ||-->
  </main>
  <!--|| Main Section End ||-->

   <!--|| Footer Section Start ||-->
  <?php include "footer.php" ?>
  <!--|| Footer Section End ||-->

</body>
</html>