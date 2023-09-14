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
    <section class="uhaul-website-section">
      <div class="container">
        <div class="include-iframe">
          <iframe src="https://www.uhaul.com/Auth/OrderLookUp/" width="100%" height="100" class="load-website-iframe" title="U- Haul not loaded order page">
          </iframe>
        </div>
      </div>
    </section> 
  </main>
  <!--|| Main Section End ||-->

   <!--|| Footer Section Start ||-->
  <?php include "footer.php" ?>
  <!--|| Footer Section End ||-->

</body>
</html>