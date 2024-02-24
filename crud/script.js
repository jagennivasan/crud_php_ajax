$(document).ready(function () {
  displayData();
});
function displayData() {
  var displayData = "true";
  $.ajax({
    url: "display.php",
    type: "post",
    data: {
      displaySend: displayData,
    },
    success: function (data, status) {
      $("#displayDataTable").html(data);
    },
  });
}
function addUser() {
  var name = $("#username").val();
  var email = $("#useremail").val();
  var mobile = $("#usermobile").val();
  var place = $("#userplace").val();
  $.ajax({
    url: "insert.php",
    type: "post",
    data: {
      nameSend: name,
      emailSend: email,
      mobileSend: mobile,
      placeSend: place,
    },
    success: function (data, status) {
      // console.log(status);
      $("#userdata").modal("hide");
      $("#adduser")[0].reset();
      displayData();
    },
  });
}

function deleteData(deleteid) {
  $.ajax({
    url: "delete.php",
    type: "post",
    data: {
      deleteSend: deleteid,
    },
    success: function (data, status) {
      displayData();
    },
  });
}
function GetDetails(updateid) {
  $("#hiddendata").val(updateid);

  $.post("update.php", { updateid: updateid }, function (data, status) {
    var userid = JSON.parse(data);
    $("#updatename").val(userid.name);
    $("#updateemail").val(userid.email);
    $("#updatemobile").val(userid.mobile);
    $("#updateplace").val(userid.place);
  });

  $("#updateuser").modal("show");
}
function updateDetails() {
  var updatename = $("#updatename").val();
  var updateemail = $("#updateemail").val();
  var updatemobile = $("#updatemobile").val();
  var updateplace = $("#updateplace").val();
  var hiddendata =$("#hiddendata").val();
  $.post(
    "update.php",
    {
      updatename: updatename,
      updateemail: updateemail,
      updatemobile: updatemobile,
      updateplace: updateplace,
      hiddendata:hiddendata
    },
    function (data, status) {
      $("#updateuser").modal("hide");
      displayData();
    }
  );
}
