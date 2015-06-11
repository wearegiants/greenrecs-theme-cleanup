function headhesive(){
  var options = {
    offset: 300,
    classes: {
      clone:   'banner--clone',
      stick:   'banner--stick',
      unstick: 'banner--unstick'
    }
  };
  var banner = new Headhesive('#head', options);
}

$(function(){

  headhesive();

  //Equalize

  $("#home--legality, #doctors--legality").equalize({
    target: ".sizer-item",
    minWidth: '740px'
  });

  $("#doctors--howitworks").equalize({
    target: ".item"
  });

  // Checkbox

  $("input[type=checkbox], input[type=radio]").checkbox();

  // Dropdown

  $(".gr_form select, #signup select").dropdown({
    customClass: 'dropdown-menu'
  });

  // Accordion

  $('#faq-accordion').accordion();

});