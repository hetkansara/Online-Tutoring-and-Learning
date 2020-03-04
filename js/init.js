(function($){
  $(function(){

    $('.sidenav').sidenav();

  }); // end of document ready
})(jQuery); // end of jQuery name space


document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.datepicker');
  var elems = document.querySelectorAll('select');
  // var instances = M.Datepicker.init(elems, options);
});


// Or with jQuery
$(document).ready(function(){
  $('.datepicker').datepicker();
  $('select').formSelect();
  $('.tabs').tabs();
});