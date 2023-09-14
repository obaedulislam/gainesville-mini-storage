$(document).ready(function () {
  $(".increase").click(function () {
    //qty input field updating part
    var target = $(this);
    var sizeValue = target.parent().prev().children(".count").val();
    var newVal = parseInt(sizeValue) + 1;
    target.parent().prev().children(".count").val(newVal);

    // all furniture total dimension size calculation
    var furniture_dim = 0;
    $(".count").each(function () {
      var qty = $(this).val();
      if (qty > 0) {
        $("#storage-description").removeClass("d-none");
        var size = $(this)
          .parent()
          .next()
          .children(".increase")
          .attr("data-size");
        size = furnitureQFwithWaste(size, qty);
        furniture_dim = furniture_dim + size;
      }
    });

    var info = sizeSuggestion(furniture_dim);
    $("#sizeSuggestion").html(info.size_suggestion);
    $("#percentageFullVal").html(info.percentage_full + "% full");
    var imgFileName = info.size_suggestion.replace(/\s/g, "");
    var imgFIleUrl =
      "images/size-guide/storage-calculator/" + imgFileName + ".webp";
    $("#containerImg").css("background-image", "url(" + imgFIleUrl + ")");
  });

  $(".decrease").click(function () {
    var target = $(this);
    var sizeValue = target.parent().prev().children(".count").val();

    if (sizeValue > 0) {
      var newVal = parseInt(sizeValue) - 1;
      target.parent().prev().children(".count").val(newVal);

      // all furniture total dimension size calculation
      var furniture_dim = 0;
      $(".count").each(function () {
        var qty = $(this).val();
        if (qty > 0) {
          var size = $(this)
            .parent()
            .next()
            .children(".increase")
            .attr("data-size");
          size = furnitureQFwithWaste(size, qty);
          furniture_dim = furniture_dim + size;
        }
      });

      var info = sizeSuggestion(furniture_dim);
      if (info.percentage_full > 0) {
        $("#sizeSuggestion").html(info.size_suggestion);
        $("#percentageFullVal").html(info.percentage_full + "% full");
        var imgFileName = info.size_suggestion.replace(/\s/g, "");
        var imgFIleUrl =
          "images/size-guide/storage-calculator/" + imgFileName + ".webp";
        $("#containerImg").css("background-image", "url(" + imgFIleUrl + ")");
      } else {
        var info = sizeSuggestion(furniture_dim);
        $("#sizeSuggestion").html("");
        $("#percentageFullVal").html("");
        $("#containerImg").css(
          "background-image",
          "url(images/size-guide/storage-calculator/no-dimension.webp)"
        );
        $("#storage-description").html("");
        $("#storage-description").addClass("d-none");
      }
    }
  });
});

function furnitureQFwithWaste(dimension, qty) {
  var total_QF = dimension * qty;
  return total_QF + total_QF * 0.25;
}

function netUsableVolume(width, length, height) {
  var volume = width * length * height;
  return volume * 0.75;
}

function getPercentageFull(TQF_with_waste, NUQF) {
  return (TQF_with_waste / NUQF) * 100;
}

function sizeSuggestion(furnitureTQF) {
  var myArray = getSizeArray();
  var x;
  for (let i = 0; i < myArray.length; i++) {
    if (furnitureTQF < myArray[i].net_usable_vol) {
      var percentFull = getPercentageFull(
        furnitureTQF,
        myArray[i].net_usable_vol
      );
      percentFull = roundNumber(percentFull);
      x = {
        size_suggestion: myArray[i].description,
        percentage_full: percentFull,
      };
      break;
    }
  }
  return x;
}

function getSizeArray() {
  var myArray = [
    { description: "5 x 5", net_usable_vol: netUsableVolume(5, 5, 8) },
    { description: "5 x 10", net_usable_vol: netUsableVolume(5, 10, 8) },
    { description: "5 x 15", net_usable_vol: netUsableVolume(5, 15, 8) },
    { description: "10 x 10", net_usable_vol: netUsableVolume(10, 10, 8) },
    { description: "10 x 15", net_usable_vol: netUsableVolume(10, 15, 8) },
    { description: "10 x 20", net_usable_vol: netUsableVolume(10, 20, 8) },
    { description: "10 x 25", net_usable_vol: netUsableVolume(10, 25, 8) },
    { description: "10 x 30", net_usable_vol: netUsableVolume(10, 30, 8) },
  ];
  return myArray;
}

function roundNumber(number) {
  const fractionalPart = number - Math.floor(number);

  if (fractionalPart >= 0.5) {
    return Math.ceil(number);
  } else {
    return Math.floor(number);
  }
}

function clearInputFields() {
  var inputs = document.getElementsByClassName("count");
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].value = 0;
    if (inputs[i].value == 0) {
      $("#storage-description").addClass("d-none");
    } else {
      $("#storage-description").removeClass("d-none");
    }
  }
  $("#sizeSuggestion").html("");
  $("#percentageFullVal").html("");
  $("#containerImg").css(
    "background-image",
    "url(images/size-guide/storage-calculator/no-dimension.webp)"
  );
}
