

$(document).ready(function() {
console.log("hi");


$("#willingness").change(function() {
  switch (this.value) {
    case "inline":
    case "none":
      $("#day").css("display",this.value);break;
    default:$("#day").css("display","inline");break;

  }
});
 });
