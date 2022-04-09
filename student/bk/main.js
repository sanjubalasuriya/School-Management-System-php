$(document).ready(function () {
  $("#psubmit").click(function (event) {
    event.preventDefault();

    $.ajax({
      url: "bk/pro.php",
      method: "POST",
      data: $("form").serialize(),
      success: function (data) {
        $("#pro").html(data);
      },
    });
  });
});
