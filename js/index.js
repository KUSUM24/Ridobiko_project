$(document).ready(function () {
  $(".more-details-btn").click(function () {
    $("#table-2").show();
  });
  $("#trigger-service--btn").click(function () {
    $("#service-modal").show();
  });
});

const closeModal = (id) => {
  $(`#${id}`).hide();
};

var conceptVal = $("#aioConceptName option").filter(":selected").val();
console.log(conceptVal);

$("#number-plate--status").on("change", function (e) {
  var optionSelected = $("option:selected", this).val();
  if (optionSelected == 2) {
    $("#applied-number-plate").show();
  }
});
