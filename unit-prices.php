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
      <section class="banner-section unit-prices-banner">
        <div class="container text-center ">
          <div class="row banner-content">
              <h2>Gainesville Mini Storage</h2>
              <p>2537 FM 51</p>
              <p>Gainesville, TX 76240</p>
              <p class="fw-bold">(940) 400-2297</p>
              <div class="cta-btn">
                <a href="contact.php" class="button primary-button"><i class="icon-fluent-arrow-right"></i>Contact Us</a>
              </div>
          </div>
        </div>
      </section>
    <!--|| Banner Section End ||-->

    <!--|| Office Access Time Section Start ||-->
    <section class="office-time-section first-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-12">
              <div class="office-time">
                <i class="icon-office-hours"></i>
                <h6 class="mt-3">Office Hours</h6>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-6">
                    <p>Sunday</p>
                    <p>Monday - Friday</p>
                    <p>Saturday</p>
                  </div>
                  <div class="col-md-6 col-sm-6 col-6">
                    <p>Closed</p>
                    <p>9:00 AM - 5:00 PM</p>
                    <p>9:00 AM - 2:00 PM</p>
                  </div>
                </div>
              </div>
          </div>
          <!-- Office Hours End -->
          
          <div class="col-md-6 col-sm-6 col-12">
              <div class="office-time access-time">
                <i class="icon-access-hours"></i>
                <h6 class="mt-3">Access Hours</h6>
                <div class="row">
                  <div class="col-md-6 col-12">
                    <p>Sunday - Saturday</p>
                    <p class="text-transparent">none</p>
                  </div>
                  <div class="col-md-6 col-12">
                    <p>Open 24 Hours</p>
                    <p class="text-transparent">none</p>
                  </div>
                </div>
                
                <div class="row">
                  <div class=" col-12">
                    <p class="fw-par">Remote Office - Sunday By Appointment</p>
                  </div>
                </div>
              </div>
          </div>
          <!-- Access Hours End -->

        </div>
      </div>
    </section>
    <!--|| Office Access Time Section End ||-->


    <!--|| Unit Filter Section Start ||-->
    <section class="unit-filter-section first-padding">
      <div class="container">
        <div class="row">

          <div class="col-lg-2 col-md-3 col-12">
            <div class="search-box">
               <form>
                <input type="text" id="search" name="search" placeholder="Search">
                <button type="submit" class="searchButton d-flex align-items-center">
                  <i class="icon-search"></i>
                </button>
              </form>
            </div>
            <!--Search Box End -->

            <div class="category">
              <ul class="nav flex-column nav-pills"" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <li><a href="#view-all" class="active" id="tab1-tab" data-bs-toggle="pill" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">View All</a></li>
                <li><a href="#small" id="tab2-tab" data-bs-toggle="pill" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Small</a></li>
                <li><a href="#medium" id="tab3-tab" data-bs-toggle="pill" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Medium</a></li>
                <li><a href="#large" id="tab4-tab" data-bs-toggle="pill" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Large</a></li>
                <li><a href="#vehicle" id="tab5-tab" data-bs-toggle="pill" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">Vehicle</a></li>
              </ul>
            </div>
            <!--Category Item End-->
          </div>

          <div class="col-lg-10 col-md-9 col-12">
            <div class="tab-content" id="v-pills-tabContent">

              <div class="category-details tab-pane fade show active"  id="view-all" role="tabpanel" aria-labelledby="tab1-tab">
                <div class="single-unit heading">
                  <div class="row">
                    <div class="col-md-2 col-6 head-size">
                      <p >Size <span class="d-flex align-items-center ms-2"><i class="icon-left-arrow " id="sort-last-to-first"></i><i class="icon-right-arrow " id="sort-last-to-first"></i></span></p>
                    </div>
                    <div class="col-md-5 head-unit d-md-block d-none">
                      <p class="common-pl">Unit Details</p>
                    </div>
                     <div class="col-md-5 col-6 head">
                       <p class="common-pl">Price <span class="d-flex align-items-center ms-2"><i class="icon-left-arrow" id="sort-last-to-first"></i><i class="icon-right-arrow" ></i></span></p>
                    </div>
                  </div>
                </div>
                <!--Single Unit Heading End -->

                <div class="single-unit unit-order">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">5’x10’</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self storage, non climate, drivethrough, roolup, drive up</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$60</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->

                <div class="single-unit unit-order">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">5’x10’</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self Storage, rollup, climate, interior</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$80</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->

                <div class="single-unit unit-order">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">5’x15’</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self Storage, non climate, drivethrough, rollup, drive up</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$60</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->

                <div class="single-unit unit-order">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">10’x10’</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self Storage, rollup, climate, interior</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$120</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->

                <div class="single-unit unit-order">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">10’x10’</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self storage, non climate, drivethrough, roolup, drive up</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$95</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->

                <div class="single-unit unit-order">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">10’x15’</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self Storage, rollup, climate, interior</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$160</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->

                <div class="single-unit unit-order">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">10’x15’</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self Storage, non climate, drivethrough, rollup, drive up</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$105</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->

                <div class="single-unit unit-order">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">10’x20’</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self Storage, non climate, drivethrough, rollup, drive up</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$140</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->

                <div class="single-unit last-unit  unit-order">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">12’x45’</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Parking, covered, rv/boat/vehicle/parking, lower level</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$120</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->
              </div>
              <!--=======Tab1 Data End=======-->

               <div class="category-details tab-pane fade"   id="small" role="tabpanel" aria-labelledby="tab2-tab">
                <div class="single-unit heading">
                  <div class="row">
                    <div class="col-md-2 col-6 head-size">
                      <p >Size <span class="d-flex align-items-center ms-2"><i class="icon-left-arrow"></i><i class="icon-right-arrow"></i></span></p>
                    </div>
                    <div class="col-md-5 head-unit d-md-block d-none">
                      <p class="common-pl">Unit Details</p>
                    </div>
                     <div class="col-md-5 col-6 head">
                       <p class="common-pl">Price <span class="d-flex align-items-center ms-2"><i class="icon-left-arrow"></i><i class="icon-right-arrow"></i></span></p>
                    </div>
                  </div>
                </div>
                <!--Single Unit Heading End -->

                <div class="single-unit">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">5’x10’</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self storage, non climate, drivethrough, roolup, drive up</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$60</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->

                <div class="single-unit">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">5’x10’</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self Storage, rollup, climate, interior</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$80</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->

                <div class="single-unit last-unit">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">5'x15'</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self Storage, non climate, drivethrough, rollup, drive up</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$60</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->
              </div>
              <!--=======Tab2 Data End=======-->

               <div class="category-details tab-pane fade"   id="medium" role="tabpanel" aria-labelledby="tab3-tab">
                <div class="single-unit heading">
                  <div class="row">
                    <div class="col-md-2 col-6 head-size">
                      <p >Size <span class="d-flex align-items-center ms-2"><i class="icon-left-arrow"></i><i class="icon-right-arrow"></i></span></p>
                    </div>
                    <div class="col-md-5 head-unit d-md-block d-none">
                      <p class="common-pl">Unit Details</p>
                    </div>
                     <div class="col-md-5 col-6 head">
                       <p class="common-pl">Price <span class="d-flex align-items-center ms-2"><i class="icon-left-arrow"></i><i class="icon-right-arrow"></i></span></p>
                    </div>
                  </div>
                </div>
                <!--Single Unit Heading End -->

                <div class="single-unit">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">10'x10'</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self Storage, rollup, climate, interior</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$120</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->

                <div class="single-unit">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">10'x10'</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self Storage, non climate, drivethrough, rollup, drive up</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$95</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->

                <div class="single-unit ">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">10'x15'</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self Storage, rollup, climate, interior</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$160</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->

                <div class="single-unit last-unit">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">10'x15'</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self Storage, non climate, drivethrough, rollup, drive up</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$105</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->
              </div>
              <!--=======Tab3 Data End=======-->

               <div class="category-details tab-pane fade"   id="large" role="tabpanel" aria-labelledby="tab4-tab">
                <div class="single-unit heading">
                  <div class="row">
                    <div class="col-md-2 col-6 head-size">
                      <p >Size <span class="d-flex align-items-center ms-2"><i class="icon-left-arrow"></i><i class="icon-right-arrow"></i></span></p>
                    </div>
                    <div class="col-md-5 head-unit d-md-block d-none">
                      <p class="common-pl">Unit Details</p>
                    </div>
                     <div class="col-md-5 col-6 head">
                       <p class="common-pl">Price <span class="d-flex align-items-center ms-2"><i class="icon-left-arrow"></i><i class="icon-right-arrow"></i></span></p>
                    </div>
                  </div>
                </div>
                <!--Single Unit Heading End -->

                <div class="single-unit last-unit">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">10'x20'</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Self Storage, non climate, drivethrough, rollup, drive up</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$140</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->
              </div>
              <!--=======Tab4 Data End=======-->

               <div class="category-details tab-pane fade"   id="vehicle" role="tabpanel" aria-labelledby="tab5-tab">
                <div class="single-unit heading">
                  <div class="row">
                    <div class="col-md-2 col-6 head-size">
                      <p >Size <span class="d-flex align-items-center ms-2"><i class="icon-left-arrow"></i><i class="icon-right-arrow"></i></span></p>
                    </div>
                    <div class="col-md-5 head-unit d-md-block d-none">
                      <p class="common-pl">Unit Details</p>
                    </div>
                     <div class="col-md-5 col-6 head">
                       <p class="common-pl">Price <span class="d-flex align-items-center ms-2"><i class="icon-left-arrow"></i><i class="icon-right-arrow"></i></span></p>
                    </div>
                  </div>
                </div>
                <!--Single Unit Heading End -->

                <div class="single-unit last-unit">
                  <div class="row wrapper">
                    <div class="col-md-2 col-8 store-size order-0">
                        <div class="store-div">
                          <h5 class="size">12'x45'</h5> 
                        </div>                   
                    </div>
                    <div class="col-md-5 col-8 store-unit-details order-md-1 order-2  ">
                        <p class="unit-details common-pl">Parking, covered, rv/boat/vehicle/parking, lower level</p>                
                    </div>
                     <div class="col-md-2 col-4 unit-price order-md-2 order-1">
                        <div class="price-div">
                          <h5 class="price common-pl">$120</h5>      
                        </div>       
                    </div>
                    <div class="col-md-3 col-4 call-btn order-md-3 order-3">
                        <a href="#" class="button primary-button call-btn" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                    </div>
                  </div>
                </div>
                <!--Single Unit End -->
              </div>
              <!--=======Tab5 Data End=======-->
          </div>
         
          </div>
        </div>
      </div>

           <!-- Modal Part Start Here -->
      <div class="modal fade call-modal " id="callModal" tabindex="-1" aria-labelledby="callModalLabel" aria-hidden="true">
        <div class="modal-dialog">

          <div class="modal-content">

            <div class="modal-header d-flex justify-content-between align-items-center ">
              <h6 class="mb-0">Locations</h6>
              <button type="button" class="icon-cross" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <p>Due to limited availability, please call in order to reserve a similar unit.</p>
              <p class="fw-bold">Selected Unit</p>

              <div class="row selected-item ">
                <div class="col-md-10 col-8">
                    <div class="row">
                      <div class="col-md-4 col-12 selected-content one order-md-0 order-0">
                        <div class="heading-size">
                          <h5 class="size common-pl">5’x10’</h5>
                        </div>
                      </div>
                      <div class="col-md-8 col-12 selected-content two order-md-1 order-1">
                        <p class="common-pl">Self storage, non climate,<br> drivethrough, roolup, drive up</p>
                      </div>
                    </div>
                </div>
                
                <div class="col-md-2 col-4 selected-content order-md-2 order-1">
                  <div class="price">
                    <h5 class="common-pl ">$60</h5>
                  </div>
                </div>
              </div>
              <!--Selected Filter-->

              <p class="fw-bold blue-color">Gainesville Mini Storage</p>
              <p class="mt-2">2537 FM 51, Gainesville, TX 76240</p>
              <div class="phone-number">
                <p> <span class="fw-bold">New Rentals:</span> (940) 400-2297</p>
                <p class="mt-sm-3 mt-2"><span class="fw-bold">Current Customers: </span>(940) 300-7610</p>
              </div>
            </div>

            <div class="modal-footer">
              <div class="modal-cta call-btn">
                 <button href="#" class="button primary-button close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="icon-fluent-arrow-right"></i>Close</button>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- Modal Part End Here -->
    </section>
    <!--|| Unit Filter Section End ||-->

    
      <!--|| Feature Section Start ||-->
    <section class="feature-section first-padding d-lg-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-sm-6 col-12">
                    <div class="feature-head ">
                        <p class="feature-num">01</p>
                        <h3>Features</h3>
                    </div>
                </div>
                <!-- Single feature End -->
    
                <div class="col-lg-9 ">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-feature ">
                                <div class="feature-content">
                                    <i class="icon-hours-24"></i>
                                    <h5>24 Hours <br>Access</h5>
                                </div>
                                <div class="g-icon">
                                    <i class="icon-g"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Single feature End -->
    
                        <div class="col-lg-4 col-md-6 ">
                            <div class="single-feature">
                                <div class="feature-content">
                                    <i class="icon-boxes"></i>
                                    <h5>Boxes &<br>Supplies</h5>
                                </div>
    
                                <div class="g-icon">
                                    <i class="icon-g"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Single feature End -->
    
                        <div class="col-lg-4 col-md-6">
                            <div class="single-feature ">
                                <div class="feature-content">
                                    <i class="icon-dollies-handcarts"></i>
                                    <h5>Dollies/<br>Handcarts</h5>
                                </div>
                                <div class="g-icon">
                                    <i class="icon-g"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Single service End -->
    
                        <div class="col-lg-4 col-md-6 mt-4">
                            <div class="single-feature ">
                                <div class="feature-content">
                                    <i class="icon-fenced-gated"></i>
                                    <h5>Fenced &<br> Gated</h5>
                                </div>
                                <div class="g-icon">
                                    <i class="icon-g"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Single feature End -->
    
                        <div class="col-lg-4 col-md-6 mt-4">
                            <div class="single-feature ">
                                <div class="feature-content">
                                    <i class="icon-ground-floor"></i>
                                    <h5>Ground <br>Floor</h5>
                                </div>
    
                                <div class="g-icon">
                                    <i class="icon-g"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Single feature End -->
    
                        <div class="col-lg-4 col-md-6 mt-4">
                            <div class="single-feature ">
                                <div class="feature-content">
                                    <i class="icon-security-camera"></i>
                                    <h5>Security <br>Camera</h5>
                                </div>
                                <div class="g-icon">
                                    <i class="icon-g"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Single service End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--|| Feature Section End ||-->
    
    <!--|| Feature Section Mobile Start ||-->
    <section class="feature-section first-padding d-lg-none d-block">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-12 col-sm-6 col-12">
            <div class="feature-head ">
              <p class="feature-num">01</p>
              <h3 >Features</h3>
            </div>
          </div>
          <!-- Single feature End -->
          
          <div class="col-lg-9 col-md-12">
            <div class="row">

              <div class="col-md-12">
                <div class=" swiper featureSwiperTwo">

                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="single-feature ">
                      <div class="feature-content">
                        <i class="icon-hours-24"></i>
                        <h5>24 Hours <br>Access</h5>
                      </div>
                      <div class="g-icon">
                        <i class="icon-g"></i>
                      </div>
                    </div>
                  </div>
                  <!--Slide 1 End-->
                  
                  <div class="swiper-slide">
                    <div class="single-feature alt">
                      <div class="feature-content">
                        <i class="icon-boxes"></i>
                        <h5>Boxes &<br>Supplies</h5>
                      </div>
                  
                      <div class="g-icon">
                        <i class="icon-g"></i>
                      </div>
                    </div>
                  </div>
                  <!--Slide 2 End-->

                  <div class="swiper-slide">
                    <div class="single-feature ">
                      <div class="feature-content">
                        <i class="icon-dollies-handcarts"></i>
                        <h5>Dollies/<br>Handcarts</h5>
                      </div>
                        <div class="g-icon">
                        <i class="icon-g"></i>
                      </div>
                    </div>
                  </div>
                  <!--Slide 3 End-->

                  <div class="swiper-slide">
                       <div class="single-feature ">
                          <div class="feature-content">
                            <i class="icon-fenced-gated"></i>
                            <h5>Fenced &<br> Gated</h5>
                          </div>
                          <div class="g-icon">
                            <i class="icon-g"></i>
                          </div>
                        </div>
                  </div>
                  <!--Slide 4 End-->

                  <div class="swiper-slide">
                        <div class="single-feature alt">
                          <div class="feature-content">
                            <i class="icon-ground-floor"></i>
                            <h5>Ground <br>Floor</h5>
                          </div>
                        
                            <div class="g-icon">
                            <i class="icon-g"></i>
                          </div>
                        </div>
                  </div>
                  <!--Slide 5 End-->

                  <div class="swiper-slide">
                       <div class="single-feature ">
                      <div class="feature-content">
                        <i class="icon-security-camera"></i>
                        <h5>Security <br>Camera</h5>
                      </div>
                      <div class="g-icon">
                        <i class="icon-g"></i>
                      </div>
                    </div>
                  </div>
                  <!--Slide 6 End-->
                </div>
            
              </div>
              </div>
          </div>
        </div>
          <!-- Single feature End -->  
        </div>

        <!--Feature 1st Row End-->
      </div>
    </section>
    <!--|| Feature Section Mobile End ||-->

    <!--|| Location Section Start ||-->
    <section class="location-section location-bg-none first-padding overflow-hidden">
      <div class="container">
        <div class="row">
            <div class="feature-head text-center">
              <p class="feature-num">02</p>
              <h3 >Locations</h3>
            </div>
        </div>
        <!--Feature Heading End-->

        <div class="storage-unit first-padding">
          <div class="row">
            <div class="col-xl-7 col-lg-6 col-md-12">
              <div class="map-one-img">
                <img src="images/unit-prices/location/map1.webp" class="img-fluid" alt="Location">
              </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-12  d-flex align-items-center">
              <div class="map-wrapper">
                <div class="map-content">
                  <h5>Storage Units Near Gainesville, TX</h5>
                  <p>Our climate-controlled storage units are only a few minutes from Gainesville High School, Frank Buck Zoo, and other well-known places just west of downtown Gainesville, Texas. You can feel free to reserve one of our units if you live near Sanger, Thackerville, Muenster, Whitesboro, Valley View, Saint Jo, Lindsay, Oak Ridge, Pilot Point, or anywhere in the Texoma region.</p>
                </div>
              </div>              
            </div>
          </div>
        </div>
        <!-- Location End -->

 
      </div>
    </section>
    <!--|| Location Section End ||-->

    <!--|| Driving Direction Section Start ||-->
    <section class="driving-directions-section ">
      <div class="container">
        <h5>Driving Directions</h5>
        <div class="row">
          <div class="col-md-6">
            <div class="driving-direction-content ">
              <h6 class="common-margin">From downtown Gainesville, TX:</h6>
              <p class="common-margin">Head south on N Grand Ave toward E Broadway St</p>
              <p>Turn right onto California St</p>
              <p>Pass by McDonald’s (on the left in 0.9 miles)</p>
              <p>Pass by Frank Buck Zoo and NCTC College</p>
              <p>Pass by Texaco Gas station, After flashing traffic light</p>
              <p>Gainesville Mini Storage will be on the right</p>
            </div>
            <!--Driving direction 1st paragraph end-->
            
            <div class="driving-direction-content top-margin">
              <h6>From Whitesboro, TX:</h6>
              <p class="common-margin">Head south on N Union St toward E Main St</p>
              <p>Turn right onto California St</p>
              <p>Turn right at the 1st cross street onto TX-56 W/W Main St</p>
              <p>In 1.8 miles, turn left</p>
              <p>Slight right onto US-82 W</p>
              <p>Pass by AutoZone Auto Parts (on the left in 10.9 miles)</p>
              <p>In 1.7 miles, turn left onto I-35 Frontage Rd</p>
              <p>In 1.2 miles, turn right onto FM 51 S/W California St</p>
              <p>Continue to follow FM 51 S</p>
              <p>In 1.6 miles, Gainesville Mini Storage will be on the right</p>
            </div>
             <!--Driving direction 1st paragraph end-->
          </div>

          <div class="col-md-6">
            <div class="driving-direction-content">
              <h6 class="common-margin">From Muenster, TX:</h6>
              <p class="common-margin"> Head south on N Main St toward 3rd St</p>
              <p>Turn left onto US-82 W/E Division St</p>
              <p>Continue to follow US-82 W</p>
              <p>Pass by Sonic Drive-In (on the right in 0.5 miles)</p>
              <p>In 8.7 miles, turn right onto FM 3108 S/Hickory Dr</p>
              <p>Continue to follow FM 3108 S</p>
              <p>In 3.5 miles, turn left onto FM1630</p>
              <p>In 1.9 miles, turn left onto FM 51 N</p>
              <p>Gainesville Mini Storage will be on the left</p>
            </div>
            <!--Driving direction 1st paragraph end-->
            
            <div class="driving-direction-content top-margin">
              <h6>From Thackerville, OK:</h6>
              <p class="common-margin">Entering Texas</p>
              <p>In 7.5 miles, take exit 497 to merge onto I-35 Frontage Rd</p>
              <p>Turn right onto FM 51 S/W California St</p>
              <p>Continue to follow FM 51 S</p>
              <p>In 1.6 miles, Gainesville Mini Storage will be on the right</p>
            </div>
             <!--Driving direction 1st paragraph end-->

          </div>
        </div>
      </div>
    </section>
    <!--|| Driving Direction Section End ||-->

    <!--|| CTA Section Start ||-->
    <section class="checkout-cta-section ">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 d-flex align-items-center">
            <h4>Check Out What Our Customers Are Saying</h4>
          </div>
          <div class="col-lg-3">
            <div class="cta-btn text-lg-end text-start mt-lg-0 mt-3">
                <button class="button primary-button" data-bs-toggle="modal" data-bs-target="#reviewModal"><i class="icon-fluent-arrow-right"></i>Write A Review</button>
              </div>
          </div>
        </div>
      </div>

      <!-- Modal Part Start Here -->
      <div class="testimonial-modal modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header d-flex justify-content-end border-0">
              <button type="button" class="icon-cross" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="rating">
                <p class="text-center">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                </p>
                <p class="text-center mt-2">Not Rated</p>
              </div>
              <!--Rating Section End-->

                <div class="contact-form mt-sm-4 mt-3">
                        <div class="form-section">
                            <form action="">
                                <div class="input-field">
                                    <label for="facility">Facility*</label><br>
                                    <div class="facility-option">
                                      <span class="arrow"></span>
                                      <input class="form-control custom-dropdown-value" value="Select Facility" type="text" >
                                      <ul class="custom-dropdown">
                                          <li><a href="javascript:void(0)">Select Facility</a></li>
                                          <li><a href="javascript:void(0)">Gainesville Mini Storage - 2537, Gainesville, TX 76240</a></li>
                                      </ul>
                                    </div>
                                </div>                              
                                <div class="input-field">
                                    <label for="name">Name</label><br>
                                    <input type="text" name="name" id="name" placeholder="Please enter your name...">
                                </div>
                                <div class="input-field">
                                    <label for="email">Email</label><br>
                                    <input type="email" name="email" id="email" placeholder="Please enter your email...">
                                </div>
                                <div class="input-field">
                                    <label for="message">Describe Your Experience</label><br>
                                    <textarea type="textarea" rows="3" name="email" id="email" placeholder="Tell us what you think about us..."></textarea>
                                </div>
                                <div class="form-alert">
                                  <p class="text-center">Note: Your comments will be posted on this website with your first name & last initial</p>
                                </div>
                            </form>

                            <div class="submit-btn text-center">
                                <button class="button primary-button"><i class="icon-fluent-arrow-right"></i>Submit</button>
                            </div>
                        </div>
                    </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal Part End Here -->

    </section>
    <!--|| CTA Section Start ||-->
  </main>
  <!--|| Main Section End ||-->

   <!--|| Footer Section Start ||-->
  <?php include "footer.php" ?>
  <!--|| Footer Section End ||-->

</body>
</html>