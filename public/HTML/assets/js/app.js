 
//BACKGROUND CHANGER
  var a="/pepes/public/HTML/";
  var array=[
              "url('/pepes/public/HTML/assets/img/bg5.jpg')no-repeat center center fixed",
              "url('/pepes/public/HTML/assets/img/bg2.jpg')no-repeat center center fixed",
              "url('/pepes/public/HTML/assets/img/bg.jpg')no-repeat center center fixed",
              "url('/pepes/public/HTML/assets/img/giftly.png')repeat",
              "#2c3e50",
              "url('/pepes/public/HTML/assets/img/bg3.png')repeat",
              "url('/pepes/public/HTML/assets/img/bg8.jpg')no-repeat center center fixed",
              "url('/pepes/public/HTML/assets/img/bg9.jpg')no-repeat center center fixed",
              "url('/pepes/public/HTML/assets/img/bg10.jpg')no-repeat center center fixed",
              "url('/pepes/public/HTML/assets/img/bg11.jpg')no-repeat center center fixed",
              "url('/pepes/public/HTML/assets/img/bg13.jpg')repeat"
            ];
    var item = array[Math.floor(Math.random()*array.length)];
    $("body").css({
      "background":item
    });
    //alert(item);
    setInterval(
      function(){
        var item = array[Math.floor(Math.random()*array.length)];
        //$('body').animate({opacity:1},500,function(){
          $("body").css({
            "background":item
          });
        //});
        //$('body').animate({opacity:0},500); 
      },
    100000);
/*  $(function() {
      
      $("#button-bg7").click(function() {
          $("body").css({
              "background": "url('/pepes/public/HTML/assets/img/bg3.png')repeat"
          });

      });
      $("#button-bg8").click(function() {
          $("body").css({
              "background": "url('/pepes/public/HTML/assets/img/bg8.jpg')no-repeat center center fixed"
          });
      });
      $("#button-bg9").click(function() {
          $("body").css({
              "background": "url('/pepes/public/HTML/assets/img/bg9.jpg')no-repeat center center fixed"
          });
      });

      $("#button-bg10").click(function() {
          $("body").css({
              "background": "url('/pepes/public/HTML/assets/img/bg10.jpg')no-repeat center center fixed"
          });
      });
      $("#button-bg11").click(function() {
          $("body").css({
              "background": "url('/pepes/public/HTML/assets/img/bg11.jpg')no-repeat center center fixed"
          });
      });
      $("#button-bg12").click(function() {
          $("body").css({
              "background": "url('/pepes/public/HTML/assets/img/bg12.jpg')no-repeat center center fixed"
          });
      });

      $("#button-bg13").click(function() {
          $("body").css({
              "background": "url('/pepes/public/HTML/assets/img/bg13.jpg')repeat"
          });

      });
      /**
       * Background Changer end
       
  });
*/
//TOGGLE CLOSE
    $('.nav-toggle').click(function() {
        //get collapse content selector
        var collapse_content_selector = $(this).attr('href');

        //make the collapse content to be shown or hide
        var toggle_switch = $(this);
        $(collapse_content_selector).slideToggle(function() {
            if ($(this).css('display') == 'block') {
                //change the button label to be 'Show'
                toggle_switch.html('<span class="entypo-minus-squared"></span>');
            } else {
                //change the button label to be 'Hide'
                toggle_switch.html('<span class="entypo-plus-squared"></span>');
            }
        });
    });


    $('.nav-toggle-alt').click(function() {
        //get collapse content selector
        var collapse_content_selector = $(this).attr('href');

        //make the collapse content to be shown or hide
        var toggle_switch = $(this);
        $(collapse_content_selector).slideToggle(function() {
            if ($(this).css('display') == 'block') {
                //change the button label to be 'Show'
                toggle_switch.html('<span class="entypo-up-open"></span>');
            } else {
                //change the button label to be 'Hide'
                toggle_switch.html('<span class="entypo-down-open"></span>');
            }
        });
        return false;
    });
    //CLOSE ELEMENT
    $(".gone").click(function() {
        var collapse_content_close = $(this).attr('href');
        $(collapse_content_close).hide();



    });

//tooltip
    $('.tooltitle').tooltip();
 