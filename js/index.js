$(document).ready(function () {
  $(".more-details-btn").click(function () {
    $("#table-2").show();
  });
});

const closeModal = (id) => {
  document.getElementById(id).style.display = "none";
};
