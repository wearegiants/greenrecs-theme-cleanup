$(function(){

  //Equalize

  $("#home--legality").equalize({
    target: ".sizer-item",
    minWidth: '740px'
  });

  // Dropdown

  $(".gr_form select").dropdown({
    customClass: 'dropdown-menu'
  });

  // Accordion

  $('#faq-accordion').accordion();

});