$(window).on("load", function () {
  var winHeight = $(window).height();
  function is_weixin() {
    var ua = navigator.userAgent.toLowerCase();
    if (ua.match(/MicroMessenger/i) == "micromessenger" || ua.match(/QQ/i) == "qq") {
      return true;
    } else {
      return false;
    }
  }
  var isWeixin = is_weixin();
  if (isWeixin) {
    $(".weixin-tip").css("height", winHeight);
    $(".weixin-tip").show();
  }
  $('#showCourse').on('click', function () {
    $('#course').show();
    $('.mask').show();
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
  });
  $('.mask').on('click', function () {
    $('#course').hide();
    $('.mask').hide()
  });
  $('#course .close').on('click', function () {
    $('#course').hide();
    $('.mask').hide()
  });
  $('.download').on('click', function (e) {
    // console.log(e.target.dataset.src)
    if (isWeixin) {
      $('#imgMask').show();
    } else {
      window.location.href = e.target.dataset.src
    }
  });
  $('#imgMask').on('click', function () {
    $('#imgMask').hide()
  })
});