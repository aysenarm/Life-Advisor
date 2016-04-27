$(document).ready(function(){
    $('.tabs li a').click(function () {
      $('.tabs li').removeClass('active');
      $(this).parent().addClass('active');

      $('.navv').hide();
      var index = $('.tabs li a').index(this);
      $('.navv').eq(index).show();
      return false;
    });

    $('.navv li').has('ul').hover(function(){
        $(this).addClass('current').children('ul').fadeIn();
    }, function() {
        $(this).removeClass('current').children('ul').hide();
    });
});
