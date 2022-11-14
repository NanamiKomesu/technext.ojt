jQuery(function () {
    // $(document).on("ready", function () {
    //     $(".slider").slick({
    //         fade:true,
    //         autoplay: true,
    //         autoplaySpeed: 3000,
    //         arrows:false,
    //     });
    // });

    jQuery(window).load(function(){
      jQuery('#hero .slider').slick({
        fade:true,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows:false,
      });
    });    

// 追加部分
var show = 6; //最初に表示する件数
var num = 6;  //もっと見るで表示する件数
var contents = '.blogcontent'; // 対象のlist

$(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
$('.more').on('click', function () {
  $(contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
  if ($(contents + '.is-hidden').length == 0) {
    $('.more').fadeOut();
  }
});




});