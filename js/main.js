$(document).ready(function () {
  $("body").on("click", "#toggleMenu", function () {
    if ($(this).hasClass("close")) {
      // $("#fluidMenu").removeClass("show");
      $("#fluidMenu").removeClass("d_visible").delay(500).removeClass("show");
      $(this).removeClass("close");
    } else {
      $("#fluidMenu").addClass("show").delay(500).addClass("d_visible");
      $(this).addClass("close");
    }
  });
});
