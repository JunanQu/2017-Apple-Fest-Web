
$(document).ready(function() {
  console.log("DOM is ready")

   $("#join").click( function() {
     if($("#mailinglist").is(':hidden')) {
      $("#mailinglist").show();
    } else if ($("#mailinglist").is(':visible')) {
       $("#mailinglist").hide();
};
  });
  });
