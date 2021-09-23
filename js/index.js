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
    $("#already-number-plate").hide();
  } else {
    $("#already-number-plate").show();
    $("#applied-number-plate").hide();
  }
});
const getServiceRecord = (sortId) => {
  let n = 3;
  for (let i = 1; i <= n; i++) {
    let sortItem = document.getElementById(`sort-item-${i}`);
    let displayTable = document.getElementById(`service-table-${i}`);
    if (sortId == i) {
      sortItem.classList.add("sort-item-active");
      displayTable.style.display = "table";
    } else {
      sortItem.classList.remove("sort-item-active");
      displayTable.style.display = "none";
    }
  }
};
