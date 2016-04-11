// Elements of Care tab functionality

$(document).ready(function () {
  $('.element-item__top').on('click', function(event) {
    if ($(this).parent().hasClass('element-item--active')) {
      event.preventDefault();
    } else {
      event.preventDefault();
      $('.element-item--active').removeClass('element-item--active');
      $(this).parent().addClass('element-item--active');
    }
  });
});

