$(function() {
  var modal_id = (localStorage.getItem('modalID')) ? localStorage.getItem('modalID') : null;

  if(modal_id != null){
    // slide to works
    $('html, body').animate({
      scrollTop: $('.works_div').offset().top
    }, 1000);

    if(modal_id == 1)
      openNavOne();
    else if(modal_id == 2)
      openNavTwo();
    else if(modal_id == 3)
      openNavFour();
    else if(modal_id == 4)
      openNavFour();
  }

  localStorage.setItem('modalID', '');
});