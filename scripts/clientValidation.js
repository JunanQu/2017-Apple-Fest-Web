// On load
$(document).ready(function () {
  console.log("Validation is ready")

  $("#realform").on("submit", function() {
    var formValid = true;

    var firstNameIsValid = $("#firstname2").prop("validity").valid;
    if(firstNameIsValid) {
      $("#fnameError").hide();
    } else {
      $("#fnameError").show();
      formValid = false;
    }

    var lastNameIsValid = $("#lastname2").prop("validity").valid;
    if(lastNameIsValid) {
      $("#lnameError").hide();
    } else {
      $("#lnameError").show();
      formValid = false;
    }

var emailIsValid = $("#eemail").prop("validity").valid;
    if(emailIsValid) {
      $("#emailErrorNoEmail").hide();
    } else {
      $("#emailErrorNoEmail").show();
      formValid = false;
    }


    if($("#eemail").val() == null) {
      $("#emailErrorNoEmail").hide();
    }

var feedbackIsValid = $("#feedback").prop("validity").valid;
  if(feedbackIsValid) {
    $("#feedbackError").hide();
  } else {
    $("#feedbackError").show();
    formValid = false;
  }

    return formValid;
  });

});
