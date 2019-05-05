


function getCookie(name) 
  { 
      var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
   
      if(arr=document.cookie.match(reg))
   
          return unescape(arr[2]); 
      else 
          return null; 
  }
  function direact(){
    var exp = new Date(); 
    var name="userName";
    exp.setTime(exp.getTime() - 1); 
    var cval=getCookie(name); 
    if(cval!=null) 
      document.cookie= name + "="+cval+";expires="+exp.toGMTString();
    window.location.href="index.php";
  }


// //logo的旋转
// var clock1=setInterval('rotate()',10);
// var num =3;
// var isrotate=1;
// function  rotate() {
//     num+=0.5;
//     document.getElementsByClassName('logo')[0].style.transform="rotate("+num+"deg)";
//   }
// $('.logo').click(function(){
//   if(isrotate){
//     clearInterval(clock1);
//     isrotate=0;
//     var t=document.getElementsByTagName('audio')[0];
//     t.pause();
//   }else{
//     clock1=setInterval('rotate()',10);
//     isrotate=1;
//     var t=document.getElementsByTagName('audio')[0];
//     t.play();
//   }
// })


// //幻灯片
// $('.carousel-caption').hide();
// $('.item').hover(
//   function(){
//     $(this).find('.carousel-caption').slideDown();
//   },
//   function(){
//     $(this).find('.carousel-caption').hide();
//   }
// )

// //回到顶部
// $('.top').hide();
// $(window).scroll(function(){
//   $('.top').show();
//   if($(window).scrollTop()<100){
//     $('.top').hide();
//   }
// });
//  $('.top').click(function(){
//   $(window).scrollTop(0);
//  });


//  //时钟

//  function checkTime(i)
//  {
//  if (i<10) 
//    {i="0" + i}
//    return i
//  }

// //导航条
//  $('.navs').mouseenter(function(){
//      $(this).addClass('active');
//      $('.navs').not($(this)).removeClass('active');
//  })

//  //让well框跟随图片大小

//  $('.introduce').css("height", $('.m').height()+"px");

//  //提示工具
//  $(function () {
//     $('[data-toggle="tooltip"]').tooltip()
//   })
//  $(function () {
//     $('[data-toggle="popover"]').popover()
//   })