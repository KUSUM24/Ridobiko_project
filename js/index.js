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
