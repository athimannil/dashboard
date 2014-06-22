$(document).ready(function () {
  $('select').selectpicker();

  // TO DO add input toggling class
  $("#new-todo").on('blur', function () {
    $(this).parent(".input-group").find("button").removeClass("btn-primary").addClass("btn-default");
  }).on('focus', function () {
    $(this).parent(".input-group").find("button").addClass("btn-primary").removeClass("btn-default");
  });
  $("#add-todo").click(function(){
    var totalDo = $("#to-do").find("li").length + 1;
    var todoVal = $("#new-todo").val();
    if (todoVal){
      $("#to-do").find("li:last").after('<li class="list-group-item checkbox"><input type="checkbox" id="to-do'+totalDo+'"><label class="check-lab" for="to-do'+totalDo+'">'+todoVal+'</label></li>');
      $("#new-todo").val('');
    }
  });
});