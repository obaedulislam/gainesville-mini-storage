$(document).ready(function () {
  $("body").on("click", ".custom-dropdown-value", function () {
    if ($(this).next(".custom-dropdown").hasClass("open")) {
      $(this).next(".custom-dropdown").removeClass("open");
      $(this).prev(".arrow").removeClass("rotate");
    } else {
      $(this).next(".custom-dropdown").addClass("open");
      $(this).prev(".arrow").addClass("rotate");
    }
  });
  $("body").on("click", ".custom-dropdown li a", function () {
    var value = $(this).html();
    $(this).parent().parent().prev(".custom-dropdown-value").val(value);
    $(this).parent().parent().removeClass("open");
    $(this).parent().parent().prev().prev(".arrow").removeClass("rotate");
  });

  $(document).click(function (e) {
    e.stopPropagation();
    var container = $("body");
    if (container.has(e.target).length === 0) {
      $(".custom-dropdown").removeClass("open");
      $(".arrow").removeClass("rotate");
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".featureSwiper", {
    slidesPerView: 1.4,
    spaceBetween: 20,
    breakpoints: {
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
    },
  });
  var swiper = new Swiper(".featureSwiperTwo", {
    slidesPerView: 1.4,
    spaceBetween: 20,
    breakpoints: {
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
    },
  });

  $("#storageListing").dataTable({
    paging: false,
    searching: false,
    ordering: true,
    order: [[1, 'desc']],
    order: [[3, 'desc']],
    language: {
      sorting: '<i class="fa fa-sort"></i>',
      sortingAsc: '<i class="fa fa-sort-asc"></i>',
      sortingDesc: '<i class="fa fa-sort-desc"></i>'
    }
  });
});
