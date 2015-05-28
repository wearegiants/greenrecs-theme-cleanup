$(function(){

  //Equalize

  $("#home--legality, #doctors--legality").equalize({
    target: ".sizer-item",
    minWidth: '740px'
  });

  $("#doctors--howitworks").equalize({
    target: ".item"
  });

  // Dropdown

  $(".gr_form select").dropdown({
    customClass: 'dropdown-menu'
  });

  // Accordion

  $('#faq-accordion').accordion();

});