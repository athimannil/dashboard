// TO DO add input toggling class
$("#new-todo").on('blur', function () {
  $(this).parent(".input-group").find("button").removeClass("btn-primary").addClass("btn-default");
}).on('focus', function () {
  $(this).parent(".input-group").find("button").addClass("btn-primary").removeClass("btn-default");
});
