/* Anything that has to do with scrolling is below */
var mywindow = jQuery(window);
var mypos = mywindow.scrollTop();
var up = false;
var newscroll;

/* Animating header on scroll */
mywindow.scroll(function(){
  newscroll = mywindow.scrollTop();
  if (newscroll > 150) {
    if (newscroll > mypos && !up) {
        jQuery( "#header" ).stop().animate({
          //opacity: "0",
          marginTop: "-105px",
        },400);

        up = !up;
        console.log(up);
      } else if(newscroll < mypos && up) {
        jQuery( "#header" ).stop().animate({
          //opacity: "1",
          marginTop: "0",
        },400);
        up = !up;
      };
      mypos = newscroll;
      return false
  };
});
if(jQuery(window).scrollTop() > 1000){
  jQuery('.stat__ui--inner h4').each(function () {
    var stat = $(this);
    jQuery({ Counter: 0 }).animate({ Counter: stat.text() }, {
      duration: 3000,
      easing: 'easeOutQuint',
      step: function () {
        stat.text(Math.ceil(this.Counter));
      }
    });
  });
};
jQuery(".whoa").on("click", function(){

    //Desktop////////////////////////////////////////////
    jQuery(".browser-outer").animate({
      width: "100%"//,
      //height: "537px"
    }, 600);
    jQuery(".block-1").animate({
      width: "25%"
    }, 600);
    jQuery(".browser-inner").animate({
      marginTop: "0"
    }, 600);
    jQuery(".browser-bottom").animate({
      opacity: "0"
    }, 600);
    jQuery(".first-circle").animate({
      left: "0"
    }, 600);
    jQuery(".second-circle").animate({
      left: "0",
      width: "10px",
      marginLeft: "0"
    }, 600);
    jQuery(".last-circle").animate({
      opacity: "1"
    }, 600);
    
    //Tablet////////////////////////////////////////////
    jQuery(".browser-outer").delay(2400).animate({
      width: "40%",
      height: "682px"
    }, 600);
    jQuery(".browser-bottom").delay(2600).animate({
      opacity: "1"
    }, 600);
    jQuery(".block-1").delay(2400).animate({
      width: "50%"
    }, 600);
    
    //Device attributes
    jQuery(".first-circle").delay(2400).animate({
      left: "38%"
    }, 600);
    jQuery(".second-circle").delay(2400).animate({
      left: "48%",
      width: "50px",
      marginLeft: "-25px"
    }, 600);
    jQuery(".last-circle").delay(2400).animate({
      opacity: "0"
    }, 600);
    
    //Content scrolling
    jQuery(".browser-inner").delay(3000).animate({
      marginTop: "-180px"
    }, 1500);
    jQuery(".browser-inner").delay(3500).animate({
      marginTop: "0px"
    }, 600);
    
    
    
    //Mobile////////////////////////////////////////////
    jQuery(".browser-outer").delay(4800).animate({
      width: "20%",
      height: "600px"
    }, 600);
    jQuery(".block-1").delay(4800).animate({
      width: "100%"
    }, 600);
    
    //Content scrolling
    jQuery(".browser-inner").delay(2000).animate({
      marginTop: "-900px"
    }, 1500);
    

  
});