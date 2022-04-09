$(document).ready(function () {
  $("#aregister").click(function (event) {
    event.preventDefault();

    $.ajax({
      url: "bk/rattendance.php",
      method: "POST",
      data: $("form").serialize(),
      success: function (data) {
        $("#att_sign").html(data);
      },
    });
  });
});
