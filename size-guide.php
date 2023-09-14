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
        <div class="container text-center ">
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
          <div class="col-md-12 col-12">

            <div class="category ">
              <ul class="nav nav-pills"" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
                <li ><a href="#bedroom" class="active" id="tab1-tab" data-bs-toggle="pill" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Bedroom</a></li>
                <li><a href="#kitchen" id="tab2-tab" data-bs-toggle="pill" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Kitchen</a></li>
                <li><a href="#living-dining" id="tab3-tab" data-bs-toggle="pill" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Living & Dining</a></li>
                <li><a href="#office" id="tab4-tab" data-bs-toggle="pill" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Office</a></li>
                <li><a href="#outdoors" id="tab5-tab" data-bs-toggle="pill" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">Outdoors</a></li>
              </ul>
            </div>
            <!--Category Item End-->
          </div>

          <div class="col-md-12 col-12">
            <div class="row">
              <div class="col-md-7 order-md-0 order-1">
                <div class="tab-content" id="v-pills-tabContent">

                  <div class="category-details tab-pane fade show active"  id="bedroom" role="tabpanel" aria-labelledby="tab1-tab">
                    <div class="single-unit heading">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3  col-6 head-size">
                          <p>Size</p>
                        </div>
                        <div class="col-lg-5 col-md-5  head-unit d-md-block d-none">
                          <p class="common-pl">Unit Details</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 head">
                          <p class="common-pl">Price</p>
                        </div>
                      </div>
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Bed, King Size</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 70 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 70 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>

                              <div class="plus-minus d-flex common-pl">
                                  <a data-size="70" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="70" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus  ms-lg-3 ms-2"></i>
                                  </a>                                  
                              </div>
                              
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->

                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Bed, Double Size</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 55 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 55 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  <a  data-size="55" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                  <a  data-size="55" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                                  
                              </div>
                            </div>       
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7  store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Bed, Single</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 40 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 40 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="40" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="40" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus  ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>     
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Bed, Bunk (set of 2)</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 70 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 70 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  <a data-size="70" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                  <a data-size="70" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                                  
                              </div>
                            </div>         
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Dresser, Chest of Drawers</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 30 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7  store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 30 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5  order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="30" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                  <a data-size="30" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>       
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7  store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Cedar Chest</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 15 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 15 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  <a data-size="15" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                  <a data-size="15" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                                  
                              </div>
                            </div>        
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Ironing Board</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Side Tables</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>        
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Wardrobe Boxes (30 hangers)</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2  d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                  <a data-size="10" class="increase " href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>     
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Wardrobe Boxes (30 hangers)</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit last-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Mirror</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                 
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                   <a data-size="10" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->
                  </div>
                  <!--=======Tab1 Data End=======-->

                  <div class="category-details tab-pane fade"  id="kitchen" role="tabpanel" aria-labelledby="tab2-tab">
                    <div class="single-unit heading">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3  col-6 head-size">
                          <p>Size</p>
                        </div>
                        <div class="col-lg-5 col-md-5  head-unit d-md-block d-none">
                          <p class="common-pl">Unit Details</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 head">
                          <p class="common-pl">Price</p>
                        </div>
                      </div>
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Breakfast Chair</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 5 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 5 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>

                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="5" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                  <a data-size="5" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                              
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->

                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Breakfast Table</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>       
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7  store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Chair, High</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 5 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 5 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="5" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                  <a data-size="5" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>     
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Kitchen Cabinet</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 30 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 30 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="30" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                  <a data-size="30" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>

                            </div>         
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Serving Cart</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 15 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7  store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 15 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5  order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="15" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="15" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>       
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7  store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Utility Cabinet</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>        
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Refrigerator Small</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 40 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 40 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                 
                                  <a data-size="40" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                   <a data-size="40" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Refrigerator Med</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 45 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 45 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="45" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="45" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>        
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Refrigerator Large or DBdoor</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 55 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2  d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 55 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="55" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                  <a data-size="55" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>     
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Freezer Small</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 45 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 45 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="45" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus "></i>
                                  </a>
                                  <a data-size="45" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Freezer Medium</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 50 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 50 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="50" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="50" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Freezer Large</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 60 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 60 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="60" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="60" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Washing Machine</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 35 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 35 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="35" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="35" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Dryer</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 25 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 25 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="25" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="25" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Stove</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 30 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 30 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="30" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="30" class="increase" href="javascript:void(0)">
                                    <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit last-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Dishwasher</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 35 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 35 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="35" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="35" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Microwave</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->
                  </div>
                  <!--=======Tab2 Data End=======-->

                  <div class="category-details tab-pane fade"  id="living-dining" role="tabpanel" aria-labelledby="tab3-tab">
                    <div class="single-unit heading">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3  col-6 head-size">
                          <p>Size</p>
                        </div>
                        <div class="col-lg-5 col-md-5  head-unit d-md-block d-none">
                          <p class="common-pl">Unit Details</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 head">
                          <p class="common-pl">Price</p>
                        </div>
                      </div>
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Sofa 4 Seater</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 55 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 55 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>

                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="55" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="55" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                              
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->

                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Sofa 3 Seater</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 50 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 50 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="50" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="50" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>       
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7  store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Sofa 2 Seater</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 35 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 35 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="35" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="35" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>     
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Sofa Bed</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 50 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 50 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="50" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="50" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>         
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Sofa Sectional (per section)</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 30 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7  store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 30 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5  order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="30" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="30" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>       
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7  store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Arm Chair</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>        
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Occasional Chair</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 15 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 15 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="15" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="15" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Lazy Boy</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 25 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 25 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="25" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="25" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>        
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Book Case</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 20 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2  d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 20 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="20" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="20" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>     
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Pictures</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 5 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 5 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="5" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="5" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Coffee Tables</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 5 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 5 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="5" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="5" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >End Table</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 5 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 5 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="5" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="5" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Wall Unit Small</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 15 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 15 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="15" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="15" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Wall Unit Large</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 20 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 20 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="20" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="20" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Cupboard Small</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                    <a data-size="10" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Cupboard Large</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 15 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 15 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="15" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="15" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Bureau</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 20 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 20 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="20" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="20" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Television</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 25 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 25 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="25" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="25" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Television Table</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Video</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 5 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 5 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="5" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="5" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Stereo / Hi Fi - Mid</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 15 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 15 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="15" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a  data-size="15" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Stereo / Hi Fi - Large</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 20 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 20 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="20" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="20" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Lamps Floor or Pole</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 3 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 3 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="3" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="3" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Curtain</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Upright Piano</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 60 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 60 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="60" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="60" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Baby Grand Piano</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 70 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 70 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="70" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="70" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Grand Piano</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 80 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 80 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="80" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="80" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Carpet & Rug</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                 
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                   <a data-size="10" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Clock Grand Father</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 20 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 20 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="20" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="20" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Magazine Rack</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 2 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 2 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="2" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="2" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Buffet</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 30 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 30 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="30" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="30" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Dining Table Small</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 20 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 20 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="20" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="20" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Dining Table Mid</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 25 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 25 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="25" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="25" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Dining Table (large or glass)</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 30 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 30 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="30" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="30" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Dining Chair</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 5 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 5 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="5" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="5" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >China Cabinet</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 25 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 25 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="25" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="25" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit ">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Corner Cabinet</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 20 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 20 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="20" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="20" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit last-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Vacuum Cleaner</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 5 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 5 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="5" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="5" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->
                  </div>
                  <!--=======Tab3 Data End=======-->

                  <div class="category-details tab-pane fade"  id="office" role="tabpanel" aria-labelledby="tab4-tab">
                    <div class="single-unit heading">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3  col-6 head-size">
                          <p>Size</p>
                        </div>
                        <div class="col-lg-5 col-md-5  head-unit d-md-block d-none">
                          <p class="common-pl">Unit Details</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 head">
                          <p class="common-pl">Price</p>
                        </div>
                      </div>
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Bench</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 25 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 25 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>

                              <div class="plus-minus d-flex common-pl">
                                 
                                  <a data-size="25" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                   <a data-size="25" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                              
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->

                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Bookcase, Small</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>       
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7  store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Bookcase, Mid</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 12 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 12 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="12" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="12" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>     
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Bookcase, Large</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 15 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 15 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                 
                                  <a data-size="15" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                   <a data-size="15" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>         
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Cabinet</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 25 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7  store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 25 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5  order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="25" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="25" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>       
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7  store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Cabinet, metal small</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 20 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 20 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                 
                                  <a data-size="20" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                   <a data-size="20" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>        
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Chair, arm</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Glass top</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 15 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 15 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="15" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="15" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>        
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Partitions</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2  d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>     
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Rack</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 3 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 3 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="3" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="3" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Rug</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 2 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 2 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="2" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="2" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Safe</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 50 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 50 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="50" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="50" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Shelf, metal small</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 5 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 5 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="5" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="5" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Shelving, industrial</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 8 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 8 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="8" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="8" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Chair, Stackable</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 3 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 3 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                 
                                  <a data-size="3" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                   <a data-size="3" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Chair, Upholstered</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 30 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 30 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="30" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="30" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Chair, folding</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 2 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 2 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="2" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="2" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Coat rack</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 2 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 2 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="2" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="2" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Computer desk</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 20 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 20 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="20" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="20" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Copier stand</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 2 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 2 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="2" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="2" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Credenza</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 50 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 50 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                 
                                  <a data-size="50" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                   <a  data-size="50" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Desk, executive</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 40 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 40 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="40" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="40" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Desk, secretary</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 35 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 35 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="35" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="35" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Desk, return</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 22 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 22 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                 
                                  <a data-size="22" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                   <a data-size="22" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >File 2 drawer</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 20 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 20 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="20" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="20" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >File 3 drawer</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 23 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 23 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="23" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="23" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >File 4 drawer</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 26 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 26 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="26" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="26" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >File 5 drawer</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 29 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 29 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="29" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="29" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Showcase</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 35 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 35 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                 
                                  <a data-size="35" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                   <a data-size="35" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Sofa, small</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 5 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 5 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="5" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="5" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Sofa, large</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 50 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 50 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                               
                                  <a data-size="50" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="50" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Stool</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 3 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 3 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="3" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="3" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Table</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 12 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 12 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="12" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="12" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Table coffee</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 5 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 5 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                 
                                  <a data-size="5" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                   <a  data-size="5" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Table, conference</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 50 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 50 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="50" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="50" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Table, Drawing</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 20 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 20 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                 
                                  <a data-size="20" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                   <a data-size="20" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Table, end</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 5 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 5 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="5" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="5" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Table, folding</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                 
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                   <a data-size="10" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit last-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Trunk</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->
                  </div>
                  <!--=======Tab4 Data End=======-->

                  <div class="category-details tab-pane fade"  id="outdoors" role="tabpanel" aria-labelledby="tab5-tab">
                    <div class="single-unit heading">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3  col-6 head-size">
                          <p>Size</p>
                        </div>
                        <div class="col-lg-5 col-md-5  head-unit d-md-block d-none">
                          <p class="common-pl">Unit Details</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 head">
                          <p class="common-pl">Price</p>
                        </div>
                      </div>
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Barbecue or Portable Grill</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>

                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                              
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->

                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Chair, Lawn</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 5 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 5 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="5" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="5" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>       
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7  store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Chair, Porch</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="10" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>     
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Ladder, Extension</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 10 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 10 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                 
                                  <a data-size="10" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                   <a data-size="10" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>         
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Lawn Mower</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 35 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7  store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 35 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5  order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="35" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="35" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>       
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7  store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Outdoor Swings</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 30 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 30 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="30" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="30" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>        
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->

                    <div class="single-unit last-unit">
                      <div class="row wrapper">
                        <div class="col-lg-3 col-md-3 col-7 store-size order-md-0 order-0">
                            <div class="size-title">
                              <p >Picnic Table</p>
                            </div>
                            <p class="unit-details common-pl d-md-none d-block">approximately 20 cubic feet</p>                      
                        </div>
                        <div class="col-lg-5 col-md-5 col-7 store-unit-details order-md-1 order-2 d-flex align-items-center">
                            <p class="unit-details common-pl">approximately 20 cubic feet</p>                
                        </div>
                        <div class="col-lg-4 col-md-4 col-5 order-md-2 order-1 unit-price-count ">
                            <div class="price-count d-flex align-items-center justify-content-between">
                              <div class="input-count"> 
                                <input type="text" class="count" name="count" value="0">
                              </div>
                              <div class="plus-minus d-flex common-pl">
                                  
                                  <a data-size="20" class="decrease" href="javascript:void(0)">
                                    <i class="icon-minus"></i>
                                  </a>
                                  <a data-size="20" class="increase" href="javascript:void(0)">
                                     <i class="icon-plus ms-lg-3 ms-2"></i>
                                  </a>
                              </div>
                            </div>      
                        </div>
                      </div>
                      <!--Bed room title end-->
                    </div>
                    <!--Single Unit Heading End -->
                  </div>
                  <!--=======Tab5 Data End=======-->
                </div>
              </div>

              <div class="col-md-5 order-md-1 order-0">           
                <div class="bed-room-content">
                  <h5>Size Suggestion</h5>
                  <div id="containerImg" class="container-img" style="background-image:url(images/size-guide/storage-calculator/no-dimension.webp)"></div>
                  <div class="bed-dimension d-flex align-items-center">
                    <h4 class="fw-bold mb-0 "><span id="sizeSuggestion"></span></h4>
                    <p class="fw-bold ms-3"><span id="percentageFullVal"></span></p>
                  </div>
                  <p class="fw-normal bed-description d-none" id="storage-description">Think of it like a standard closet. Approximately 25 square feet, this space is perfect for about a dozen boxes, a desk and chair, and a bicycle.</p>
                </div>
              </div>
            </div>
            <!--== Category Information End===-->

            <div class="row">
              <div class="col-md-7">
                <div class="clean-selection">
                  <a href="#" class="text-end"><i class="icon-delete"></i><span>Clean Selection</span></a>
                </div>
              </div>
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