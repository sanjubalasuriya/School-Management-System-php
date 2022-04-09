$(document).ready(function () {
  $("#tregister").click(function (event) {
    event.preventDefault();

    $.ajax({
      url: "backend/treg.php",
      method: "POST",
      data: $("form").serialize(),
      success: function (data) {
        $("#tsign").html(data);
      },
    });
  });

  $("#pregister").click(function (event) {
    event.preventDefault();
    $.ajax({
      url: "backend/preg.php",
      method: "POST",
      data: $("form").serialize(),
      success: function (data) {
        $("#psign").html(data);
      },
    });
  });

  $("#sub_register").click(function (event) {
    event.preventDefault();
    $.ajax({
      url: "backend/rsub.php",
      method: "POST",
      data: $("form").serialize(),
      success: function (data) {
        $("#sub_sign").html(data);
      },
    });
  });

  $("#stregister").click(function (event) {
    event.preventDefault();
    $.ajax({
      url: "backend/rstu.php",
      method: "POST",
      data: $("form").serialize(),
      success: function (data) {
        $("#stsign").html(data);
      },
    });
  });

  $("#admin_register").click(function (event) {
    event.preventDefault();
    $.ajax({
      url: "backend/adminreg.php",
      method: "POST",
      data: $("form").serialize(),
      success: function (data) {
        $("#admin_sign").html(data);
      },
    });
  });
});
