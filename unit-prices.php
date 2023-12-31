<!DOCTYPE html>
<html lang="en">

  <!--|| Bundle File Start ||-->
  <?php include "bundle.php" ?>
  <!--|| Bundle File End ||-->

<script>
 $("#lcListing").dataTable({
    "pageLength": 10,
    fixedHeader: true,
    "scrollX": true,
    "lengthChange": false
});
</script>

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
              <p class="fw-bold"><a  href="tel:+(940) 300-7610">(940) 300-7610</a></p>
              <div class="cta-btn">
                <a href="contact.php" class="button primary-button"><i class="icon-fluent-arrow-right"></i>Contact Us</a>
              </div>
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

    <!--|| Office Access Time Section Start ||-->
    <section class="office-time-section first-padding bottom-no-padding">
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
    <section class="unit-filter-section first-padding top-no-padding">
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
              <ul class="nav flex-md-column flex-row nav-pills"" id="v-pills-tab" role="tablist" aria-orientation="vertical">
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
                <table id="storageListing" class="table gms-table" style="width:100%">
                  <thead>
                      <tr class="single-unit heading">
                          <th class="size">
                            Size 
                            <span class="border-right"></span>
                          </th>
                          <th class="unit-details-header">
                            Unit Details <span class="border-right"></span>
                          </th>
                          <th class="price-header">
                            Price 
                          </th>
                          <th class="button-cell-header"></th>
                      </tr>
                  </thead>

                  <tbody>
                    <tr class="single-unit">
                        <td data-order="1" class="size">
                          <span class="dim">5’x10’</span>
                           <span class="d-md-none d-block size-desc">Self storage, non climate, drivethrough, roolup, drive up</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self storage, non climate, drivethrough, roolup, drive up</span>   <span class="border-right"></span>
                        </td>
                        <td  class="price" data-order="9">
                          <span class="price-money">$60</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                    
                        </td>
                    </tr>
                    <!--Single Unit End-->
         
                    <tr class="single-unit">
                        <td data-order="2" class="size">
                          <span class="dim">5’x10’</span>
                           <span class="d-md-none d-block size-desc">Self Storage, rollup, climate, interior</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self Storage, rollup, climate, interior</span>   <span class="border-right"></span>
                        </td>
                        <td class="price" data-order="7">
                          <span class="price-money">$80</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
         
                    <tr class="single-unit">
                        <td data-order="3" class="size">
                          <span class="dim">5’x15’</span>
                           <span class="d-md-none d-block size-desc">Self storage, non climate, drivethrough, roolup, drive up</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self storage, non climate, drivethrough, roolup, drive up</span>   <span class="border-right"></span>
                        </td>
                        <td  class="price" data-order="8">
                          <span class="price-money">$60</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
         
                    <tr class="single-unit">
                        <td data-order="4" class="size">
                          <span class="dim">10’x10’</span>
                           <span class="d-md-none d-block size-desc">Self Storage, rollup, climate, interior</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self Storage, rollup, climate, interior</span>   <span class="border-right"></span>
                        </td>
                        <td  class="price" data-order="4">
                          <span class="price-money">$120</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
         
                    <tr class="single-unit">
                        <td data-order="5" class="size">
                          <span class="dim">10’x10’</span>
                           <span class="d-md-none d-block size-desc">Self storage, non climate, drivethrough, roolup, drive up</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self storage, non climate, drivethrough, roolup, drive up</span>   <span class="border-right"></span>
                        </td>
                        <td  class="price" data-order="6">
                          <span class="price-money">$95</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
         
                    <tr class="single-unit">
                        <td data-order="6" class="size">
                          <span class="dim">10’x15’</span>
                           <span class="d-md-none d-block size-desc">Self Storage, rollup, climate, interior</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self Storage, rollup, climate, interior</span>   <span class="border-right"></span>
                        </td>
                        <td  class="price" data-order="1">
                          <span class="price-money">$160</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
         
                    <tr class="single-unit">
                        <td data-order="7" class="size">
                          <span class="dim">10’x15’</span>
                           <span class="d-md-none d-block size-desc">Self storage, non climate, drivethrough, roolup, drive up</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self storage, non climate, drivethrough, roolup, drive up</span>   <span class="border-right"></span>
                        </td>
                        <td  class="price" data-order="5">
                          <span class="price-money">$105</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
         
                    <tr class="single-unit">
                        <td data-order="8" class="size">
                          <span class="dim">10’x20’</span>
                           <span class="d-md-none d-block size-desc">Self storage, non climate, drivethrough, roolup, drive up</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self storage, non climate, drivethrough, roolup, drive up</span>   <span class="border-right"></span>
                        </td>
                        <td  class="price" data-order="2">
                          <span class="price-money">$140</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
         
                    <tr class="single-unit">
                        <td data-order="9" class="size">
                          <span class="dim">12’x45’</span>
                           <span class="d-md-none d-block size-desc">Parking, covered, rv/boat/vehicle/parking, lower level</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Parking, covered, rv/boat/vehicle/parking, lower level</span>   <span class="border-right"></span>
                        </td>
                        <td  class="price" data-order="3">
                          <span class="price-money">$120</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
         
                  </tbody>
                </table>
              </div>
              <!--=======Tab1 Data End=======-->

               <div class="category-details tab-pane fade"   id="small" role="tabpanel" aria-labelledby="tab2-tab">
                  <table id="storageListingTwo" class="table gms-table" style="width:100%">
                    <thead>
                        <tr class="single-unit heading">
                            <th class="size">
                              Size <span ></span> <span class="border-right"></span>
                            </th>
                            <th class="unit-details-header">
                              Unit Details <span class="border-right"></span>
                            </th>
                            <th class="price-header">
                              Price <span ></span> 
                            </th>
                            <th class="button-cell-header"></th>
                        </tr>
                    </thead>

                    <tbody>
                      <tr class="single-unit">
                        <td data-order="1" class="size">
                          <span class="dim" >5’x10’</span>
                           <span class="d-md-none d-block size-desc">Self storage, non climate, drivethrough, roolup, drive up</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self storage, non climate, drivethrough, roolup, drive up</span>   <span class="border-right"></span>
                        </td>
                        <td  class="price" data-order="3">
                          <span class="price-money">$60</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
         
                    <tr class="single-unit">
                        <td data-order="2" class="size">
                          <span class="dim">5’x10’</span>
                           <span class="d-md-none d-block size-desc">Self Storage, rollup, climate, interior</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self Storage, rollup, climate, interior</span>   <span class="border-right"></span>
                        </td>
                        <td data-order="1" class="price">
                          <span class="price-money">$80</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
         
                    <tr class="single-unit">
                        <td data-order="3" class="size">
                          <span class="dim">5’x15’</span>
                           <span class="d-md-none d-block size-desc">Self storage, non climate, drivethrough, roolup, drive up</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self storage, non climate, drivethrough, roolup, drive up</span>   <span class="border-right"></span>
                        </td>
                        <td data-order="3" class="price">
                          <span class="price-money">$60</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->      
                    </tbody>
                  </table>
                </div>
              <!--=======Tab2 Data End=======-->

               <div class="category-details tab-pane fade"   id="medium" role="tabpanel" aria-labelledby="tab3-tab">
                <table id="storageListingThree" class="table gms-table" style="width:100%">
                  <thead>
                      <tr class="single-unit heading">
                          <th class="size">
                            Size <span ></span> <span class="border-right"></span>
                          </th>
                          <th class="unit-details-header">
                            Unit Details <span class="border-right"></span>
                          </th>
                          <th class="price-header">
                            Price <span ></span> 
                          </th>
                          <th class="button-cell-header"></th>
                      </tr>
                  </thead>

                  <tbody>       
                      <tr class="single-unit">
                        <td data-order="1" class="size">
                          <span class="dim">10’x10’</span>
                           <span class="d-md-none d-block size-desc">Self Storage, rollup, climate, interior</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self Storage, rollup, climate, interior</span>   <span class="border-right"></span>
                        </td>
                        <td data-order="2" class="price">
                          <span class="price-money">$120</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
         
                    <tr class="single-unit">
                        <td data-order="2" class="size">
                          <span class="dim">10’x10’</span>
                           <span class="d-md-none d-block size-desc">Self storage, non climate, drivethrough, roolup, drive up</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self storage, non climate, drivethrough, roolup, drive up</span>   <span class="border-right"></span>
                        </td>
                        <td data-order="4" class="price">
                          <span class="price-money">$95</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
         
                    <tr class="single-unit">
                        <td data-order="3" class="size">
                          <span class="dim">10’x15’</span>
                           <span class="d-md-none d-block size-desc">Self Storage, rollup, climate, interior</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self Storage, rollup, climate, interior</span>   <span class="border-right"></span>
                        </td>
                        <td data-order="1" class="price">
                          <span class="price-money" >$160</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
         
                    <tr class="single-unit">
                        <td data-order="4" class="size">
                          <span class="dim">10’x15’</span>
                           <span class="d-md-none d-block size-desc">Self storage, non climate, drivethrough, roolup, drive up</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self storage, non climate, drivethrough, roolup, drive up</span>   <span class="border-right"></span>
                        </td>
                        <td data-order="3" class="price">
                          <span class="price-money">$105</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
                  </tbody>
                </table>
              </div>
              <!--=======Tab3 Data End=======-->

               <div class="category-details tab-pane fade"   id="large" role="tabpanel" aria-labelledby="tab4-tab">
                <table id="storageListingFour" class="table gms-table" style="width:100%">
                  <thead>
                      <tr class="single-unit heading">
                          <th class="size">
                            Size <span ></span> <span class="border-right"></span>
                          </th>
                          <th class="unit-details-header">
                            Unit Details <span class="border-right"></span>
                          </th>
                          <th class="price-header">
                            Price <span ></span> 
                          </th>
                          <th class="button-cell-header"></th>
                      </tr>
                  </thead>

                  <tbody>       
                             
                    <tr class="single-unit">
                        <td data-order="1" class="size">
                          <span class="dim">10’x20’</span>
                           <span class="d-md-none d-block size-desc">Self storage, non climate, drivethrough, roolup, drive up</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Self storage, non climate, drivethrough, roolup, drive up</span>   <span class="border-right"></span>
                        </td>
                        <td data-order="1" class="price">
                          <span class="price-money">$140</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
        
                  </tbody>
                </table>
              </div>
              <!--=======Tab4 Data End=======-->

               <div class="category-details tab-pane fade"   id="vehicle" role="tabpanel" aria-labelledby="tab5-tab">
                 <table id="storageListingFive" class="table gms-table" style="width:100%">
                  <thead>
                      <tr class="single-unit heading">
                          <th class="size">
                            Size <span ></span> <span class="border-right"></span>
                          </th>
                          <th class="unit-details-header">
                            Unit Details <span class="border-right"></span>
                          </th>
                          <th class="price-header">
                            Price <span ></span> 
                          </th>
                          <th class="button-cell-header"></th>
                      </tr>
                  </thead>

                  <tbody>       
                      <tr class="single-unit">
                        <td data-order="1" class="size">
                          <span class="dim">12’x45’</span>
                           <span class="d-md-none d-block size-desc">Parking, covered, rv/boat/vehicle/parking, lower level</span>
                          <span class="border-right"></span></td>
                        <td class="unit-details">
                          <span class="d-md-block d-none">Parking, covered, rv/boat/vehicle/parking, lower level</span>   <span class="border-right"></span>
                        </td>
                        <td data-order="1" class="price">
                          <span class="price-money">$120</span>
                           <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a> 
                        </td>
                        <td class="button-cell call-btn text-end">
                            <a  class="button outline-button" data-bs-toggle="modal" data-bs-target="#callModal"><i class="icon-fluent-arrow-right"></i>Reserve </a>                   
                        </td>
                    </tr>
                    <!--Single Unit End-->
                  </tbody>
                </table>
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
                <a href="index.php"><img src="images/logo.svg" alt="Gainesville Logo"></a>
                <button type="button" class="icon-cross" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">
                <p class="text-center">You are about to be redirected to our affiliate website,<a href="https://www.uhaul.com/Locations/Self-Storage-near-Gainesville-TX-76240/013532/" target="_blank" class="u-haul fw-bold"> uhaul.com.</a> </p>
                <div class="affiliate mt-4 text-center">
                  <div class="u-haul ms-2">
                    <a href="https://www.uhaul.com/Locations/Self-Storage-near-Gainesville-TX-76240/013532/" target="_blank"><img src="images/home/banner/u-haul.svg" alt="U-haul"></a>
                  </div>
                </div>
                
              </div> 

              <div class="modal-footer d-block px-0 border-0">
                <div class="row mx-0 px-0">
                  <div class=" col-12 px-0 ">
                    <div class="modal-cta call-btn text-center">
                      <a href="https://www.uhaul.com/Locations/Self-Storage-near-Gainesville-TX-76240/013532/" target="_blank" class="button primary-button close-btn"><i class="icon-fluent-arrow-right"></i>Proceed</a>
                    </div>
                  </div>
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
    <section class="feature-section first-padding d-lg-none d-block top-no-padding"> 
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-12 col-sm-6 col-12">
            <div class="feature-head "> 
              <h3 >Features</h3>
            </div>
          </div>
          <!-- Single feature End -->
          
          <div class="col-lg-9 col-md-12 mt-lg-0 mt-3">
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
    <section class="location-section location-bg-none first-padding overflow-hidden top-no-padding">
      <div class="container">
        <div class="row">
            <div class="feature-head text-center">
              <h3 >Locations</h3>
            </div>
        </div>
        <!--Feature Heading End-->

        <div class="storage-unit first-padding bottom-no-padding">
          <div class="row">
            <div class="col-xl-7 col-lg-6 col-md-12">
              <div class="map-one-img">
                <img src="images/unit-prices/location/map1.webp" class="img-fluid" alt="Location">
              </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-12  d-flex align-items-center">
              <div class="map-wrapper">
                <div class="map-content">
                  <h5>Climate-Controlled Storage in Gainesville, Texas</h5>
                  <p>We offer many climate-controlled storage units with interior access for extra security and cleanliness. There is also the option of drive-up access, which allows you to park directly in front of the unit and enter from the outside. Our units have good lighting, which is an essential feature in any storage facility that wants to make the customer experience as easy as possible.</p>
                  <p class="mt-3">Here are some of the amenities we offer: electronic gate access, video surveillance, 24-hour access, U-Haul truck rentals, outdoor RV parking, and a huge driveway for great comfort during your visits. Explore our website and see if you can find any specials now (e.g., the first month free). We’re always just a phone call away, so never hesitate to contact us. Se habla español!</p>
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
    <section class="driving-directions-section top-no-padding">
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
          <div class="col-xl-9 col-lg-8 d-flex align-items-center">
            <h4>Check Out What Our Customers Are Saying</h4>
          </div>
          <div class="col-xl-3 col-lg-4">
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
                                      <input class="form-control custom-dropdown-value" value="Select Facility" type="text" readonly  >
                                      <ul class="custom-dropdown">
                                          <li><a href="javascript:void(0)">Select Facility</a></li>
                                          <li><a href="javascript:void(0)">Gainesville Mini Storage - 2537, Gainesville, TX 76240</a></li>
                                      </ul>
                                    </div>
                                    <p  id="select-error" class="error-message"></p>
                                </div>                              
                                <div class="input-field">
                                    <label for="name">Name</label><br>
                                    <input type="text" name="name" id="name" placeholder="Please enter your name..." required>
                                     <p  id="name-error" class="error-message"></p>
                                </div>
                                <div class="input-field">
                                    <label for="email">Email</label><br>
                                    <input type="email" name="email" id="email" placeholder="Please enter your email..." required>
                                    <p  id="email-error" class="error-message"></p>
                                </div>
                                <div class="input-field">
                                    <label for="message">Describe Your Experience</label><br>
                                    <textarea type="textarea" rows="3" name="experience" id="experience" placeholder="Tell us what you think about us..." required></textarea>
                                    <p  id="experience-error" class="error-message"></p>
                                </div>
                                <div class="form-alert">
                                  <p class="text-center">Note: Your comments will be posted on this website with your first name & last initial</p>
                                </div>
                                <div class="submit-btn text-center">
                                  <button class="button primary-button"><i class="icon-fluent-arrow-right"></i>Submit</button>
                                </div>
                            </form>

                            
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