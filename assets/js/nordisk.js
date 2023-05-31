'use strict';

(function configRadio() {
  $(".nor-radio").click(function () {
    $(this).find("input")[0].checked = true;
  });
})();

(function configProgress() {
  const progressBar = document.getElementById('progress-bar');
  progressBar.addEventListener("click", seek);
  function seek(e) {
    var percent = e.offsetX / this.offsetWidth;
    e.target.value = Math.floor(percent * 100);
  }
})();

(function configNumController() {
  $(".plus").click(function () {
    const num = $(this).parent().find(".num");
    const value = parseInt(num.html()) + 1;
    num.html(value);
  });

  $(".minus").click(function () {
    const num = $(this).parent().find(".num");
    let value = parseInt(num.html()) - 1;
    if (value < 0) value = 0;
    num.html(value);
  });
})();

(function configDropdown() {
  $('.dropdown').click(function () {
    $(this).toggleClass('active');
    $(this).find('.dropdown-menu').slideToggle(300);
  });

  $('.dropdown').focusout(function () {
    $(this).removeClass('active');
    $(this).find('.dropdown-menu').slideUp(300);
  });

  $('.dropdown .dropdown-menu li').click(function () {
    $(this).parents('.dropdown').find('span').html($(this).html());
    $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
  });
})();

(function configMobileMenu() {
  let menu_open = false;

  $('.menu-trigger').click(function () {
    menu_open = !menu_open;
    if (menu_open) {
      $(this).attr("src", $(this).attr("src").replace("menu", "close"));
      $(".burger-menu").fadeToggle();
    } else {
      $(this).attr("src", $(this).attr("src").replace("close", "menu"));
      $(".burger-menu").fadeToggle();
    }
  });
})();